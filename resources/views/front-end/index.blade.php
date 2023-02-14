@extends('front-end.layout.default')
@section('styles')
@endsection
@section('content')
    <section class="features-area border-bottom p-top-105 p-bottom-75">
        <div class="icon-boxes">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-box icon-box-fourteen text-center">
                            <span class="bg-secondary icon-rounded"><i class="la la-money"></i></span>
                            <h6 class="color-dark">Principal Investing</h6>
                            <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi. Totam rem
                                aperiam, eaque ipsa quae abillo.</p>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-box icon-box-fourteen text-center">
                            <span class="bg-secondary icon-rounded"><i class="la la-bar-chart"></i></span>
                            <h6 class="color-dark">Project Development</h6>
                            <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi. Totam rem
                                aperiam, eaque ipsa quae abillo.</p>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-box icon-box-fourteen text-center">
                            <span class="bg-secondary icon-rounded"><i class="la la-area-chart"></i></span>
                            <h6 class="color-dark">Financial Advisory</h6>
                            <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi. Totam rem
                                aperiam, eaque ipsa quae abillo.</p>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-3 -->
                </div>
            </div>
        </div><!-- ends: .icon-boxes -->
    </section><!-- ends: .features-area -->
    <section class="content-block content-block--15">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 m-bottom-20">
                    <div class="row align-items-center">
                        <div class="col-lg-5 order-lg-0 order-1">
                            <div class="content-desc">
                                <h4>Showcase 1</h4>
                                <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veri tatis et quasi archi. Totam rem
                                    aperiam, eaque ipsa quae abillo. Totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis
                                    et quasi archi.
                                    <br><br> On the other hand we denounce with righteous indignation and dislike men who
                                    are so beguiled.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 order-lg-1 order-0">
                            <img src="{{ asset('front-end/build/img/service1.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- ends: .col-lg-12 -->
                <div class="col-lg-12 m-bottom-20">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="{{ asset('front-end/build/img/service2.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="content-desc">
                                <h4>Showcase 2</h4>
                                <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veri tatis et quasi archi. Totam rem
                                    aperiam, eaque ipsa quae abillo. Totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis
                                    et quasi archi.
                                    <br><br> On the other hand we denounce with righteous indignation and dislike men who
                                    are so beguiled.
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- ends: .col-lg-12 -->
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-5 order-lg-0 order-1">
                            <div class="content-desc">
                                <h4>Lorem Explanation</h4>
                                <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veri tatis et quasi archi. Totam rem
                                    aperiam, eaque ipsa quae abillo. Totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis
                                    et quasi archi.
                                    <br><br> On the other hand we denounce with righteous indignation and dislike men who
                                    are so beguiled.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 order-lg-1 order-0 margin-md-60">
                            <img src="{{ asset('front-end/build/img/service3.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- ends: .col-lg-12 -->
            </div>
        </div>
    </section><!-- ends: .service-area -->
    <div class="cta-wrapper cta--nine bg-primary">
        <div class="cta--none-contents">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('front-end/build/img/cta-img') }}.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>More Explanation <br> <span>Search lorem now.</span></h3>
                        <a href="" class="btn btn-secondary">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ends: ends: .cta-wrapper -->
    <section class="news-area p-top-100 p-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 section-title">
                    <h2>Check Our Latest News</h2>
                    <p>Deserunt dolore voluptatem assumenda quae possimus sunt dignissimos tempora officia. Lorem ipsum
                        dolor sit amet consectetur adipisicing dolore.</p>
                </div>
                <div class="post--card-four col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card post--card post--card4">
                                <figure>
                                    <img src="{{ asset('front-end/build/img/blog-1') }}.jpg" alt="">
                                </figure>
                                <div class="card-body">
                                    <h6><a href="">How to Run a Successful Business Meeting</a></h6>
                                    <p>Investig ationes demons trave runt lec tores legere liusry quod ii legunt saepius
                                        claritas Investig ationes.</p>
                                    <ul class="post-meta d-flex m-top-20">
                                        <li>Aug 12, 2019</li>
                                        <li>in <a href="">Industry</a></li>
                                    </ul>
                                </div>
                            </div><!-- End: .card -->
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card post--card post--card4">
                                <figure>
                                    <img src="{{ asset('front-end/build/img/blog-2') }}.jpg" alt="">
                                </figure>
                                <div class="card-body">
                                    <h6><a href="">Gold Prices Soar, but Many People don’t Believe it</a></h6>
                                    <p>Investig ationes demons trave runt lec tores legere liusry quod ii legunt saepius
                                        claritas Investig ationes.</p>
                                    <ul class="post-meta d-flex m-top-20">
                                        <li>Aug 12, 2019</li>
                                        <li>in <a href="">Industry</a></li>
                                    </ul>
                                </div>
                            </div><!-- End: .card -->
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card post--card post--card4">
                                <figure>
                                    <img src="{{ asset('front-end/build/img/blog-3') }}.jpg" alt="">
                                </figure>
                                <div class="card-body">
                                    <h6><a href="">Global Automative Market Grows to $600 Billion</a></h6>
                                    <p>Investig ationes demons trave runt lec tores legere liusry quod ii legunt saepius
                                        claritas Investig ationes.</p>
                                    <ul class="post-meta d-flex m-top-20">
                                        <li>Aug 12, 2019</li>
                                        <li>in <a href="">Industry</a></li>
                                    </ul>
                                </div>
                            </div><!-- End: .card -->
                        </div><!-- ends: .col-lg-4 -->
                    </div><!-- ends: .row -->
                </div><!-- ends: .post--card1 -->
            </div>
        </div>
    </section><!-- ends: .news-area -->
@endsection
