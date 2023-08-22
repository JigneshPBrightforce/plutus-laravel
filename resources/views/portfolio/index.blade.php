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
                <button type="button" class="cursor-hover control outline" data-filter=".web">Python</button>
                <button type="button" class="cursor-hover control outline" data-filter=".dev">Web Design</button>
                <button type="button" class="cursor-hover control outline" data-filter=".wp">React</button>
                <button type="button" class="cursor-hover control outline" data-filter=".flutter">Flutter</button>
                <button type="button" class="cursor-hover control outline" data-filter=".angular">Angular</button>
                <button type="button" class="cursor-hover control outline" data-filter=".ios">iOS</button>
                <button type="button" class="cursor-hover control outline" data-filter=".android">Android</button>
                <button type="button" class="cursor-hover control outline" data-filter=".wordpress">WordPress</button>
                <button type="button" class="cursor-hover control outline" data-filter=".dotnet">.NET</button>
            </nav>
        </div>
        <ul class="row portfolio-item">
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="{{ asset('portfolio_images/rapidparty.jpg') }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">RapidParty</h3>
                        <p class="category">Feature-rich event planning. Item registry, crowdfunding, chat and more!</p>
                        <a href="rapidparty_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="portfolio_images/recovr.jpg" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Recover</h3>
                        <p class="category">A digital marketplace that provides affordable and accessible rehab and recovery content to users globally. </p>
                        <a href="recovr_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="portfolio_images/rsd.jpg" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Ready Set Dance</h3>
                        <p class="category">READY SET DANCE is the award winning dance curriculum taking the world by storm!</p>
                        <a href="rsd_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd ">
                <img src="portfolio_images/ste.jpg" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Skill Trade Exam</h3>
                        <p class="category">Study for your exam from anywhere.</p>
                        <a href="skilltrade_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd ">
                <img src="portfolio_images/emvite.jpg" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Emvite</h3>
                        <p class="category">A digital marketplace that provides affordable and accessible rehab and recovery content to users globally.</p>
                        <a href="emvite_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="portfolio_images/agrotrade.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Agrotrade</h3>
                        <p class="category">Explore the new dimension of foodstuff importing experience.</p>
                        <a href="agrotrade_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="portfolio_images/powerzada.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Powerzada</h3>
                        <p class="category">Charge your devices, in any place, at any time, if you have to leave them behind or worry about cables.</p>
                        <a href="powerzada_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="portfolio_images/cycleai.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Cycleai</h3>
                        <p class="category">CycleAl is on a mission to empower micromobility users for their safety through Al.</p>
                        <a href="cycleai_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="portfolio_images/cheekyevents.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">cheekyevents</h3>
                        <p class="category">Speed dating is an organized matchmaking process with the objective of encouraging eligible singles to meet large numbers of potential partners in a short period of time.</p>
                        <a href="cheekyevent_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="portfolio_images/propertywatch.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">PropertyWatch</h3>
                        <p class="category">Protect your properties and gain peace of mind with the property checking solution.</p>
                        <a href="propertyWatch_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd">
                <img src="portfolio_images/msb.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">MSB Instructor App</h3>
                        <p class="category">Easily manage, maximixe, and coordinate your swim lesson schedule across many locations with numerous communities and families.</p>
                        <a href="msb_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <!-- Python -->
            <li class="mix web wp col-xl-6 col-md-6 col-12 col-sm-6 pd ">
                <img src="portfolio_images/reshyne.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Reshyne</h3>
                        <p class="category">Reshyne helps companies make the most of their repairs business.</p>
                        <a href="reshyne_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>     
            <li class="mix web wp col-xl-6 col-md-6 col-12 col-sm-6 pd ">
                <img src="portfolio_images/cycleai-web.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Cycleai Web</h3>
                        <p class="category">CycleAl is on a mission to empower micromobility users for their safety through Al.</p>
                        <a href="cycle_ai_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>       
            <li class="mix web col-xl-6 col-md-6 col-12 col-sm-6 pd angular">
                <img src="portfolio_images/incometax.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Incometax</h3>
                        <p class="category">Reshyne helps companies make the most of their repairs business.</p>
                        <a href="incomtax_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <!-- .Net -->
            <li class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd dotnet">
                <img src="portfolio_images/applebees.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">.Net</span>
                        <h3 class="category">Applebees</h3>
                        <p class="category">Reshyne helps companies make the most of their repairs business.</p>
                        <a href="applebees_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd dotnet">
                <img src="portfolio_images/simpliwork.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">.Net</span>
                        <h3 class="category">Simpliwork</h3>
                        <p class="category">Reshyne helps companies make the most of their repairs business.</p>
                        <a href="simpliworks_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <!-- iOs -->
            <li class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd ios">
                <img src="portfolio_images/offsight.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">iOS</span>
                        <h3 class="category">Offsight</h3>
                        <p class="category">Offsight solves the delivery, quality, traceability and communication challenges of modular/offsite construction and project-based manufacturing with our easy to use mobile software.</p>
                        <a href="offsite_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd ios">
                <img src="portfolio_images/Bidalift.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">iOS</span>
                        <h3 class="category">Bidalift user</h3>
                        <p class="category">Save money by being in control of what you pay! Enter a bid YOU feel is fair for your ride.</p>
                        <a href="bidalift_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <!-- Android -->
            <li class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd android">
                <img src="portfolio_images/nkenne.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Android</span>
                        <h3 class="category">Nkenne</h3>
                        <p class="category">NKENNE is the premier and only dedicated African Language learning app. Join our community of over 25,000 users in learning any of our 6 offered African languages on the app: Twi, Igbo, Yoruba, Swahili, Somali, and Hausa.</p>
                        <a href="nkenne_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd android">
                <img src="portfolio_images/sidestream.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Android</span>
                        <h3 class="category">SideStream</h3>
                        <p class="category">Reshyne helps companies make the most of their repairs business.</p>
                        <a href="side_stream_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd android">
                <img src="portfolio_images/misal.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Android</span>
                        <h3 class="category">Misal</h3>
                        <p class="category">Reshyne helps companies make the most of their repairs business.</p>
                        <a href="misal_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd android">
                <img src="portfolio_images/easyreferencing.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Android</span>
                        <h3 class="category">Easyreferencing</h3>
                        <p class="category">Reshyne helps companies make the most of their repairs business.</p>
                        <a href="easyref_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
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