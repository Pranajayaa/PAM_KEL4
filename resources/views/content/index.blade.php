@extends('layout.default')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="m-0">{{ $message }}</p>
        </div>
    @endif
    <div class="card">
        <div class="card-header py-5">
            <div class="d-flex justify-content-between align-items-center">
                <span id="card_title">
                    <h4 class="m-0">{{ __('List '.$pageTitle) }}</h4>
                </span>
                <div class="float-right">
                    @can($permissionName.'-create')
                        <a href="{{ route($routePath.'.create') }}" class="btn btn-primary btn-sm float-right font-weight-bolder">
                            <i class="fa fa-plus-circle"></i>New Record
                        </a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="DataTable" class="table table-striped table-bordered table-hover w-100">
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            var table = $('#DataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route($routePath.'.index') }}",
                columns: [
                    {
                        title: 'No',
                        class: 'text-center',
                        width: '1%',
                        data: 'id',
                        render: function (id, x, t) {
                            return t.idx;
                        }
                    },
                    {
                        title: 'Page',
                        data: 'page'
                    },
                    {
                        title: 'Content Type',
                        data: 'content_type'
                    },
                    {
                        title: 'Title',
                        data: 'title'
                    },
                    {
                        title: 'Action',
                        class: 'text-center',
                        width: '1%',
                        data: 'id',
                        render: function(id) {
                            return `
                                <form action="{{ route($routePath.'.index') }}/${id}" method="POST" class="d-flex">
                                    @can($permissionName.'-show')
                                        <a class="btn btn-primary btn-xs d-flex justify-content-center align-items-center" href="{{ route($routePath.'.index') }}/${id}"><i class="fa fa-fw fa-eye p-0 d-flex justify-content-center"></i></a>
                                    @endcan
                                    @can($permissionName.'-edit')
                                        <a class="btn btn-success btn-xs d-flex justify-content-center align-items-center" href="{{ route($routePath.'.index') }}/${id}/edit"><i class="fa fa-pencil-alt p-0 d-flex justify-content-center"></i></a>
                                    @endcan
                                    @can($permissionName.'-delete')
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs d-flex justify-content-center align-items-center btn-delete"><i class="fa fa-trash-alt p-0 d-flex justify-content-center"></i></button>
                                    @endcan
                                </form>
                            `;
                        }
                    },
                ],
                order: [[ 0, "DESC" ]]
            });

            // table.on( 'draw.dt', function () {
            //     var info = table.page.info();
            //     var i = 0;
            //     for (let x = (info.start + 1); x <= info.end; x++) {
            //         table.column(0).nodes()[i].innerHTML = x;
            //         i++;
            //     }
            // } ).draw();

            $('body').on('click', '.btn-delete', function(event) {
                event.preventDefault();

                var form = $(this).closest('form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: form.attr('method'),
                            url: form.attr('action'),
                            data: form.serialize(),
                            success: function (r) {
                                Swal.fire({
                                    icon: 'success',
                                    title: r.message
                                });
                                
                                table.ajax.reload();
                            },
                            error: function (e) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'An error occurred.'
                                });
                            },
                        });
                    }
                })
            });
        });
    </script>
@endsection
