@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="career">Careers</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laravel</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Laravel</h3>
                    <p class="sub-dec ms-4 mt-4">We are the fastest growing Website Development company having a
                        team of expert
                        programmers. Hire Laravel developers who help your business grow bigger and faster
                        in the digital world.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">

            </div>
        </div>
    </div>
</div>
<div class="careers-details-page-details space">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="row align-items-flex-start">
            <div class="col-lg-8">
                <div class="aos-init careers-details-responsibilities" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Responsibilities</h3>
                    <div class="careers-details-responsibilities-list">
                        <ul>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Write “clean”, well-designed code</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Produce detailed specifications</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Troubleshoot, test and maintain the core product software and
                                    databases to ensure strong optimization and functionality</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Contribute in all phases of the development life cycle</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Follow industry best practices</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Develop and deploy new features to facilitate related procedures
                                    and tools if necessary</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="aos-init careers-details-responsibilities requirements" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Requirements</h3>
                    <div class="careers-details-responsibilities-list">
                        <ul>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Proven software development experience in PHP (any framework)</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Understanding of open source projects like Joomla, Drupal, Wikis, osCommerce,
                                    etc</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Demonstrable knowledge of web technologies including HTML, CSS, Javascript,
                                    AJAX etc</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Good knowledge of relational databases, version control tools and of
                                    developing web services</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Experience in common third-party APIs (Google, Facebook, Ebay etc)</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Passion for best design and coding practices and a desire to develop new bold
                                    ideas</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                @include('career.joblist')
            </div>
        </div>
        <div class="row aos-init" data-aos="fade-up" data-aos-delay="500">
            <div class="col-12">
                <div class="">
                    <button class="btn btn-primary" id="apply_now">Apply now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-lightorange space careers-details-bottom-form" style="display: none">
    <div class="container aos-init" data-aos="fade-up">
        <h1>Apply for laravel developer</h1>
        <p>Are you interested to be part of our excellent team?</p>
        @include('career.careerForm')
    </div>
</div>
@endsection