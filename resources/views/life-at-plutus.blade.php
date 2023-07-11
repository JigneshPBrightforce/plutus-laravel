@extends('layouts.app')

@section('content')<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Life-at-Plutus</li>
            </ol>
        </nav>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Life-at-Plutus</h3>
    </div>
</div>
<div class="expertise space">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Plutus Celebrations
        </h3>
        <div class="heading-t aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="light-brown features" id="features">
                <div class="row d-flex flex-wrap v-tabs">
                    <div class="left-vertical-menu-tab v-tab-head d-none d-lg-block">
                        <a class="v-tab-link active" data-target="#republicday-tab"><span></span>Republic day</a>
                        <a class="v-tab-link" data-target="#holi-tab"><span></span>Holi</a>
                        <a class="v-tab-link" data-target="#womensday-tab"><span></span>Women's day</a>
                        <a class="v-tab-link" data-target="#navratri-tab"><span></span>Navratri</a>
                        <a class="v-tab-link" data-target="#picnic-tab"><span></span>Picnic</a>
                        <a class="v-tab-link" data-target="#diwali-tab"><span></span>Diwali</a>
                        <a class="v-tab-link" data-target="#christmas-tab"><span></span>Christmas</a>
                    </div>
                    <div class="col v-tab-pane">
                        <a class="v-tab-head v-tab-link d-block d-lg-none active"
                            data-target="#republicday-tab">Republic
                            day</a>
                        <div id="republicday-tab" class="collapse fade in lifeplutus">
                            <div class="row ">
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link "
                                        href="{{ asset('image/lifeatplutus/republicday-1.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/republicday-1.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/republicday-1.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/republicday-1.webp')}}" alt=""></a>
                                </div>

                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link d-block d-lg-none" data-target="#holi-tab">Holi</a>
                        <div id="holi-tab" class="collapse fade lifeplutus">
                            <div class="row ">
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link col" href="{{ asset('image/lifeatplutus/holi.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/holi.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link col"
                                        href="{{ asset('image/lifeatplutus/holi-2.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/holi-2.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link col"
                                        href="{{ asset('image/lifeatplutus/holi-3.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/holi-3.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/republicday-1.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/republicday-1.webp')}}" alt=""></a>
                                </div>

                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link d-block d-lg-none" data-target="#womensday-tab">Women's
                            day</a>
                        <div id="womensday-tab" class="collapse fade lifeplutus">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/womensday-1.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/womensday-1.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/womensday-2.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/womensday-2.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/womensday-3.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/womensday-3.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/womensday-4.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/womensday-4.webp')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link d-block d-lg-none" data-target="#navratri-tab">Navratri</a>
                        <div id="navratri-tab" class="collapse fade lifeplutus">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/navratri.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/navratri.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/navratri-2.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/navratri-2.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/navratri-3.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/navratri-3.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/navratri-4.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/navratri-4.webp')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link d-block d-lg-none" data-target="#picnic-tab">Picnic</a>
                        <div id="picnic-tab" class="collapse fade lifeplutus">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/trip-1.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/trip-1.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/trip-2.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/trip-2.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/trip-3.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/trip-3.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/trip-4.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/trip-4.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/trip-5.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/trip-5.webp')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link d-block d-lg-none" data-target="#diwali-tab">Diwali</a>
                        <div id="diwali-tab" class="collapse fade lifeplutus">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-10.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-10.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-5.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-5.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-6.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-6.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-2.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-2.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-7.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-7.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-3.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-3.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-8.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-8.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-4.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-4.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-9.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-9.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/diwali-1.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/diwali-1.webp')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link d-block d-lg-none" data-target="#christmas-tab">Christmas</a>
                        <div id="christmas-tab" class="collapse fade lifeplutus">
                            <div class="row ">
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link" href="{{ asset('image/lifeatplutus/christmas.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/christmas.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/christmas-1.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/christmas-1.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/christmas-2.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/christmas-2.webp')}}" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a class="example-image-link"
                                        href="{{ asset('image/lifeatplutus/christmas-3.webp')}}"
                                        data-lightbox="example-set"><img class="example-image"
                                            src="{{ asset('image/lifeatplutus/christmas-3.webp')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inquiryform')

@push('extra-css')
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
@endpush
@push('extra-js-scripts')
<script src="js/swiper.min.js"></script>
<script src="js/lightbox-plus-jquery.min.js"></script>
@endpush
@endsection