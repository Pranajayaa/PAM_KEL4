@extends('layout.default')
@section('content')
<div class="row">
    <div class="col-md-4">
        @php
            $user = auth()->user();
        @endphp
        <div class="card h-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-center py-0">
                <div>
                    <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 text-hover-primary">{{ $user->name }}</a>
                    <br>
                    <span class="font-weight-bold text-muted font-size-lg">{{ $user->roles[0]->name }}</span>
                </div>
                <img src="/assets/media/svg/avatars/029-boy-11.svg" alt="" class="h-100px">
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0">
            <div class="card-body">
                <div class="d-flex align-items-center p-5">
                    <div class="mr-6">
                        <span class="svg-icon svg-icon-success svg-icon-4x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4">
                            Users
                        </a>
                        <div class="font-weight-bolder font-size-h2">
                            {{ $userCount }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom wave wave-animate-fast wave-success mb-8 mb-lg-0">
            <div class="card-body">
                <div class="d-flex align-items-center p-5">
                    <div class="mr-6">
                        <span class="svg-icon svg-icon-success svg-icon-4x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"></path>
                                    <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4">
                            Roles
                        </a>
                        <div class="font-weight-bolder font-size-h2">
                            {{ $roleCount }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection