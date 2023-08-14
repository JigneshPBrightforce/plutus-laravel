<!-- Footer Section -->
<section class="footer-clock-section space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-3">

                <div id="clock_hou"></div>
                <div class="address-box">

                    <h6 class="my-2">India</h6>
                    <span class="map-url">
                        1222-1223 Zion Z1 ,
                        Off Sindhu Bhavan Road,
                        Nr. Avalon Hotel, Bodakdev ,
                        Ahmedabad 380054
                    </span>
                </div>

            </div>
            <div class="col-12 col-lg-3">

                <div id="clock_dub"></div>
                <div class="address-box">

                    <h6 class="my-2">Dubai</h6>
                    <span class="map-url">
                        2501, Fortune Tower, Cluster C JLT,
                        Dubai, UAE, P.O.Box 454597
                    </span>
                </div>

            </div>
        </div>

    </div>
</section>
<div class="footer">
    <div class=" container space">
        <div class="row">
            <div class="col-md-6 col-lg-3 f-abt footer-logo">
                <img class="" src="{{ asset('image/logo-white.png')}}" alt="logo">
                <p class="c-txt pt-4 pb-3">Plutus Technologies Pvt. Ltd is one of the most versatile
                    web & mobile application development company with
                    headquarter in India & clients across the globe.</p>
                <ul class="s-icon">
                    <li>
                        <a href="https://www.facebook.com/PlutusTechnologies" class="cursor-hover" target="_blank"><i
                                class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/PlutusTech" class="cursor-hover" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/plutus-technologies-pvt-ltd/mycompany/" class="cursor-hover"
                            target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/plutustechnology/" class="cursor-hover" target="_blank"><i
                                class="fa fa-instagram"></i></a>
                        <a href="https://in.pinterest.com/plutustechnologies/" class="cursor-hover" target="_blank"><i
                                class="fa fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mt-3 mt-md-0 footer-quick-link">
                <h2 class="f-h pb-4">Quick Links</h2>
                <ul>
                    <li>
                        <a href="aboutus" class="cursor-hover f-t">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="services" class="cursor-hover f-t">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="portfolio" class="cursor-hover f-t">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="career" class="cursor-hover f-t">
                            Careers
                        </a>
                    </li>
                    <li>
                        <a href="contact-us" class="cursor-hover f-t">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mt-3 mt-lg-0 footer-quick-link">
                <h2 class="f-h pb-4">Hire Resources</h2>
                <ul>
                    <li>
                        <a href="hire-php-developers" class="cursor-hover f-t">
                            Hire PHP Developer
                        </a>
                    </li>
                    <li>
                        <a href="hire-android-app-developer" class="cursor-hover f-t ">
                            Hire Android App Developer
                        </a>
                    </li>
                    <li>
                        <a href="hire-ios-app-developer" class="cursor-hover f-t">
                            Hire iOS App Developer
                        </a>
                    </li>
                    <li>
                        <a href="hire-wordpress-developer" class="cursor-hover f-t">
                            Hire Wordpress Developer
                        </a>
                    </li>
                    <li>
                        <a href="hire-magento-app-developer" class="cursor-hover f-t">
                            Hire Magento Developer
                        </a>
                    </li>
                    <li>
                        <a href="hire-uiux-designer" class="cursor-hover f-t">
                            Hire UI/UX Designer
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mt-3 mt-lg-0">
                <h2 class="f-h  pb-4">Contact</h2>
                <ul class="c-text">
                    <li class="pb-3"><a class="cursor-hover d-flex"><i class="fa fa-map-marker"></i><span>1222-23, Zion Z1,Off
                                Sindhu Bhavan
                                Marg,
                                Bodakdev, Ahmedabad-380054,
                                Gujarat, India.</span><i class="fa-solid fa-arrow-up-right-from-square"></i></a> </li>
                    <li class="cursor-hover d-flex pb-3">
                        <i class="fa fa-phone"></i>
                        <div>
                            <a class="d-block" href="tel:+917600-782-354">+91 760-078-2354 </a>
                            <a href="tel:+917948-000-107">+91 794-800-0107</a>
                        </div>
                    </li>
                    <li class="pb-3"><a class="cursor-hover" href="mailto:sales@plutustec.com"><i
                                class="fa fa-envelope"></i>sales@plutustec.com </a>
                    </li>
                    <li class="pb-3"><a class="cursor-hover" href="skype:live:kalpit.belani?chat"><i class="fa fa-skype"></i>sales.plutustec
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="policy">
        <hr>
        <p class="mb-0 text-center pb-2">© <span id="currentYear"></span> Plutus Technologies Pvt. Ltd.</p>
    </div>
</div>
<script>
document.getElementById('currentYear').innerHTML = new Date().getFullYear();
</script>
<a class="cursor-hover w-app-call" target="_blank" href="https://wa.me/+917948000107?text=Hi">
    <img src="{{ asset('image/whatsapp.png')}}" alt="whatsapp call">
</a>