@extends('layout.default')
@section('content')
    <div class="card">
        <div class="card-header py-5">
            <div class="d-flex justify-content-between align-items-center">
                <span id="card_title">
                    <h4 class="m-0">{{ __('Show '.$pageTitle) }}</h4>
                </span>
                <div class="float-right">
                    <a href="{{ route($routePath.'.index') }}" class="btn btn-primary btn-sm float-right font-weight-bolder">
                        <i class="fa fa-arrow-left"></i>Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover w-100">
                
                            <tr>
                                <td width="20%">Page</td>
                                <td>{{ $content->page }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Content Type</td>
                                <td>{{ $content->content_type }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Title</td>
                                <td>{{ $content->title }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Body</td>
                                <td>{{ $content->body }}</td>
                            </tr>
                            <tr>
                                <td width="20%">File</td>
                                <td>{{ $content->file }}</td>
                            </tr>
                            @if($content->content_type == 'files')
                                <tr>
                                    <td width="20%">Files</td>
                                    <td>
                                        @foreach ($content->contentFiles as $v)
                                            <div class="btn-group mb-3 mr-3">
                                                <a href="{{ '/'.$v->file_dir.'/'.$v->file }}" class="btn btn-primary" target="_blank">{{ $v->file }}</a>
                                                {{-- <button class="btn btn-danger btn-delete-content-file" data-id="{{ $v->id }}"><i class="fa fa-times pr-0"></i></button> --}}
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>
                            @endif
                            {{-- <tr>
                                <td width="20%">Extra</td>
                                <td>{{ $content->extra }}</td>
                            </tr> --}}

            </table>
        </div>
    </div>
@endsection
