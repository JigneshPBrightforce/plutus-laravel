@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </nav>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Portfolio</h3>
    </div>
</div>
<section class="portfolio-section" id="portfolio">
    <div class="container">
        <div class="portfolio-menu mt-2 mb-4">
            <nav class="controls">
                <button type="button" class="control outline" data-filter="all">All</button>
                <button type="button" class="control outline" data-filter=".web">Python</button>
                <button type="button" class="control outline" data-filter=".dev">Web Design</button>
                <button type="button" class="control outline" data-filter=".wp">React</button>
                <button type="button" class="control outline" data-filter=".flutter">Flutter</button>
                <button type="button" class="control outline" data-filter=".angular">Angular</button>
                <button type="button" class="control outline" data-filter=".ios">iOS</button>
                <button type="button" class="control outline" data-filter=".android">Android</button>
                <button type="button" class="control outline" data-filter=".wordpress">WordPress</button>
                <button type="button" class="control outline" data-filter=".dotnet">.NET</button>
            </nav>
        </div>
        <ul class="row portfolio-item">
            <li class="mix android col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="{{ asset('image/reshyne.jpg') }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Android</span>
                        <h3 class="category">RapidParty</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="{{ asset('image/reshyne.jpg') }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Recover</h3>
                        <p class="category">A digital marketplace that provides affordable and accessible rehab and recovery content to users globally. </p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix wp col-xl-8 col-md-6 col-12 col-sm-6 pd">
                <img src="{{ asset('image/reshyne.jpg') }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix dev col-xl-4 col-md-6 col-12 col-sm-6 pd ">
                <img src="{{ asset('image/RSD.jpg') }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
@include('inquiryform')


@push('extra-css')
<!-- magnific-popup -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
@endpush
@push('extra-js-scripts')
<!-- Mixitup -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>

<script>
// AOS.init({
//     duration: 1200,
// });
var containerEl = document.querySelector(".portfolio-item");
// 2. Passing the configuration object inline
//https://www.kunkalabs.com/mixitup/docs/configuration-object/
var mixer = mixitup(containerEl, {
    animation: {
        effects: "fade translateZ(-100px)",
        effectsIn: "fade translateY(-100%)",
        easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
    }
});
</script>

@endpush

@endsection