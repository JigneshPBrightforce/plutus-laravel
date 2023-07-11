@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Client Confidentiality</li>
            </ol>
        </nav>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Client Confidentiality</h3>
    </div>
</div>
<div class="our-vission-mission nda-row">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <h4>Client ideas and data confidentiality are of utmost important to us and we highly value it. We are
            thoroughly committed to
            protect our client confidentiality throughout the project life cycle. We encourage clients to sign
            by-laterals NDA to
            protect confidentiality of their idea and data. Here is what exactly our NDA includes:
        </h4>
    </div>
    <div class="container">
        <div class="row aos-init" data-aos="fade-up" data-aos-delay="500">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="vission">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Employee NDA</h3>
                    <p>All employees are required to sign NDA at the time of joining
                        Plutus Technologies. it is to ensure that employees understand
                        and value confidentiality of the client and solutions they build
                        for them.
                    </p>
                    <p>Employees are restricted from disclosing any data, information
                        algorithm, code snippets, database or any other project related
                        information to any third party person or organization written or
                        verbal.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="text-center employee-nda ">
                    <img src="{{ asset('image/Employee-NDA.svg')}}" class="" alt="">
                </div>
            </div>
        </div>
        <div class="row data-security-row mission-row aos-init" data-aos="fade-up" data-aos-delay="600">
            <div class="col-lg-5 order-1 order-lg-1">
                <div class="text-center">
                    <img src="{{ asset('image/Data-security.svg')}}" class="w-100" alt="">
                </div>
            </div>
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="mission">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Data Security</h3>
                    <ul class="mt-4">
                        <li class="d-flex align-items-center mb-2 justify-content-lg-end">Firewalls are installed to
                            prevent any unauthorized access to our network.</li>
                        <li class="d-flex align-items-center mb-2 justify-content-lg-end">CCTVs and bio-metric
                            access ensure no unauthorized access of premises.</li>
                        <li class="d-flex align-items-center mb-2 justify-content-lg-end">Restricted usage of CDs,
                            DVDs, pen-drives or any other storage devices.</li>
                        <li class="d-flex align-items-center justify-content-lg-end">Live servers are accessible
                            only through our dedicated IPs.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inquiryform')
@endsection