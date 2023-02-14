@extends('layout.default')
@section('content')
    @includeif('partials.errors')
    <div class="card card-default">
        <div class="card-header py-5">
            <div class="d-flex justify-content-between align-items-center">
                <span id="card_title">
                    <h4 class="m-0">{{ __('Create '.$pageTitle) }}</h4>
                </span>
                <div class="float-right">
                    <a href="{{ route($routePath.'.index') }}" class="btn btn-primary btn-sm float-right font-weight-bolder">
                        <i class="fa fa-arrow-left"></i>Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route($routePath.'.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('content.form')

            </form>
        </div>
    </div>
@endsection
