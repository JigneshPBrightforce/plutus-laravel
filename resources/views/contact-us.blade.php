@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange contact-us-page-main top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Contact Us</h3>
                    <p class="sub-dec ms-4 mt-4">Feel free to reach us</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">

            </div>
        </div>
    </div>
</div>
<div class="careers-details-bottom-form contact-us-page-form">
    <div class="container aos-init" data-aos="fade-up">
        <div class="message-us">
            <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"><span></span>Message Us</h3>
            <form class="form p-4" id="contactForm" novalidate="novalidate">
                <div class="row">
                    @csrf
                    <input type="hidden" id="page" name="page" value="contactForm">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-style subtext f-text mb-2" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-style subtext f-text mb-2" for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-style subtext f-text mb-2" for="Phone">Phone</label>
                            <input type="text" maxlength="13" class="form-control" id="phone" name="phone"
                                placeholder="Enter Phone Number" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-style subtext f-text mb-2" for="Ysub">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter Subject" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-style subtext f-text mb-2" for="Ymsg">Message</label>
                            <textarea class="form-control message-box lable-style subtext f-text" id="msg" name="msg"
                                rows="3" placeholder="Enter Message" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Lc7bHcmAAAAAKJMOt6Gz7gv2X80LqFFjJTicu3s"
                                    data-callback="recaptchaActions"></div>
                                <div id="contact_captchError" class="error" style="display: none;">This field is
                                    required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="d-flex align-items-center">
                        <button type="submit" class="cursor-hover btn btn-primary btn-orange"
                            id="submitButton">Send</button>
                        <!-- <img src="{{ asset('images/loading.gif')}} " alt="loader" id="loaderImg" style="display: none;"> -->
                        <div class="loader mx-3" id="loaderImg" style="display: none;"></div>
                    </div>
                    <div id="successMsg" class="text-primary mt-3" style="display: none">Email sent successfully.
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4 white-boxs">
                <div class="contact-us-details-box">
                    <img src="{{ asset('image/Map-pin.svg')}} " alt="map-pin">
                    <h3>Plutus Technologies</h3>
                    <p>1222-23, Zion Z1,
                        Off Sindhu Bhavan Marg,
                        Bodakdev, Ahmedabad,
                        Gujarat 380054</p>
                </div>
            </div>
            <div class="col-lg-4 white-boxs">
                <div class="contact-us-details-box">
                    <img src="{{ asset('image/Map-pin.svg')}}" alt="map-pin">
                    <h3>Plutus Technologies</h3>
                    <p>2501, Fortune Tower,
                        Cluster C JLT, Dubai, UAE,
                        P.O.Box 454597</p>
                </div>
            </div>
            <div class="col-lg-4 white-boxs last-box">
                <div class="contact-us-details-box">
                    <h3>General Contact</h3>
                    <div class="contact-number">
                        <img src="{{ asset('image/Gray-phone-icon.svg') }}" alt="phone">
                        <div class="">
                            <a class="cursor-hover" href="tel:+91 760-078-2354">
                                <p>+91 760-078-2354</p>
                            </a>
                            <a class="cursor-hover" href="tel:+91 794-800-0107">
                                <p>+91 794-800-0107</p>
                            </a>
                        </div>
                    </div>
                    <div class="contact-number">
                        <img src="{{ asset('image/Gray-email-icon.svg')}} " alt="email">
                        <div class="">
                            <a class="cursor-hover" href="mailto:sales@plutustec.com">
                                <p>sales@plutustec.com</p>
                            </a>
                        </div>
                    </div>
                    <div class="contact-number">
                        <img src="{{ asset('image/Gray-skype-icon.svg')}} " alt="skype">
                        <div class="">
                            <a class="cursor-hover" href="skype:live:kalpit.belani?chat">
                                <p>sales.plutustec
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="social-icons">
                        <a class="cursor-hover" href="https://www.facebook.com/PlutusTechnologies" target="_blank">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.0551 11.5485C22.0551 5.3779 17.1148 0.369873 11.0276 0.369873C4.94035 0.369873 0 5.3779 0 11.5485C0 16.959 3.79348 21.464 8.82206 22.5036V14.9021H6.61654V11.5485H8.82206V8.75385C8.82206 6.59637 10.5534 4.84133 12.6817 4.84133H15.4386V8.19492H13.2331C12.6266 8.19492 12.1303 8.69795 12.1303 9.31278V11.5485H15.4386V14.9021H12.1303V22.6712C17.6992 22.1123 22.0551 17.3502 22.0551 11.5485Z"
                                    fill="#929292" />
                            </svg>
                        </a>
                        <a class="cursor-hover" href="https://twitter.com/PlutusTech" target="_blank">
                            <svg width="28" height="23" viewBox="0 0 28 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M27.0729 2.99356C26.0765 3.45271 25.0024 3.75443 23.8894 3.89874C25.0282 3.20346 25.9082 2.10151 26.3224 0.776545C25.2482 1.43247 24.0576 1.89161 22.8024 2.15398C21.78 1.0258 20.3435 0.369873 18.7129 0.369873C15.6718 0.369873 13.1871 2.88862 13.1871 5.99769C13.1871 6.44372 13.2388 6.87663 13.3294 7.2833C8.72235 7.04717 4.62 4.80391 1.88941 1.40623C1.41059 2.23269 1.13882 3.20346 1.13882 4.2267C1.13882 6.18135 2.10941 7.91298 3.61059 8.89687C2.69176 8.89687 1.83765 8.6345 1.08706 8.24094V8.2803C1.08706 11.0089 3.00235 13.2915 5.53882 13.8032C4.72447 14.0291 3.86954 14.0605 3.04118 13.895C3.39267 15.0133 4.08105 15.9919 5.00955 16.6931C5.93805 17.3943 7.05999 17.7829 8.21765 17.8043C6.25529 19.3791 3.82282 20.2303 1.32 20.2181C0.88 20.2181 0.44 20.1919 0 20.1394C2.45882 21.7398 5.38353 22.6712 8.51529 22.6712C18.7129 22.6712 24.3165 14.0918 24.3165 6.65361C24.3165 6.40436 24.3165 6.16823 24.3035 5.91898C25.3906 5.13187 26.3224 4.13487 27.0729 2.99356Z"
                                    fill="#929292" />
                            </svg>
                        </a>
                        <a class="cursor-hover"
                            href="https://www.linkedin.com/company/plutus-technologies-pvt-ltd/mycompany/"
                            target="_blank">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.8212 0.369873C20.4695 0.369873 21.0912 0.63094 21.5497 1.09564C22.0081 1.56034 22.2656 2.19062 22.2656 2.8478V20.1933C22.2656 20.8505 22.0081 21.4808 21.5497 21.9455C21.0912 22.4102 20.4695 22.6712 19.8212 22.6712H2.71007C2.06176 22.6712 1.44001 22.4102 0.981586 21.9455C0.523164 21.4808 0.265625 20.8505 0.265625 20.1933V2.8478C0.265625 2.19062 0.523164 1.56034 0.981586 1.09564C1.44001 0.63094 2.06176 0.369873 2.71007 0.369873H19.8212ZM19.2101 19.5738V13.0073C19.2101 11.9361 18.7903 10.9088 18.0431 10.1513C17.2958 9.39383 16.2824 8.96829 15.2256 8.96829C14.1867 8.96829 12.9767 9.61255 12.3901 10.5789V9.20369H8.98007V19.5738H12.3901V13.4657C12.3901 12.5117 13.1478 11.7312 14.089 11.7312C14.5428 11.7312 14.978 11.9139 15.2989 12.2392C15.6198 12.5645 15.8001 13.0057 15.8001 13.4657V19.5738H19.2101ZM5.00785 7.25852C5.55243 7.25852 6.0747 7.03922 6.45977 6.64887C6.84485 6.25852 7.06118 5.7291 7.06118 5.17706C7.06118 4.02482 6.14451 3.08321 5.00785 3.08321C4.46003 3.08321 3.93465 3.30381 3.54728 3.69648C3.15991 4.08915 2.94229 4.62173 2.94229 5.17706C2.94229 6.3293 3.87118 7.25852 5.00785 7.25852ZM6.70674 19.5738V9.20369H3.32118V19.5738H6.70674Z"
                                    fill="#929292" />
                            </svg>
                        </a>
                        <a class="cursor-hover" href="https://www.instagram.com/plutustechnology/" target="_blank">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.64563 0.369873H15.8856C19.4056 0.369873 22.2656 3.26905 22.2656 6.83727V16.2038C22.2656 17.9191 21.5934 19.5641 20.397 20.777C19.2005 21.9899 17.5777 22.6712 15.8856 22.6712H6.64563C3.12563 22.6712 0.265625 19.7721 0.265625 16.2038V6.83727C0.265625 5.12201 0.937802 3.477 2.13428 2.26413C3.33077 1.05126 4.95354 0.369873 6.64563 0.369873ZM6.42562 2.60001C5.37537 2.60001 4.36813 3.02294 3.62548 3.77576C2.88284 4.52857 2.46563 5.54961 2.46563 6.61426V16.4269C2.46563 18.6458 4.23662 20.4411 6.42562 20.4411H16.1056C17.1559 20.4411 18.1631 20.0182 18.9058 19.2654C19.6484 18.5125 20.0656 17.4915 20.0656 16.4269V6.61426C20.0656 4.39527 18.2946 2.60001 16.1056 2.60001H6.42562ZM17.0406 4.27261C17.4053 4.27261 17.755 4.41946 18.0129 4.68086C18.2708 4.94225 18.4156 5.29678 18.4156 5.66645C18.4156 6.03612 18.2708 6.39064 18.0129 6.65204C17.755 6.91343 17.4053 7.06028 17.0406 7.06028C16.676 7.06028 16.3262 6.91343 16.0684 6.65204C15.8105 6.39064 15.6656 6.03612 15.6656 5.66645C15.6656 5.29678 15.8105 4.94225 16.0684 4.68086C16.3262 4.41946 16.676 4.27261 17.0406 4.27261ZM11.2656 5.94522C12.7243 5.94522 14.1233 6.53262 15.1547 7.5782C16.1862 8.62378 16.7656 10.0419 16.7656 11.5206C16.7656 12.9992 16.1862 14.4173 15.1547 15.4629C14.1233 16.5085 12.7243 17.0959 11.2656 17.0959C9.80693 17.0959 8.40799 16.5085 7.37654 15.4629C6.34509 14.4173 5.76562 12.9992 5.76562 11.5206C5.76562 10.0419 6.34509 8.62378 7.37654 7.5782C8.40799 6.53262 9.80693 5.94522 11.2656 5.94522ZM11.2656 8.17535C10.3904 8.17535 9.55104 8.52779 8.93217 9.15514C8.3133 9.78249 7.96562 10.6334 7.96562 11.5206C7.96562 12.4078 8.3133 13.2586 8.93217 13.886C9.55104 14.5133 10.3904 14.8658 11.2656 14.8658C12.1408 14.8658 12.9802 14.5133 13.5991 13.886C14.2179 13.2586 14.5656 12.4078 14.5656 11.5206C14.5656 10.6334 14.2179 9.78249 13.5991 9.15514C12.9802 8.52779 12.1408 8.17535 11.2656 8.17535Z"
                                    fill="#929292" />
                            </svg>
                        </a>
                        <a class="cursor-hover" href="https://in.pinterest.com/plutustechnologies/" target="_blank"
                            class="me-3">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.632 15.632C6.4 15.864 7.176 16 8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 6.94943 15.7931 5.90914 15.391 4.93853C14.989 3.96793 14.3997 3.08601 13.6569 2.34315C12.914 1.60028 12.0321 1.011 11.0615 0.608964C10.0909 0.206926 9.05058 0 8 0C6.94943 0 5.90914 0.206926 4.93853 0.608964C3.96793 1.011 3.08601 1.60028 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 11.4 2.136 14.32 5.152 15.472C5.08 14.848 5.008 13.816 5.152 13.104L6.072 9.152C6.072 9.152 5.84 8.688 5.84 7.952C5.84 6.848 6.528 6.024 7.312 6.024C8 6.024 8.32 6.528 8.32 7.176C8.32 7.864 7.864 8.848 7.632 9.792C7.496 10.576 8.048 11.264 8.848 11.264C10.272 11.264 11.376 9.744 11.376 7.6C11.376 5.68 10 4.368 8.024 4.368C5.768 4.368 4.44 6.048 4.44 7.816C4.44 8.504 4.664 9.2 5.032 9.656C5.104 9.704 5.104 9.768 5.08 9.888L4.848 10.76C4.848 10.896 4.76 10.944 4.624 10.848C3.6 10.4 3.008 8.944 3.008 7.768C3.008 5.24 4.8 2.944 8.256 2.944C11.008 2.944 13.152 4.92 13.152 7.544C13.152 10.296 11.448 12.504 9.008 12.504C8.232 12.504 7.472 12.088 7.2 11.6L6.664 13.496C6.48 14.184 5.976 15.104 5.632 15.656V15.632Z"
                                    fill="#929292" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection