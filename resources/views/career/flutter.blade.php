@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="career">Careers</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Flutter</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Flutter</h3>
                    <p class="sub-dec ms-4 mt-4">We are the fastest growing Website Development company having a
                        team of expert
                        programmers. Hire PHP developers who help your business grow bigger and faster
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
                                <span>Must have built at least two Android and/or iOS apps with Flutter</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Candidate must have flutter and dart experience</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Experience of handling location services , notifications ,
                                    video recording , rest APIs , 3rd party integration in flutter</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Experience in handling user friendly UI based on
                                    requirements in flutter</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Knowledge and understanding of Fire-base</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Ability to learn and adapt as per the requirement and
                                    ready to face new challenges.</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Have published one or more mobile apps in Google Play
                                    or App Store.</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Working knowledge of the general mobile landscape, architectures,
                                    trends, and emerging technologies.</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Solid understanding of the full mobile development life cycle,
                                    including automated testing and building.</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Be proficient in using version control and continuous integration,
                                    with tools such as Git and Jenkins.</span>
                            </li>
                            <li>
                                <img src="{{ asset('image/Orange-write-sign.svg')}}" alt="write-sign">
                                <span>Good communication skills in English.</span>
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
        <h1>Apply for flutter developer</h1>
        <p>Are you interested to be part of our excellent team?</p>
        @include('career.careerForm')
    </div>
</div>
@endsection