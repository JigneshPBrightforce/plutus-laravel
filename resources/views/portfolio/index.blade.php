@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><span>Home</span></li>
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
                <button type="button" class="cursor-hover control outline" data-filter="all">All</button>
                <button type="button" class="cursor-hover control outline" data-filter=".python">Python</button>
                <button type="button" class="cursor-hover control outline" data-filter=".web">Web Design</button>
                <button type="button" class="cursor-hover control outline" data-filter=".reactjs">ReactJS</button>
                <button type="button" class="cursor-hover control outline" data-filter=".flutter">Flutter</button>
                <button type="button" class="cursor-hover control outline" data-filter=".angular">Angular</button>
                <button type="button" class="cursor-hover control outline" data-filter=".ios">iOS</button>
                <button type="button" class="cursor-hover control outline" data-filter=".android">Android</button>
                <button type="button" class="cursor-hover control outline" data-filter=".wordpress">WordPress</button>
                <button type="button" class="cursor-hover control outline" data-filter=".dotnet">.NET</button>
            </nav>
        </div>
        <ul class="row portfolio-item">
            @foreach($portfolios as $data)
            <li
                class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd <?php echo strtolower(str_replace(",", " ", $data->technology));?>">
                <img src="{{ asset($data->project_image) }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        @if($data->technology != '')
                        @foreach(explode(",",$data->technology) as $tech)
                        <span class="overlay-content-badge">{{$tech}}</span>
                        @endforeach
                        @endif
                        <h3 class="category">{{$data->project_name}}</h3>
                        <p class="category">{{$data->project_short_description}}</p>
                        <a href="{{ url('portfolio/'. $data->slug) }}" title="View Project" target="_blank"
                            class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            @endforeach
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