<?php

namespace App\Classes\Helper;

use Illuminate\Support\Facades\DB;

class Custom
{
    public static function defaultRelation($a)
    {
        return [DB::raw($a->id_kejati . $a->id_kejari . $a->id_cabjari . '::varchar'), DB::raw('pidum.pdm_spdp.id_kejati||pidum.pdm_spdp.id_kejari||pidum.pdm_spdp.id_cabjari')];
    }

    public static function assembleData($a)
    {
        $baseData = [
            'pidum.pdm_spdp' => [
                'select' => ['file'],
                'where' => [
                    ['id_perkara', $a->id_perkara],
                    self::defaultRelation($a),
                ]
            ]
        ];
        return $baseData;
    }

    public static function assembleDataLocal($a)
    {
        $baseData = [
            // 'postlinks' => [ //table name
            //     'select' => ['*'], //selected field
            //     'where' => [ //select conditions
            //         ['postId', $a->Id], //local key , conditions
            //     ],
            //     'operation' => 'get' //execute query as get or first
            // ],
            // 'votes' => [
            //     'select' => ['*'],
            //     'where' => [
            //         ['postId', $a->Id],
            //     ],
            //     'operation' => 'get'
            // ],
            // 'posthistory' => [
            //     'select' => ['*'],
            //     'where' => [
            //         ['postId', $a->Id],
            //     ],
            //     'operation' => 'get'
            // ],
            // 'posthistory.users' => [ //if relation related on other table / sub queries
            //     'select' => ['*'],
            //     'where' => [
            //         ['id', 'posthistory.UserId'],
            //     ],
            //     'operation' => 'first'
            // ],
            // 'comments' => [
            //     'select' => ['*'],
            //     'where' => [
            //         ['postId', $a->Id],
            //     ],
            //     'operation' => 'get'
            // ],
        ];
        return $baseData;
    }

    //hehe lieur
    public static function executeRelationQuery($pgConnection, $selection)
    {
        //loop and modify given query
        $query = array_map(function ($a) use ($pgConnection) {
            $baseData = self::assembleDataLocal($a);
            //start looping array that contain relation information
            foreach ($baseData as $key => $value) {
                //check if table relation rely on sub query
                $childRelation = false;
                if (str_contains($key, '.')) {
                    $arrKey = explode('.', $key);
                    $key = end($arrKey);
                    $childRelation = true;
                }
                ${$key} = $pgConnection
                    ->table($key)
                    ->select($value['select']);
                if (!$childRelation) {
                    // if table not related to other sub queries
                    //loop where conditions
                    foreach ($value['where'] as $i => $conditions) {
                        ${$key}->where($conditions[0], $conditions[1]);
                    }
                    ${$key} = ${$key}->{$value['operation']}();
                } else {
                    //if subquery need to involved to query building
                    $baseDataRelation = array_slice($arrKey, 0, -1);
                    $baseDataRelation = implode(".", $baseDataRelation); // get array value except the last 
                    //loop where conditions
                    foreach ($value['where'] as $i => $conditions) {
                        $arrConditions = explode('.', $conditions[1]);
                        $parentRelation = reset($arrConditions);
                        if ($baseData[$baseDataRelation]['operation'] === 'get') {
                            //if sub queries not limited
                            foreach (${$parentRelation} as $subKey => $subVal) {
                                //loob the entire sub queries and add attributes
                                ${$key} = $pgConnection
                                    ->table($key)
                                    ->select($value['select']);
                                $conditions[1] = $subVal->{end($arrConditions)};
                                $subVal->{$key} = ${$key}->where($conditions[0], $conditions[1])->{$value['operation']}();
                            }
                        } else {
                            //if sub queries is limited to 1 row
                            ${$key}->where($conditions[0], $conditions[1])->{$value['operation']}();
                            //add relation attributes
                            ${$baseDataRelation}->{$key} = ${$key};
                        }
                    }
                }
            }
            //assemble relation attributes
            foreach ($baseData as $key => $value) {
                if (!str_contains($key, '.')) {
                    $a->{$key} = ${$key};
                }
            }
            return $a;
        }, $selection);
        return $query;
    }

    // create another query builder for multiple subqueries
    // v2, hopefully it will more dynamic & faster
    public static function assembleDataV2Local($a)
    {
        $baseData = [
            'postlinks' => [ //table name
                'select' => ['*'], //selected field
                'where' => [ //select conditions
                    ['postId', $a->Id], //local key , conditions
                ],
                'operation' => 'get' //execute query as get or first
            ],
            'votes' => [
                'select' => ['*'],
                'where' => [
                    ['postId', $a->Id],
                ],
                'operation' => 'get'
            ],
            'posthistory' => [
                'select' => ['*'],
                'where' => [
                    ['postId', $a->Id],
                ],
                'operation' => 'get',
                'relations' => [ //if relation related on other table / sub queries
                    'users' => [
                        'select' => ['*'],
                        'where' => [
                            ['Id', 'posthistory.UserId'],
                        ],
                        'operation' => 'first'
                    ],
                ]
            ],
            'comments' => [
                'select' => ['*'],
                'where' => [
                    ['postId', $a->Id],
                ],
                'operation' => 'first'
            ],
        ];
        return $baseData;
    }

    public static function executeRelationQueryV2($dbConnection, $selection)
    {
        //loop and modify given query
        $query = array_map(function ($a) use ($dbConnection) {
            $baseData = self::assembleDataV2Local($a);
            foreach ($baseData as $key => $value) {
                ${$key} = self::generateQuery($dbConnection, $key, $value);
                $a->$key = ${$key};
            }
            return $a;
        }, $selection);
        return $query;
    }

    public static function generateQuery($dbConnection, $table, $data, $relatedData = null)
    {
        if ($relatedData !== null) {
            foreach ($data['where'] as $key => $value) {
                $localAndForeign = explode('.', $value[1]);
                $data['where'][$key][1] = $relatedData->{$localAndForeign[1]} === null ? "null" : $relatedData->{$localAndForeign[1]};
            }
        }
        foreach ($data['select'] as $key => $value) {
            $baseSelect = $value . ', ';
        }
        try {
            $baseSelect = rtrim($baseSelect, ', ');
            $baseConditions = "WHERE";
            foreach ($data['where'] as $key => $value) {
                if ($key !== 0) {
                    $baseConditions .= ' AND';
                }
                $baseConditions .= " {$value[0]} = {$value[1]}";
            }

            $baseQuery = "SELECT {$baseSelect} FROM {$table} {$baseConditions}";
            $executedQuery = $dbConnection;

            $executedQuery = $executedQuery->select($baseQuery);
            if ($data['operation'] === 'first') {
                $executedQuery = array_pop($executedQuery);
            }
            if (isset($data['relations']) && $executedQuery !== null) {
                foreach ($data['relations'] as $key => $value) {
                    if ($data['operation'] === 'first') {
                        $executedQuery->{$key} = self::generateQuery($dbConnection, $key, $value, $executedQuery);
                    } else {
                        foreach ($executedQuery as $q => $v) {
                            $v->{$key} = self::generateQuery($dbConnection, $key, $value, $v);
                        }
                    }
                }
            }
        } catch (\Throwable $th) {
            dump($th);
        }
        return $executedQuery;
    }
}
