@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Career</li>
            </ol>
        </nav>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Career</h3>
    </div>
</div>
<div class="current-opening">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="200">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Current Openings at Plutustec</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="current-opening-list">
            <div class="row">
                <div class="col-lg-6">
                    <div class="current-opening-list-box">
                        <h3>Fullstack developer</h3>
                        <a class="posiition" href="{{ url('career-details-fullstack')}}">
                            <span>2 Position</span>
                            <img class="" src="{{ asset('image/Right-arrow-icon.svg')}}" alt="right-arrow">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="current-opening-list-box">
                        <h3>Flutter developer</h3>
                        <a class="posiition" href="{{ url('career-details-flutter')}}">
                            <span>2 Position</span>
                            <img class="" src="{{ asset('image/Right-arrow-icon.svg')}}" alt="right-arrow">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="current-opening-list-box">
                        <h3>PHP developer</h3>
                        <a class="posiition" href="{{ url('career-details-php')}}">
                            <span>2 Position</span>
                            <img class="" src="{{ asset('image/Right-arrow-icon.svg')}}" alt="right-arrow">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="current-opening-list-box">
                        <h3>Laravel developer</h3>
                        <a class="posiition" href="{{ url('career-details-laravel')}}">
                            <span>2 Position</span>
                            <img class="" src="{{ asset('image/Right-arrow-icon.svg')}}" alt="right-arrow">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="current-opening-list-box">
                        <h3>iOS developer</h3>
                        <a class="posiition" href="{{ url('career-details-ios')}}">
                            <span>2 Position</span>
                            <img class="" src="{{ asset('image/Right-arrow-icon.svg')}}" alt="right-arrow">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="current-opening-list-box">
                        <h3>BDE</h3>
                        <a class="posiition" href="{{ url('career-details-bde')}}">
                            <span>2 Position</span>
                            <img class="" src="{{ asset('image/Right-arrow-icon.svg')}}" alt="right-arrow">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="current-opening-list-box">
                        <h3>Freshers</h3>
                        <a class="posiition" href="{{ url('career-details-fresher')}}">
                            <span>2 Position</span>
                            <img class="" src="{{ asset('image/Right-arrow-icon.svg')}}" alt="right-arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="advantage bg-lightblue space">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="200">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Advantages @ Plutustec</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="advantage-list">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/Salaries.svg')}}" alt="Salaries">
                        <h3>Salaries as per industry standards</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/half-yearly-appraisals.svg')}}" alt="appraisals">
                        <h3>Half yearly appraisals</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/friendly-environment.svg')}}" alt="friendly-environment">
                        <h3>Friendly environment</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/work-life-balance.svg')}}" alt="work-life-balance">
                        <h3>Work-life balance</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/5-days-working.svg')}}" alt="workingday">
                        <h3>5 Days working</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/flexible-office-timings.svg')}}" alt="officetime">
                        <h3>Flexible office timings</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/employee-friendly-leave-policies.svg')}}" alt="policies">
                        <h3>Employee friendly leave policies</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/work-from-home.svg')}}" alt="wfh">
                        <h3>Work from home (with prior permissions)</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/project-completion-parties-&-bonuses.svg')}}" alt="party">
                        <h3>Project completion parties & bonuses</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/birthday-celebrations.svg')}}" alt="bday">
                        <h3>Birthday celebrations</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/annual-picnics.svg')}}" alt="picnic">
                        <h3>Annual picnics</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="advantage-list-box">
                        <img class="" src="{{ asset('image/career-growth-plan.svg')}}" alt="growth">
                        <h3>Career growth plan</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inquiryform')
@endsection