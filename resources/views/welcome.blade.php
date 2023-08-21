@extends('layouts.app')

@section('content') 
<section class="hm-banner-sec">
    <div class="hero-wrapper">
        <div class="main-hero-title">
            <span class="top-title aos-init" data-aos="fade-up" data-aos-delay="100">Top Web and Mobile Apps
                Development Company</span>
            <h1 class="aos-init" data-aos="fade-up" data-aos-delay="200">Building your vision, one pixel at a time
            </h1>
            <div class="main-hero-desc aos-init" data-aos="fade-up" data-aos-delay="400">
                <p>Plutus Technologies has steadfastly upheld its commitment to delivering exceptional services
                    since its establishment in 2014. We remain committed to being at the forefront as a custom
                    software development company. Innovative and technologically driven, we are constantly pushing
                    the boundaries of our industry and setting new standards of excellence.</p>
            </div>
            <div class="button-box justify-content-start aos-init" data-aos="fade-up" data-aos-delay="500">
                <a class="btn-orange cursor-hover" href="">What we do</a>
            </div>
        </div>
        <div class="main-hero-image">
            <div class="home-video-section aos-init" data-aos="zoom-out" data-aos-delay="200" style="margin-top:0px;">
                <span class="icon-locker-close-icon scroll-video-btn close-scroll-video-btn"></span>
                <div class="home-video-box">
                    <img width="1140" height="750" class="video-poster-bg lazyloaded" src="image/Banner-bg.jpg"
                        alt="banner" data-ll-status="loaded">
                    <noscript>
                        <img width="1140" height="750" class="video-poster-bg" src="image/Banner-bg.jpg" alt="banner">
                    </noscript>
                    <div class="video-btn-play">
                        <span class="icon-video-play tglclass cursor-hover">
                            <img src="image/Video-icon.svg" alt="vidoeicon">
                        </span>
                    </div>
                    <video preload="none" id="home_video_bx" class="testimonial-video homepage_video w-100" loop=""
                        onloadedmetadata="this.muted=true" playsinline="" poster="image/Banner-bg.jpg" controls
                        controlsList="nodownload" autoplay="false">
                        <source type="video/mp4" src="video/pexels-pixabay.mp4">
                    </video>
                    <div class="video-full-screen"><span class="icon-ic-white-full-screen"></span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="client-logo aos-init" data-aos="fade-up" data-aos-delay="200">
    <div class="client-logo-listing">
        <div class="brands-marquee">
            <div class="brands-marquee-inner ml-0 float-left">
                <ul class="m-0">
                    <li>
                        <a href="" aria-label="Oracle" class="cursor-hover logo-brand-black-oracle svg_sprite_bg svg-sprite"><img
                                src="image/eva-play-new-blue.png" alt="eva-play-new-blue"></a>
                    </li>
                    <li>
                        <a href="" aria-label="Cambridge" class="cursor-hover logo-cambridge-v3 svg_sprite_bg svg-sprite"><img
                                src="image/maingutschen.svg" alt="maingutschen"></a>
                    </li>
                    <li>
                        <a href="" aria-label="Mumayiz" class="cursor-hover abdul-latif-jameel-logo svg_sprite_bg svg-sprite"><img
                                src="image/mektronic-new.png" alt="mektronic-new"></a>
                    </li>
                    <li>
                        <a href="" aria-label="MTN Logo" class="cursor-hover logo-brand-black-mtn svg_sprite_bg svg-sprite"><img
                                src="image/Offsight_Logo.svg" alt="Offsight"></a>
                    </li>
                    <li>
                        <a href="" aria-label="MTU Logo" class="cursor-hover logo-brand-black-mtu svg_sprite_bg svg-sprite"><img
                                src="image/skylon-tower_logo.svg" alt="skylon-tower_logo"></a>
                    </li>
                    <li>
                            <a href="" aria-label="BCG Logo" class="cursor-hover logo-brand-black-bcg svg_sprite_bg svg-sprite"><img src="image/reshyne.svg" alt="Reshyne" /></a>
                         </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="about-company-section">
    <div class="container">
        <h2 class="mrg-b aos-init" data-aos="fade-up" data-aos-delay="200">Transform Your Digital Presence with Our
            Expert Development Team</h2>
        <div class="row aos-init" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12 col-md-12 about-content">
                <p>Built upon this tradition of excellence, utilizing our collective expertise with a formidable
                    team of over 70 skilled designers and developers who have accomplished over 150 websites and 100
                    mobile applications. Dedicated to driving businesses to thrive in today's dynamic marketplace
                    through our custom software development.
                </p>
                <!-- <p>Our Android app, iOS app and cross-platform mobile app developers are adroit in the latest mobile
                        technologies and tools like Android Studio,
                        Xcode, Kotlin, Xamarin, PhoneGap, React Native, etc. to build next-gen mobile applications.</p> -->
            </div>
            <!-- <div class="col-12 col-md-3">
                     <ul class="about-link">
                        <li><a href="">Our services</a></li>
                        <li><a href="">Read our story</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="">Contact us</a></li>
                     </ul>
                  </div> -->
        </div>
        <div class="growth-detail text-center sec-pad-100">
            <h2 class="aos-init" data-aos="fade-up" data-aos-delay="400">We've helped businesses increase their
                revenue on an average by 90% in their first year with us!</h2>
            <div class="counter-sec aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="counters">
                    <span class="counter">3000</span>
                    <span>+</span>
                    <p>Satisfied Clients Across the Globe</p>
                </div>
                <div class="counters">
                    <span class="counter">7000</span>
                    <span>+</span>
                    <p>Projects Delivered Successfully</p>
                </div>
                <div class="counters">
                    <span class="counter">600</span>
                    <span>+</span>
                    <p>Experts Under the Same Roof</p>
                </div>
                <div class="counters">
                    <span class="counter">100</span>
                    <span>+</span>
                    <p>Developers</p>
                </div>
                <div class="counters">
                    <span class="counter">3</span>
                    <span>+</span>
                    <p>Offices accross world</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="discovery-process-section">
    <div class="container">
        <h2 class="mrg-b aos-init" data-aos="fade-up" data-aos-delay="200">Our Streamlined Software Development
            Process
        </h2>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 process-block aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="process-box">
                    <div class="icon-box">
                        <img src="image/Discover.svg" alt="Discover">
                    </div>
                    <h3>Discover</h3>
                    <p>Going beyond the surface level to shape brands through thorough exploration and research,
                        challenging assumptions at every turn.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 process-block aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="process-box">
                    <div class="icon-box">
                        <img src="image/Design.svg" alt="design">
                    </div>
                    <h3>Design</h3>
                    <p>We prioritize simplicity and user experience in all our designs. Our approach focuses on
                        creating easy-to-use products with a touch of creativity.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 process-block aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="process-box">
                    <div class="icon-box">
                        <img src="image/Build.svg" alt="build">
                    </div>
                    <h3>Build</h3>
                    <p>Using modern technologies, we build with efficiency and skill, creating flexible and scalable
                        business-driven solutions.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 process-block aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="process-box">
                    <div class="icon-box">
                        <img src="image/Deliver.svg" alt="deliver">
                    </div>
                    <h3>Deliver</h3>
                    <p>We specialize in building efficient and scalable business solutions using modern
                        technologies. Our team of skilled professionals delivers flexible and innovative solutions
                        to meet your needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-main-slider bg-lightgray space ">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">Our Services</h3>
    </div>
    <div class="aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="our-services-slider-owl owl-carousel owl-theme grab">
            <div class="item">
                <div class="our-services-inner">
                    <div class="service-box hire-developers">
                        <div class="card">
                            <img src="image/webdevelopment.svg" class="card-img-top w-100" alt="webdevelopment">
                            <div class="card-body ">
                                <h2>Web Development</h2>
                                <p class="subtext">Plutus Technologies is a global provider of PHP web development
                                    services with extensive experience in delivering secure, scalable, and
                                    high-performing PHP web applications for businesses of all sizes. Our developers
                                    possess in-depth knowledge of the latest PHP frameworks such as Laravel, Yii,
                                    and CakePHP, enabling us to cater to various industry verticals worldwide.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="our-services-inner">
                    <div class="service-box bg-lightorange hire-developers">
                        <div class="card">
                            <img src="image/mobile-app.svg" alt="mobileapp">
                            <div class="card-body">
                                <h2>Mobile App Development</h2>
                                <p class="subtext">Plutustec specializes in mobile app development with a focus on
                                    delivering innovative solutions to enhance user experience and drive business
                                    growth. From concept to launch, our team of experts ensures high-quality
                                    development with advanced technology and agile methodologies.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="our-services-inner">
                    <div class="service-box hire-developers">
                        <div class="card">
                            <img src="image/ui-ux.svg" alt="uiux">
                            <div class="card-body">
                                <h2>UI/UX Designing</h2>
                                <p class="subtext">To ensure success in online business, it's important to stay
                                    up-to-date with the latest UI patterns. A well-designed UI not only attracts new
                                    customers but also retains existing ones by providing a seamless experience. Our
                                    designs are responsive and mobile-friendly, guaranteeing that your website can
                                    be accessed on any device or platform your clients use.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="our-services-inner">
                    <div class="service-box bg-lightorange hire-developers">
                        <div class="card">
                            <img src="image/cms.svg" alt="cms">
                            <div class="card-body ">
                                <h2>CMS & E-commerce</h2>
                                <p class="subtext">Plutustec offers comprehensive CMS and ecommerce development
                                    services. Our expertise in WordPress, Drupal, and Magento ensures that your
                                    website will be built to the highest standards of functionality and design. Our
                                    team of experienced developers will work closely with you to create a website
                                    that meets your unique business needs. Whether you are looking for a simple blog
                                    or a complex e-commerce platform, Plutustec has the skills and expertise to
                                    help you succeed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="our-services-inner">
                    <div class="service-box hire-developers">
                        <div class="card">
                            <img src="image/seo.svg" alt="seo">
                            <div class="card-body">
                                <h2>SEO & Digital Marketing</h2>
                                <p class="subtext">Plutus Technologies understands the importance of SEO and
                                    marketing
                                    in building your online presence. Our team of experts uses a data-driven
                                    approach to help you reach your target audience and boost your website's ranking
                                    on search engines. You can count on us to help you grow your business with
                                    services ranging from keyword research and optimization to content creation and
                                    link building. No matter what size organization you are or what your objectives
                                    are, we customize our strategies to meet your needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="technologies-section">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">Technologies We Work With</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="technologies-tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link cursor-hover" id="frontend-tab" data-bs-toggle="tab" data-bs-target="#frontend"
                        type="button" role="tab" aria-controls="frontend" aria-selected="false">Front End</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active cursor-hover" id="backend-tab" data-bs-toggle="tab" data-bs-target="#backend"
                        type="button" role="tab" aria-controls="backend" aria-selected="true">Back End</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link cursor-hover" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile" type="button"
                        role="tab" aria-controls="mobile" aria-selected="false">Mobile App</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link cursor-hover" id="cms-tab" data-bs-toggle="tab" data-bs-target="#cms" type="button"
                        role="tab" aria-controls="cms" aria-selected="false">CMS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link cursor-hover" id="databse-tab" data-bs-toggle="tab" data-bs-target="#databse"
                        type="button" role="tab" aria-controls="databse" aria-selected="false">Database</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link cursor-hover" id="uiux-tab" data-bs-toggle="tab" data-bs-target="#uiux" type="button"
                        role="tab" aria-controls="uiux" aria-selected="false">UI/UX</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="backend" role="tabpanel" aria-labelledby="backend-tab">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/nodejs.svg" alt="nodejs">
                                </div>
                                <h3>NodeJS</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/python.svg" alt="python">
                                </div>
                                <h3>Python</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/dotnet-logo.svg" alt="dotnet">
                                </div>
                                <h3>.NET</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/Laravel-logo.svg" alt="laravel">
                                </div>
                                <h3>Laravel</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/codeigniter-icon.svg" alt="codeigniter">
                                </div>
                                <h3>CodeIgniter</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/php-1.svg" alt="php">
                                </div>
                                <h3>PHP</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="frontend" role="tabpanel" aria-labelledby="frontend-tab">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/react-2.svg" alt="react">
                                </div>
                                <h3>ReactJS</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/vuejs-seeklogo.com.svg" alt="vuejs">
                                </div>
                                <h3>VueJS</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/angular-icon-1.svg" alt="angular">
                                </div>
                                <h3>AngularJS</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/bootstrap-5-1.svg" alt="bootstrap">
                                </div>
                                <h3>Bootstrap</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/html-1.svg" alt="html">
                                </div>
                                <h3>HTML5</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/css-3.svg" alt="css">
                                </div>
                                <h3>CSS3</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/Flutter-logo.svg" alt="flutter">
                                </div>
                                <h3>Flutter</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/apple-ios.svg" alt="ios">
                                </div>
                                <h3>iOS</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/react-2.svg" alt="react">
                                </div>
                                <h3>React Native</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/android.svg" alt="android">
                                </div>
                                <h3>Android</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/Ionic-logo.svg" alt="ionic">
                                </div>
                                <h3>Ionic</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/xamarin.svg" alt="xamarin">
                                </div>
                                <h3>Xamarin</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cms" role="tabpanel" aria-labelledby="cms-tab">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/drupal.svg" alt="drupal">
                                </div>
                                <h3>Drupal</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/WordPress-logo.svg" alt="Wordpress">
                                </div>
                                <h3>WordPress</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/prestashop.svg" alt="prestashop">
                                </div>
                                <h3>PrestaShop</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/wix-com-website-logo-1.svg" alt="wixcom">
                                </div>
                                <h3>Wix</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/shopify.svg" alt="shopify">
                                </div>
                                <h3>Shopify</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/magento-2.svg" alt="magento">
                                </div>
                                <h3>Magento</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/nopcommerce_logo.svg" alt="nopcommerce">
                                </div>
                                <h3>NopCommerce</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="databse" role="tabpanel" aria-labelledby="databse-tab">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/microsoft-sql-server-1.svg" alt="sqlserver">
                                </div>
                                <h3>SQL Server</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/mysql-3.svg" alt="mysql">
                                </div>
                                <h3>MySQL</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/postgresql.svg" alt="postgresql">
                                </div>
                                <h3>PostgreSQL</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/mongodb-icon.svg" alt="mongodb">
                                </div>
                                <h3>MongoDB</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="uiux" role="tabpanel" aria-labelledby="uiux-tab">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/adobe-photoshop-2.svg" alt="Photoshop">
                                </div>
                                <h3>Adobe Photoshop</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/adobe-illustrator-cc-icon.svg" alt="Illustrator">
                                </div>
                                <h3>Adobe Illustrator</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/adobe-xd-1.svg" alt="XD">
                                </div>
                                <h3>Adobe XD</h3>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <a class="icon-block" aria-label="" href="">
                                <div class="icon-box">
                                    <img src="image/figma-1.svg" alt="figma">
                                </div>
                                <h3>Figma</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="case-study-section">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">Our Work</h3>
    </div>
    <div class="container">
        <div class="our-work-block-slider">
            <div class="case-study-box aos-init" data-aos="fade-up" data-aos-delay="400">
                <a class="cursor-hover cs-main" href="rsd_portfolio" tabindex="0">
                    <div class="cs-info"
                    style="background: linear-gradient(80.12deg, #834397 -0.35%, #D296E6 99.53%);border-radius: 8px;" >
                        <div class="case-study-block even">
                            <div class="cs-detail">
                                <p class="cs-title">Ready set dance</p>
                                <h2 class="cs-description">READY SET DANCE is the award winning dance curriculum taking the world by storm!</h2>
                                <div class="client-says">
                                    <h4>“I With READY SET DANCE, you no longer need to plan, search for, or create new content.”</h4>
                                    <!-- <div class="d-inline-flex client-box">
                                       <div class="client-thumb">                                            
                                          <img src="image/Incometax_ 1.svg" alt="ncometax" width="48" height="48">
                                       </div>
                                       <div class="client-des">
                                          <p>John Doe</p>
                                          <span>Founder</span>
                                       </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="cs-thumb-img">
                                <div class="case-study-slider">
                                    <div>
                                        <div class="card">
                                            <img src="image/reshyne.jpg" alt="reshyne">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card">
                                            <img src="image/RSD.jpg" alt="rsd">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card">
                                            <img src="image/rp.jfif" alt="rapidparty">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="case-study-box aos-init" data-aos="fade-up" data-aos-delay="600">
                <a class="cursor-hover cs-main" href="reshyne_portfolio" tabindex="0">
                    <div class="cs-info"
                    style="background: linear-gradient(80.12deg, #424BA1 -0.35%, #838EF8 99.53%);border-radius: 8px;" >
                        <div class="case-study-block odd">
                            <div class="cs-thumb-img">
                                <div class="case-study-slider">
                                    <div>
                                        <div class="card">
                                            <img src="image/reshyne.jpg" alt="reshyne">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card">
                                            <img src="image/RSD.jpg" alt="rsd">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card">
                                            <img src="image/rp.jfif" alt="rapidparty">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cs-detail">
                                <p class="cs-title">Reshyne</p>
                                <h2 class="cs-description">Reshyne helps companies make the most of their repairs business
                                </h2>
                                <div class="client-says">
                                    <h4>"From a customer-facing service-based storefront to dynamic operations and management tools that lead to revenue growth and business success."</h4>
                                    <!-- <div class="d-inline-flex client-box">
                                       <div class="client-thumb">                                            
                                          <img src="image/RSD.svg" alt="Rsd" width="48" height="48">
                                       </div>
                                       <div class="client-des">
                                          <p>Bittu Dey</p>
                                          <span>Product Delivery Manager</span>
                                       </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="case-study-box aos-init" data-aos="fade-up" data-aos-delay="800">
                <a class="cursor-hover cs-main" href="recovr_portfolio" tabindex="0">
                    <div class="cs-info"
                        style="background: linear-gradient(80.12deg, #596D3A -0.35%, #B7D18E 99.53%);border-radius: 8px;">
                        <div class="case-study-block even">
                            <div class="cs-detail">
                                <p class="cs-title">Recovr</p>
                                <h2 class="cs-description">A digital marketplace that provides affordable and accessible rehab and recovery content</h2>
                                <div class="client-says">
                                    <h4>"All content is created by trusted rehab professionals that have gone through a rigorous quality content process."</h4>
                                    <!-- <div class="d-inline-flex client-box">
                                       <div class="client-thumb">                                            
                                          <img src="image/Recover.svg" alt="Recover" width="48" height="48">
                                       </div>
                                       <div class="client-des">
                                          <p>Blessing Mdunge</p>
                                          <span>CEO</span>
                                       </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="cs-thumb-img">
                                <div class="case-study-slider">
                                    <div>
                                        <div class="card">
                                            <img src="image/reshyne.jpg" alt="reshyne">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card">
                                            <img src="image/RSD.jpg" alt="rsd">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card">
                                            <img src="image/rp.jfif" alt="rapidparty">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="button-box aos-init" data-aos="fade-up" data-aos-delay="900">
            <a class="cursor-hover btn-orange" aria-label="View All" href="portfolio">View All</a>
        </div>
    </div>
</section>
<section class="jugaad-section bg-lightgray space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">Innovation, Bottoms Up.</h3>
    </div>
    <div class="container">
        <p class="text-center aos-init" data-aos="fade-up" data-aos-delay="200">We understand innovation often occurs as a result of improvements to products & services, technologies, processes, and artworks. It's not always upper management who comes up with the most innovative ideas, sometimes it's the bottom-up team members who do. We use our extensive experience, knowledge, and expertise combined with innovative ideas to deliver value-added software solutions that support the growth of your business. We, at Plutus Technologies, focus on both top-down R&D and bottom-up ideas to build the most innovative technology solution based on your custom business needs. Our team of highly skilled and experienced software developers, creative designers, and marketing experts not only helps you with innovations but also creates next-gen solutions that make your business thrive in the competitive marketplace. </p>
        <!-- Jugaad Video Modal Popup -->
        <div class="jugaad-video aos-init" data-aos="fade-up" data-aos-delay="300">
            <div class="jugaad-video-img-play">
                <img src="image/Video-bg.jfif" alt="video" width="1000" height="562">
            </div>
            <div class="jugaad-video-btn">
                <button class="icon-video-play cursor-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="image/Video-icon.svg" alt="vidoeicon">
                </button>
            </div>
        </div>
        <!-- Jugaad Video Modal Popup -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            
                        </div> -->
                    <div class="modal-body">
                        <div id="iframe_div">
                            <button type="button cursor-hover" class="btn-close float-end" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <iframe id="ytplayer" class="w-100" sandbox
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                src="video/Anniversary_Video.m4v" height="540" controls controlsList="nodownload"
                                autoplay="false">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jugaad Video Modal Popup -->
        <div class="button-box text-center">
            <a class="cursor-hover btn-orange" aria-label="Let's Work Together" href="contact-us">Let's Work Together</a>
        </div>
    </div>
</section>
<section class="client-testimonial-section">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">Words From Clients</h3>
    </div>

    <div id="clients-vedio-slider" class="clients-vedio-slider owl-carousel owl-theme">
        <div class="item">
            <div class="testimonial-box">
                <div class="client-img">
                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2022/02/carmelo-milian-video-thumb.webp"
                        alt="Carmelo Milian" width="740" height="410">
                </div>
                <div class="client-video">
                    <button class="icon-video-play cursor-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="image/Video-icon.svg" alt="vidoeicon">
                    </button>
                    <div class="client-name">
                        <h3>Carmelo Milian</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-box">
                <div class="client-img">
                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2022/02/carmelo-milian-video-thumb.webp"
                        alt="Carmelo Milian" width="740" height="410">
                </div>
                <div class="client-video">
                    <button class="icon-video-play cursor-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="image/Video-icon.svg" alt="vidoeicon">
                    </button>
                    <div class="client-name">
                        <h3>Carmelo Milian</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-box">
                <div class="client-img">
                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2022/02/carmelo-milian-video-thumb.webp"
                        alt="Carmelo Milian" width="740" height="410">
                </div>
                <div class="client-video">
                    <button class="icon-video-play cursor-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="image/Video-icon.svg" alt="vidoeicon">
                    </button>
                    <div class="client-name">
                        <h3>Carmelo Milian</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-box">
                <div class="client-img">
                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2022/02/carmelo-milian-video-thumb.webp"
                        alt="Carmelo Milian" width="740" height="410">
                </div>
                <div class="client-video">
                    <button class="icon-video-play cursor-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="image/Video-icon.svg" alt="vidoeicon">
                    </button>
                    <div class="client-name">
                        <h3>Carmelo Milian</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-box">
                <div class="client-img">
                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2022/02/carmelo-milian-video-thumb.webp"
                        alt="Carmelo Milian" width="740" height="410">
                </div>
                <div class="client-video">
                    <button class="icon-video-play cursor-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="image/Video-icon.svg" alt="vidoeicon">
                    </button>
                    <div class="client-name">
                        <h3>Carmelo Milian</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-box">
                <div class="client-img">
                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2022/02/carmelo-milian-video-thumb.webp"
                        alt="Carmelo Milian" width="740" height="410">
                </div>
                <div class="client-video">
                    <button class="icon-video-play cursor-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="image/Video-icon.svg" alt="vidoeicon">
                    </button>
                    <div class="client-name">
                        <h3>Carmelo Milian</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="testimonial-box">
                <div class="client-img">
                    <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2022/02/carmelo-milian-video-thumb.webp"
                        alt="Carmelo Milian" width="740" height="410">
                </div>
                <div class="client-video">
                    <button class="icon-video-play cursor-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="image/Video-icon.svg" alt="vidoeicon">
                    </button>
                    <div class="client-name">
                        <h3>Carmelo Milian</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-wrap">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">Blog</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="300">
        <div class="listing-view text-center">
            <!-- <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                    <div class="blog-listing-box">
                        <div class="listing-sm-img">
                            <a href="blog-details"
                                class="cursor-hover"
                                aria-label="How AI is transforming the way businesses operate and compete?">
                                <img src="{{ asset('image/hm-ai-in-business-transforming-banner.webp') }}"
                                    alt="AI is transforming the way businesses operate and compete" width="350"
                                    height="210">
                            </a>
                        </div>
                        <div class="blog-listing-detail">
                            <span class="category">Web Development</span>
                            <a href="blog-details" aria-label="More from our Blog"
                                class="cursor-hover">How AI is transforming the
                                way businesses operate
                                and compete?</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                    <div class="blog-listing-box">
                        <div class="listing-sm-img">
                            <a href="blog-details" 
                                class="cursor-hover" aria-label="Google BARD Vs Chat GPT: the ultimate battle">
                                <img src="{{ asset('image/hm-the-impact-of-ai-on-customer-banner1.webp') }}"
                                    alt="The impact of AI on customer service and experience" width="350" height="210">
                            </a>
                        </div>
                        <div class="blog-listing-detail">
                            <span class="category">Web Development</span>
                            <a href="blog-details"
                                class="cursor-hover" aria-label="More from our Blog">Google BARD Vs Chat GPT: the
                                ultimate battle</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                    <div class="blog-listing-box">
                        <div class="listing-sm-img">
                            <a href="blog-details" 
                                class="cursor-hover" aria-label="Artificial Intelligence Myths VS Reality">
                                <img src="{{ asset('image/hm-ai-myths-vs-reality-banner.webp') }}" alt="ai" width="350"
                                    height="210">
                            </a>
                        </div>
                        <div class="blog-listing-detail">
                            <span class="category">Web Development</span>
                            <a href="blog-details"
                                class="cursor-hover" aria-label="More from our Blog">Artificial Intelligence
                                Myths VS Reality</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <img src="image/coming-soon.png" class="coming-soon-img" alt="Coming soon" />
        </div>
        <!-- <div class="button-box text-center">
            <a class="cursor-hover btn-orange" aria-label="More from our Blog" href="blog">More From
                our Blog</a>
        </div> -->
    </div>
</section>
@include('inquiryform')
@endsection