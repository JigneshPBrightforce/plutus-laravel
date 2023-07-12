@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Blog</h3>
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
<div class="blog">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="row">
            <div class="col-md-6">
                <a href="blog-details"><img class="w-100" src="{{ asset('image/reshyne.jpg') }}"
                        alt="Image description"></a>
            </div>
            <div class="col-md-6 ">
                <div class="p-3">
                    <p>Software development</p>
                    <h3 class="subtitle">How to Build a Trading
                        Platform: Market Insights,
                        Tech Stack, Cost</h3>
                    <p>Customer relationships are essential to the success of any business, and the
                        management of those relationships via software can make everything easier.
                        With the help of this article, you'll see what it takes to create a custom CRM.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-wrap">

        <div class="container aos-init" data-aos="fade-up" data-aos-delay="300">
            <div class="listing-view">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                        <div class="blog-listing-box">
                            <div class="listing-sm-img">
                                <a href="blog-details"
                                    aria-label="How AI is transforming the way businesses operate and compete?">
                                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-ai-in-business-transforming-banner.webp"
                                        alt="AI is transforming the way businesses operate and compete" width="350"
                                        height="210">
                                </a>
                            </div>
                            <div class="blog-listing-detail">
                                <span class="category">Web Development</span>
                                <a href="blog-details" aria-label="More from our Blog">How AI is transforming
                                    the way businesses
                                    operate
                                    and compete?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                        <div class="blog-listing-box">
                            <div class="listing-sm-img">
                                <a href="blog-details" aria-label="Google BARD Vs Chat GPT: the ultimate battle">
                                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-the-impact-of-ai-on-customer-banner1.webp"
                                        alt="The impact of AI on customer service and experience" width="350"
                                        height="210">
                                </a>
                            </div>
                            <div class="blog-listing-detail">
                                <span class="category">Web Development</span>
                                <a href="blog-details" aria-label="More from our Blog">Google BARD Vs Chat GPT:
                                    the ultimate battle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                        <div class="blog-listing-box">
                            <div class="listing-sm-img">
                                <a href="blog-details" aria-label="Artificial Intelligence Myths VS Reality">
                                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-ai-myths-vs-reality-banner.webp"
                                        alt="" width="350" height="210">
                                </a>
                            </div>
                            <div class="blog-listing-detail">
                                <span class="category">Web Development</span>
                                <a href="blog-details" aria-label="More from our Blog">Artificial Intelligence
                                    Myths VS Reality</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                        <div class="blog-listing-box">
                            <div class="listing-sm-img">
                                <a href="blog-details"
                                    aria-label="How AI is transforming the way businesses operate and compete?">
                                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-ai-in-business-transforming-banner.webp"
                                        alt="AI is transforming the way businesses operate and compete" width="350"
                                        height="210">
                                </a>
                            </div>
                            <div class="blog-listing-detail">
                                <span class="category">Web Development</span>
                                <a href="blog-details" aria-label="More from our Blog">How AI is transforming
                                    the way businesses
                                    operate
                                    and compete?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                        <div class="blog-listing-box">
                            <div class="listing-sm-img">
                                <a href="blog-details" aria-label="Google BARD Vs Chat GPT: the ultimate battle">
                                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-the-impact-of-ai-on-customer-banner1.webp"
                                        alt="The impact of AI on customer service and experience" width="350"
                                        height="210">
                                </a>
                            </div>
                            <div class="blog-listing-detail">
                                <span class="category">Web Development</span>
                                <a href="blog-details" aria-label="More from our Blog">Google BARD Vs Chat GPT:
                                    the ultimate battle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                        <div class="blog-listing-box">
                            <div class="listing-sm-img">
                                <a href="blog-details" aria-label="Artificial Intelligence Myths VS Reality">
                                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-ai-myths-vs-reality-banner.webp"
                                        alt="" width="350" height="210">
                                </a>
                            </div>
                            <div class="blog-listing-detail">
                                <span class="category">Web Development</span>
                                <a href="blog-details" aria-label="More from our Blog">Artificial Intelligence
                                    Myths VS Reality</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                        <div class="blog-listing-box">
                            <div class="listing-sm-img">
                                <a href="blog-details"
                                    aria-label="How AI is transforming the way businesses operate and compete?">
                                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-ai-in-business-transforming-banner.webp"
                                        alt="AI is transforming the way businesses operate and compete" width="350"
                                        height="210">
                                </a>
                            </div>
                            <div class="blog-listing-detail">
                                <span class="category">Web Development</span>
                                <a href="blog-details" aria-label="More from our Blog">How AI is transforming
                                    the way businesses
                                    operate
                                    and compete?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                        <div class="blog-listing-box">
                            <div class="listing-sm-img">
                                <a href="blog-details" aria-label="Google BARD Vs Chat GPT: the ultimate battle">
                                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-the-impact-of-ai-on-customer-banner1.webp"
                                        alt="The impact of AI on customer service and experience" width="350"
                                        height="210">
                                </a>
                            </div>
                            <div class="blog-listing-detail">
                                <span class="category">Web Development</span>
                                <a href="blog-details" aria-label="More from our Blog">Google BARD Vs Chat GPT:
                                    the ultimate battle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                        <div class="blog-listing-box">
                            <div class="listing-sm-img">
                                <a href="blog-details" aria-label="Artificial Intelligence Myths VS Reality">
                                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-ai-myths-vs-reality-banner.webp"
                                        alt="" width="350" height="210">
                                </a>
                            </div>
                            <div class="blog-listing-detail">
                                <span class="category">Web Development</span>
                                <a href="blog-details" aria-label="More from our Blog">Artificial Intelligence
                                    Myths VS Reality</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@include('inquiryform')
@endsection