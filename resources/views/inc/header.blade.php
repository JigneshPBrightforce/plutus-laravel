<?php $filename =  request()->route()->uri; ?>
<header class="fixed-top">
    <div class="top-header">
        <div class="d-flex justify-content-between justify-content-center flex-wrap">
            <div class="top-left">
                <ul>
                    <li class="me-4">
                        <a href="mailto:sales@plutustec.com"> <i class="fa fa-envelope"></i>sales@plutustec.com</a>
                    </li>
                    <li class="me-4">
                        <a href="tel:+91-794-800-0107"><i class="fa fa-phone"></i>+91-794-800-0107</a>
                    </li>
                    <li>
                        <a href="skype:live:kalpit.belani?chat"> <i class="fa fa-skype"></i>sales.plutustec</a>
                    </li>
                </ul>
            </div>
            <div class="top-right">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/PlutusTechnologies" target="_blank" class="me-3">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0401 8.02005C16.0401 3.59298 12.4471 0 8.02005 0C3.59298 0 0 3.59298 0 8.02005C0 11.9018 2.7589 15.1338 6.41604 15.8797V10.4261H4.81203V8.02005H6.41604V6.01504C6.41604 4.46717 7.67519 3.20802 9.22306 3.20802H11.2281V5.61404H9.62406C9.18296 5.61404 8.82205 5.97494 8.82205 6.41604V8.02005H11.2281V10.4261H8.82205V16C12.8722 15.599 16.0401 12.1825 16.0401 8.02005Z"
                                    fill="#FF6C37" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/PlutusTech" target="_blank" class="me-3">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.1934 15.9998C7.70518 16.0093 9.20381 15.7185 10.6024 15.1444C12.0009 14.5702 13.2715 13.7241 14.3405 12.6551C15.4095 11.5861 16.2557 10.3155 16.8298 8.91692C17.404 7.51837 17.6947 6.01975 17.6852 4.50797V3.97992C18.4689 3.40577 19.1472 2.70022 19.69 1.89457C18.9521 2.2173 18.1713 2.43134 17.372 2.53002C18.2194 2.02504 18.8553 1.23018 19.162 0.292516C18.3721 0.766366 17.506 1.09948 16.6023 1.27702C15.9936 0.628469 15.1882 0.198591 14.3106 0.0538963C13.433 -0.0907982 12.5322 0.057757 11.7475 0.476576C10.9629 0.895396 10.3381 1.56113 9.96995 2.37078C9.60177 3.18042 9.51067 4.08884 9.71076 4.95547C8.10515 4.87666 6.53414 4.46055 5.10003 3.73425C3.66592 3.00794 2.40087 1.98772 1.38725 0.740016C0.876136 1.62712 0.721215 2.6753 0.953855 3.67233C1.1865 4.66936 1.78931 5.54073 2.64025 6.11002C2.01251 6.08581 1.39929 5.91411 0.85025 5.60882V5.65357C0.844672 6.58064 1.15699 7.48162 1.73514 8.20635C2.31329 8.93108 3.12236 9.43577 4.0275 9.63632C3.44364 9.79336 2.83204 9.81782 2.2375 9.70792C2.49954 10.4986 2.99976 11.1888 3.66954 11.6839C4.33933 12.179 5.14589 12.4548 5.9786 12.4735C4.55485 13.6195 2.78532 14.2504 0.957651 14.2635C0.637199 14.2542 0.317499 14.2273 0 14.1829C1.84993 15.3615 3.99994 15.9829 6.1934 15.9729"
                                    fill="#FF6C37" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/plutus-technologies-pvt-ltd/mycompany/"
                            target="_blank" class="me-3">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.2222 0C14.6937 0 15.1459 0.187301 15.4793 0.520699C15.8127 0.854097 16 1.30628 16 1.77778V14.2222C16 14.6937 15.8127 15.1459 15.4793 15.4793C15.1459 15.8127 14.6937 16 14.2222 16H1.77778C1.30628 16 0.854097 15.8127 0.520699 15.4793C0.187301 15.1459 0 14.6937 0 14.2222V1.77778C0 1.30628 0.187301 0.854097 0.520699 0.520699C0.854097 0.187301 1.30628 0 1.77778 0H14.2222ZM13.7778 13.7778V9.06667C13.7778 8.29813 13.4725 7.56107 12.929 7.01763C12.3856 6.47419 11.6485 6.16889 10.88 6.16889C10.1244 6.16889 9.24444 6.63111 8.81778 7.32444V6.33778H6.33778V13.7778H8.81778V9.39556C8.81778 8.71111 9.36889 8.15111 10.0533 8.15111C10.3834 8.15111 10.6999 8.28222 10.9333 8.5156C11.1667 8.74898 11.2978 9.06551 11.2978 9.39556V13.7778H13.7778ZM3.44889 4.94222C3.84495 4.94222 4.22478 4.78489 4.50484 4.50484C4.78489 4.22478 4.94222 3.84495 4.94222 3.44889C4.94222 2.62222 4.27556 1.94667 3.44889 1.94667C3.05047 1.94667 2.66838 2.10494 2.38666 2.38666C2.10494 2.66838 1.94667 3.05047 1.94667 3.44889C1.94667 4.27556 2.62222 4.94222 3.44889 4.94222ZM4.68444 13.7778V6.33778H2.22222V13.7778H4.68444Z"
                                    fill="#FF6C37" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/plutustechnology/" target="_blank" class="me-3">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 6.016C7.6076 6.016 7.22402 6.13236 6.89775 6.35036C6.57148 6.56837 6.31719 6.87823 6.16702 7.24076C6.01686 7.60328 5.97757 8.0022 6.05412 8.38706C6.13068 8.77192 6.31963 9.12543 6.5971 9.4029C6.87457 9.68037 7.22808 9.86932 7.61294 9.94588C7.9978 10.0224 8.39671 9.98314 8.75924 9.83298C9.12177 9.68281 9.43163 9.42852 9.64964 9.10225C9.86764 8.77598 9.984 8.3924 9.984 8C9.984 7.73946 9.93268 7.48147 9.83298 7.24076C9.73327 7.00005 9.58713 6.78133 9.4029 6.5971C9.21867 6.41287 8.99995 6.26673 8.75924 6.16702C8.51853 6.06732 8.26054 6.016 8 6.016ZM15.944 4.056C15.9398 3.43821 15.826 2.82606 15.608 2.248C15.4474 1.82501 15.199 1.44087 14.8791 1.12095C14.5591 0.801021 14.175 0.552574 13.752 0.392C13.1739 0.173971 12.5618 0.0602087 11.944 0.0559999C10.912 -5.36442e-08 10.608 0 8 0C5.392 0 5.088 -5.36442e-08 4.056 0.0559999C3.43821 0.0602087 2.82606 0.173971 2.248 0.392C1.82501 0.552574 1.44087 0.801021 1.12095 1.12095C0.801021 1.44087 0.552574 1.82501 0.392 2.248C0.173971 2.82606 0.0602087 3.43821 0.0559999 4.056C-5.36442e-08 5.088 0 5.392 0 8C0 10.608 -5.36442e-08 10.912 0.0559999 11.944C0.0646111 12.564 0.178219 13.178 0.392 13.76C0.551862 14.1811 0.800103 14.563 1.12 14.88C1.43855 15.2018 1.82351 15.4503 2.248 15.608C2.82606 15.826 3.43821 15.9398 4.056 15.944C5.088 16 5.392 16 8 16C10.608 16 10.912 16 11.944 15.944C12.5618 15.9398 13.1739 15.826 13.752 15.608C14.1765 15.4503 14.5614 15.2018 14.88 14.88C15.1999 14.563 15.4481 14.1811 15.608 13.76C15.8258 13.1791 15.9396 12.5644 15.944 11.944C16 10.912 16 10.608 16 8C16 5.392 16 5.088 15.944 4.056ZM13.912 10.456C13.8863 10.9497 13.781 11.436 13.6 11.896C13.4447 12.2797 13.2138 12.6284 12.9211 12.9211C12.6284 13.2138 12.2797 13.4447 11.896 13.6C11.4316 13.7709 10.9426 13.8654 10.448 13.88H5.552C5.05738 13.8654 4.56839 13.7709 4.104 13.6C3.70728 13.4526 3.34902 13.2174 3.056 12.912C2.76613 12.625 2.54228 12.2783 2.4 11.896C2.22845 11.4321 2.13649 10.9425 2.128 10.448V5.552C2.13649 5.05746 2.22845 4.56791 2.4 4.104C2.54743 3.70728 2.78262 3.34902 3.088 3.056C3.37627 2.7677 3.72261 2.54407 4.104 2.4C4.56839 2.22912 5.05738 2.13457 5.552 2.12H10.448C10.9426 2.13457 11.4316 2.22912 11.896 2.4C12.2927 2.54743 12.651 2.78262 12.944 3.088C13.2339 3.375 13.4577 3.72171 13.6 4.104C13.7709 4.56839 13.8654 5.05738 13.88 5.552V8C13.88 9.648 13.936 9.816 13.912 10.448V10.456ZM12.632 4.504C12.5367 4.24559 12.3866 4.01091 12.1918 3.81617C11.9971 3.62143 11.7624 3.47125 11.504 3.376C11.1492 3.25301 10.7755 3.19343 10.4 3.2H5.6C5.22261 3.20369 4.84886 3.27411 4.496 3.408C4.24154 3.49892 4.00935 3.64297 3.81487 3.83056C3.62038 4.01815 3.46805 4.24499 3.368 4.496C3.25182 4.85229 3.19506 5.22528 3.2 5.6V10.4C3.20793 10.777 3.27821 11.15 3.408 11.504C3.50325 11.7624 3.65343 11.9971 3.84817 12.1918C4.04291 12.3866 4.27759 12.5367 4.536 12.632C4.87733 12.7575 5.23652 12.8277 5.6 12.84H10.4C10.7774 12.8363 11.1511 12.7659 11.504 12.632C11.7624 12.5367 11.9971 12.3866 12.1918 12.1918C12.3866 11.9971 12.5367 11.7624 12.632 11.504C12.7659 11.1511 12.8363 10.7774 12.84 10.4V5.6C12.8402 5.22224 12.7697 4.84778 12.632 4.496V4.504ZM8 11.056C7.59906 11.056 7.20205 10.9769 6.83173 10.8232C6.46141 10.6695 6.12504 10.4443 5.84191 10.1604C5.55877 9.87655 5.33442 9.5396 5.18172 9.16888C5.02901 8.79815 4.95095 8.40094 4.952 8C4.952 7.39524 5.13144 6.80408 5.46759 6.30135C5.80374 5.79862 6.2815 5.40693 6.84037 5.17587C7.39925 4.9448 8.01412 4.88475 8.60714 5.00332C9.20017 5.12189 9.74468 5.41374 10.1717 5.84193C10.5988 6.27012 10.8892 6.81539 11.0063 7.40872C11.1233 8.00205 11.0616 8.61676 10.8291 9.17503C10.5965 9.7333 10.2036 10.21 9.7 10.5449C9.19639 10.8797 8.60476 11.0576 8 11.056ZM11.2 5.544C11.0232 5.52528 10.8595 5.44178 10.7405 5.30958C10.6216 5.17738 10.5558 5.00583 10.5558 4.828C10.5558 4.65017 10.6216 4.47862 10.7405 4.34642C10.8595 4.21422 11.0232 4.13072 11.2 4.112C11.3768 4.13072 11.5405 4.21422 11.6595 4.34642C11.7784 4.47862 11.8442 4.65017 11.8442 4.828C11.8442 5.00583 11.7784 5.17738 11.6595 5.30958C11.5405 5.44178 11.3768 5.52528 11.2 5.544Z"
                                    fill="#FF6C37" />
                            </svg>
                        </a>
                        <a href="https://in.pinterest.com/plutustechnologies/" target="_blank" class="me-3">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.632 15.632C6.4 15.864 7.176 16 8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 6.94943 15.7931 5.90914 15.391 4.93853C14.989 3.96793 14.3997 3.08601 13.6569 2.34315C12.914 1.60028 12.0321 1.011 11.0615 0.608964C10.0909 0.206926 9.05058 0 8 0C6.94943 0 5.90914 0.206926 4.93853 0.608964C3.96793 1.011 3.08601 1.60028 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 11.4 2.136 14.32 5.152 15.472C5.08 14.848 5.008 13.816 5.152 13.104L6.072 9.152C6.072 9.152 5.84 8.688 5.84 7.952C5.84 6.848 6.528 6.024 7.312 6.024C8 6.024 8.32 6.528 8.32 7.176C8.32 7.864 7.864 8.848 7.632 9.792C7.496 10.576 8.048 11.264 8.848 11.264C10.272 11.264 11.376 9.744 11.376 7.6C11.376 5.68 10 4.368 8.024 4.368C5.768 4.368 4.44 6.048 4.44 7.816C4.44 8.504 4.664 9.2 5.032 9.656C5.104 9.704 5.104 9.768 5.08 9.888L4.848 10.76C4.848 10.896 4.76 10.944 4.624 10.848C3.6 10.4 3.008 8.944 3.008 7.768C3.008 5.24 4.8 2.944 8.256 2.944C11.008 2.944 13.152 4.92 13.152 7.544C13.152 10.296 11.448 12.504 9.008 12.504C8.232 12.504 7.472 12.088 7.2 11.6L6.664 13.496C6.48 14.184 5.976 15.104 5.632 15.656V15.632Z"
                                    fill="#FF6C37" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="">
        <nav id='cssmenu'>
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('image/Plutus-logo(new-o).png')}}" alt="logo">
                </a>
            </div>
            <div class="button" onclick="showModal()"></div>
            <ul class="menu-links hidden" id="modal">
                <li
                    class="company-menu <?php echo in_array($filename, ['aboutus','engagement-models','client-confidentiality','life-at-plutus']) !== false ? 'active' : ''; ?>">
                    <a href="/" class="main-tag">Company</a>
                    <ul>
                        <li class="bg-white h-auto mobile-row-hine">
                            <div class="container">
                                <div class="row heading-t">
                                    <div class="col-lg-3 col-md-6  dp-text">
                                        <div><img src="{{ asset('image/about-us.svg')}}" alt="aboutus">
                                            <a class="dropdown-item <?php echo preg_match("(aboutus)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                href="aboutus">About Us</a>
                                        </div>
                                        <hr>
                                        <p>We understand your business
                                            requirements are unique.
                                            Considering that we offer...</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6  dp-text">
                                        <div><img src="{{ asset('image/Engagement-Model.svg')}}"
                                                alt="engagement-models">
                                            <a class="dropdown-item <?php echo preg_match("(engagement)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                href="engagement-models">Engagement
                                                Model</a>
                                        </div>
                                        <hr>
                                        <p>We understand your business
                                            requirements are unique.
                                            Considering that we offer...</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6  dp-text">
                                        <div><img src="{{ asset('image/client-confidentiality.svg')}}"
                                                alt="client-confidentiality">
                                            <a class="dropdown-item <?php echo preg_match("(client)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                href="client-confidentiality">Client
                                                Confidentiality</a>
                                        </div>
                                        <hr>
                                        <p>We understand your business
                                            requirements are unique.
                                            Considering that we offer...</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6  dp-text">
                                        <div><img src="{{ asset('image/life-plutus.svg')}}" alt="life-at-plutus">
                                            <a class="dropdown-item <?php echo preg_match("(life-at-plutus)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                href="life-at-plutus">Life@Plutus</a>
                                        </div>
                                        <hr>
                                        <p>We understand your business
                                            requirements are unique.
                                            Considering that we offer...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="company-menu-bottom-content">
                                <div class="container">
                                    <div
                                        class="bottom-centent d-flex align-items-center justify-content-between flex-wrap-wrap">
                                        <div class="row w-100">
                                            <div class="col-md-4">
                                                <div class="bottom-image">
                                                    <img src="{{ asset('image/Company-menu-bottom-image.svg')}}"
                                                        alt="menu">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row justify-content-end">
                                                    <div class="col-md-4 mb-3">
                                                        <div class="contact-details d-flex align-items-center">
                                                            <img width="25" height="20"
                                                                src="{{ asset('image/mail-icon-white.svg')}}"
                                                                alt="mail">
                                                            <a href="mailto:sales@plutustec.com">sales@plutustec.com</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="contact-details d-flex align-items-center">
                                                            <img src="{{ asset('image/Skype-icon-white.svg')}}"
                                                                alt="skype">
                                                            <a href="skype:live:kalpit.belani?chat">sales.plutustec</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-md-4">
                                                        <div class="contact-details d-flex align-items-center">
                                                            <img src="{{ asset('image/Phone-icon-white.svg')}}"
                                                                alt="call">
                                                            <a href="tel:+91-794-800-0107">+91-794-800-0107</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 social-icons">
                                                        <div class="contact-details d-flex align-items-center">
                                                            <a href="https://www.facebook.com/PlutusTechnologies"
                                                                target="_blank"><img
                                                                    src="{{ asset('image/Facebook-icon-white.svg')}}"
                                                                    alt="facebook"></a>
                                                            <a href="https://twitter.com/PlutusTech"
                                                                target="_blank"><img
                                                                    src="{{ asset('image/Twitter-icon-wite.svg')}}"
                                                                    alt="tw"></a>
                                                            <a href="https://www.linkedin.com/company/plutus-technologies-pvt-ltd/mycompany/"
                                                                target="_blank"><img
                                                                    src="{{ asset('image/Linkedin-icon-white.svg')}}"
                                                                    alt="linkedin"></a>
                                                            <a href="https://www.instagram.com/plutustechnology/"
                                                                target="_blank"><img
                                                                    src="{{ asset('image/instagram-icon-white.svg')}}"
                                                                    alt="instagram"></a>
                                                            <a href="https://in.pinterest.com/plutustechnologies/"
                                                                target="_blank"><img
                                                                    src="{{ asset('image/pintrest-icon-white.svg')}}"
                                                                    alt="instagram"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" mobile-row-show heading-t bg-white h-auto">
                            <div class="d-flex row">
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border">
                                        <div class="mobile-left-image-div">
                                            <img src="{{ asset('image/about-us.svg')}}" alt="aboutus">
                                        </div>
                                        <div class="mobile-right-content-div">
                                            <a class="dropdown-item mobile-inner-title-menu" href="aboutus">About
                                                Us</a>
                                            <p>We understand your business
                                                requirements are unique.
                                                Considering that we offer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border">
                                        <div class="mobile-left-image-div">
                                            <img src="{{ asset('image/Engagement-Model.svg')}}" alt="engagement-models">
                                        </div>
                                        <div class="mobile-right-content-div">
                                            <a class="dropdown-item mobile-inner-title-menu"
                                                href="engagement-models">Engagement Model</a>
                                            <p>We understand your business
                                                requirements are unique.
                                                Considering that we offer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border">
                                        <div class="mobile-left-image-div">
                                            <img src="{{ asset('image/client-confidentiality.svg')}}"
                                                alt="client-confidentiality">
                                        </div>
                                        <div class="mobile-right-content-div">
                                            <a class="dropdown-item mobile-inner-title-menu"
                                                href="client-confidentiality">Client Confidentiality</a>
                                            <p>We understand your business
                                                requirements are unique.
                                                Considering that we offer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border">
                                        <div class="mobile-left-image-div">
                                            <img src="{{ asset('image/life-plutus.svg')}}" alt="life-at-plutus">
                                        </div>
                                        <div class="mobile-right-content-div">
                                            <a class="dropdown-item mobile-inner-title-menu"
                                                href="life-at-plutus">Life@Plutus</a>
                                            <p>We understand your business
                                                requirements are unique.
                                                Considering that we offer...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li
                    class="services-menu <?php echo preg_match("(services|development|maintenance)", $filename) === 1 ? 'active' : ''; ?>">
                    <a href='services' class="main-tag">Services</a>
                    <ul>
                        <li class="bg-white h-auto services-mobile-row-hine heading-t">
                            <div class="container">
                                <div class="services-main-menu">
                                    <div class="service-menu-inner-box">
                                        <div class="service-menu-image-div mb-3">
                                            <img src="{{ asset('image/Service-inner-menu-image-1.svg')}}"
                                                alt="mobiledevelopment">
                                        </div>
                                        <div class="service-menu-right-content-div">
                                            <h4 class="">Mobile App Development</h4>
                                            <hr>
                                            <ul>
                                                <li>
                                                    <a class="<?php echo preg_match("(ios)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="ios-development">iOS App Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(android)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="android-development">Android App
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(ionic)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="ionic-development">Ionic App
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(react-native)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="react-native-development">React Native
                                                        App Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(flutter)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="flutter-development">Flutter App
                                                        Development</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="service-menu-inner-box">
                                        <div class="service-menu-image-div mb-3">
                                            <img src="{{ asset('image/Service-inner-menu-image-2.svg')}}"
                                                alt="webdevelopment">
                                        </div>
                                        <div class="service-menu-right-content-div">
                                            <h4 class="">Web Development</h4>
                                            <hr>
                                            <ul>
                                                <li>
                                                    <a class="<?php echo preg_match("(php)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="php-development">PHP Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(nodejs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="nodejs-development">Node.js
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(angularjs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="angularjs-development">AngularJS
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(reactjs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="reactjs-development">ReactJS
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(fullstack)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="fullstack-development">Fullstack
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(python)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="python-development">Python
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(aspnet)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="aspnet-development">.NET Development</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="service-menu-inner-box">
                                        <div class="service-menu-image-div mb-3">
                                            <img src="{{ asset('image/Service-inner-menu-image-3.svg')}}" alt="cms">
                                        </div>
                                        <div class="service-menu-right-content-div">
                                            <h4 class="">CMS & E-commerce</h4>
                                            <hr>
                                            <ul>
                                                <li>
                                                    <a class="<?php echo preg_match("(WordPress)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="WordPress-development">WordPress
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(drupal)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="drupal-development">Drupal
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(magento)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="magento-development">Magento
                                                        Development</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="service-menu-inner-box">
                                        <div class="service-menu-image-div mb-3">
                                            <img src="{{ asset('image/Service-inner-menu-image-4.svg')}}" alt="qa">
                                        </div>
                                        <div class="service-menu-right-content-div">
                                            <h4 class="">QA & Testing</h4>
                                            <hr>
                                            <ul>
                                                <li>
                                                    <a class="<?php echo preg_match("(softwaretesting)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="softwaretesting-development">Software
                                                        Testing</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="service-menu-inner-box">
                                        <div class="service-menu-image-div mb-3">
                                            <img src="{{ asset('image/Service-inner-menu-image-5.svg')}}"
                                                alt="Otherservices">
                                        </div>
                                        <div class="service-menu-right-content-div">
                                            <h4 class="">Other Services</h4>
                                            <hr>
                                            <ul>
                                                <li>
                                                    <a class="<?php echo preg_match("(uiux)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="uiux-development">UI/UX Design</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(digital)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="digital-marketing-development">Digital
                                                        Marketing</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(customer)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="customer-support-maintenance">Support &
                                                        Maintenance</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="services-menu-bottom-content">
                                <div class="container">
                                    <div
                                        class="bottom-centent d-flex align-items-center justify-content-between flex-wrap-wrap">
                                        <div class="row w-100">
                                            <div class="bottom-image">
                                                <img src="{{ asset('image/Services-menu-bottom-image.svg')}}"
                                                    alt="service bottom">
                                            </div>
                                            <div class="bottom-text p-0">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <h5>Want to convert idea into Web/Application?</h5>
                                                    <a class="btn btn-white" href="contact-us">Contact Us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="bg-white h-auto  mobile-row-show heading-t ">
                            <div class="d-flex row">
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border ">
                                        <div class="mobile-left-image-div">
                                            <img src="{{ asset('image/Service-inner-menu-image-1.svg')}}"
                                                alt="mobiledevelopment">
                                        </div>
                                        <div class="mobile-right-content-div">
                                            <h4>Mobile App Development</h4>
                                            <ul class="sub-inner-list">
                                                <li>
                                                    <a class="<?php echo preg_match("(ios)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="ios-development">iOS App Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(android)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="android-development">Android App
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(ionic)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="ionic-development">Ionic App
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(react)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="react-native-development">React Native
                                                        App Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(flutter)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="flutter-development">Flutter App
                                                        Development</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border">
                                        <div class="mobile-left-image-div">
                                            <img src="{{ asset('image/Service-inner-menu-image-2.svg')}}"
                                                alt="webdevelopment">
                                        </div>
                                        <div class="mobile-right-content-div">
                                            <h4>Web Development</h4>
                                            <ul class="sub-inner-list">
                                                <li>
                                                    <a class="<?php echo preg_match("(php)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="php-development">PHP Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(nodejs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="nodejs-development">Node.js Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(angularjs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="angularjs-development">AngularJS
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(reactjs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="reactjs-development">ReactJS
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(fullstack)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="fullstack-development">Fullstack
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(python)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="python-development">Python
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(aspnet)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="aspnet-development">.NET Development</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border">
                                        <div class="mobile-left-image-div">
                                            <img src="{{ asset('image/Service-inner-menu-image-3.svg')}}" alt="cms">
                                        </div>
                                        <div class="mobile-right-content-div">
                                            <h4>CMS & E-commerce</h4>
                                            <ul class="sub-inner-list">
                                                <li>
                                                    <a class="<?php echo preg_match("(WordPress)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="WordPress-development">WordPress
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(drupal)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="drupal-development">Drupal
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(magento)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="magento-development">Magento
                                                        Development</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border">
                                        <div class="mobile-left-image-div">
                                            <img src="{{ asset('image/Service-inner-menu-image-4.svg')}}" alt="qa">
                                        </div>
                                        <div class="mobile-right-content-div">
                                            <h4>QA & Testing</h4>
                                            <ul class="sub-inner-list">
                                                <li>
                                                    <a class="<?php echo preg_match("(softwaretesting)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="softwaretesting-development">Software
                                                        Testing</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border">
                                        <div class="mobile-left-image-div">
                                            <img src="{{ asset('image/Service-inner-menu-image-5.svg')}}" alt="other">
                                        </div>
                                        <div class="mobile-right-content-div">
                                            <h4>Other Services</h4>
                                            <ul class="sub-inner-list">
                                                <li>
                                                    <a class="<?php echo preg_match("(uiux)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="uiux-development">UI/UX Design</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(digital)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="digital-marketing-development">Digital
                                                        Marketing</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(customer)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="customer-support-maintenance">Support &
                                                        Maintenance</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="our-work">
                    <a href='#'>Our Work</a>
                    <ul>
                        <li class="mobile-row-hine bg-white h-auto">
                            <div class="container">
                                <div class="row heading-t align-items-start">
                                    <div class="col-lg-3 col-md-3  dp-text">
                                        <div class="case-study-inner-menu-links service-menu-right-content-div">
                                            <div
                                                class="d-flex justify-content-between align-items-center portfolio-head">
                                                <h4>Case Study</h4>
                                                <a class="" href="">See all</a>
                                            </div>
                                            <ul class="mt-3">
                                                <li>
                                                    <a class="" href="">IOS App Developer</a>
                                                </li>
                                                <li>
                                                    <a class="" href="">Android App Developer</a>
                                                </li>
                                                <li>
                                                    <a class="" href="">Ionic App Developer</a>
                                                </li>
                                                <li>
                                                    <a class="" href="">React Native App Developer</a>
                                                </li>
                                                <li>
                                                    <a class="" href="">Flutter App Developer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5  ">
                                        <div class="service-menu-right-content-div our-work-portfolio-boxes-mian">
                                            <div class="our-work-portfolio">
                                                <div
                                                    class="d-flex justify-content-between align-items-center w-100 portfolio-head">
                                                    <h4>Portfolio</h4>
                                                    <a class="" href="portfolio">See all</a>
                                                </div>
                                                <div class="mt-3 row">
                                                    <div class="col-6 portfolio-box">
                                                        <a href="rsd_portfoli" class="p-0"><img
                                                                src="{{ asset('image/RSD-1.jpg')}}" alt="portfolio">
                                                            <h5>RSD</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col-6 portfolio-box">
                                                        <a href="" class="p-0"><img
                                                                src="{{ asset('image/rapidparty.jpg')}}"
                                                                alt="portfolio">
                                                            <h5>Rapid party</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col-6 portfolio-box">
                                                        <a href="" class="p-0"><img
                                                                src="{{ asset('image/reshyne_1.jpg')}}" alt="portfolio">
                                                            <h5>Reshyne</h5>
                                                        </a>
                                                    </div>
                                                    <div class="col-6 portfolio-box">
                                                        <a href="" class="p-0"><img
                                                                src="{{ asset('image/skilled_trade_exam.jpg')}}"
                                                                alt="portfolio">
                                                            <h5>Skilled trade exam</h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4  dp-text">
                                        <div class="service-menu-right-content-div blog-list-main">
                                            <div
                                                class="d-flex justify-content-between align-items-center portfolio-head">
                                                <h4>Blog</h4>
                                                <a class="" href="blog">See all</a>
                                            </div>
                                            <div class="our-work-blog-list mt-3">
                                                <div class="our-work-blog-list-row">
                                                    <div class="our-work-blog-list-row-image">
                                                        <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                            alt="blog">
                                                    </div>
                                                    <div class="our-work-blog-list-row-content">
                                                        <a class="title" href="">
                                                            Online food delivery app clone:
                                                        </a>
                                                        <span class="date">
                                                            Date: 15/01/2023
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="our-work-blog-list-row">
                                                    <div class="our-work-blog-list-row-image">
                                                        <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                            alt="blog">
                                                    </div>
                                                    <div class="our-work-blog-list-row-content">
                                                        <a class="title" href="">
                                                            Online food delivery app clone:
                                                        </a>
                                                        <span class="date">
                                                            Date: 15/01/2023
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="our-work-blog-list-row">
                                                    <div class="our-work-blog-list-row-image">
                                                        <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                            alt="blog">
                                                    </div>
                                                    <div class="our-work-blog-list-row-content">
                                                        <a class="title" href="">
                                                            Online food delivery app clone:
                                                        </a>
                                                        <span class="date">
                                                            Date: 15/01/2023
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="services-menu-bottom-content">
                                <div class="container">
                                    <div
                                        class="bottom-centent d-flex align-items-center justify-content-between flex-wrap-wrap">
                                        <div class="row w-100">

                                            <div class="bottom-image">
                                                <img src="{{ asset('image/Services-menu-bottom-image.svg')}}"
                                                    alt="service bottom">
                                            </div>

                                            <div class="bottom-text p-0">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <h5>Want to convert idea into Web/Application?</h5>
                                                    <a class="btn btn-white" href="contact-us">Contact Us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" mobile-row-show heading-t bg-white h-auto ">
                            <div class="row d-flex">
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border ">
                                        <div class="mobile-right-content-div">
                                            <div
                                                class="d-flex justify-content-between align-items-center portfolio-head">
                                                <h4 class="dropdown-item">Case Study</h4>
                                                <a class="" href="">See all</a>
                                            </div>
                                            <!-- <a class="dropdown-item" href="">Case Study</a> -->
                                            <ul class="sub-inner-list">
                                                <li>
                                                    <a class="" href="">1. IOS App Developer</a>
                                                </li>
                                                <li>
                                                    <a class="" href="">2. Android App Developer</a>
                                                </li>
                                                <li>
                                                    <a class="" href="">3. Ionic App Developer</a>
                                                </li>
                                                <li>
                                                    <a class="" href="">4. React Native App Developer</a>
                                                </li>
                                                <li>
                                                    <a class="" href="">5. Flutter App Developer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border ">
                                        <div class="mobile-right-content-div">
                                            <div
                                                class="d-flex justify-content-between align-items-center w-100 portfolio-head">
                                                <h4>Portfolio</h4>
                                                <a class="" href="portfolio">See all</a>
                                            </div>
                                            <!-- <a class="dropdown-item" href="portfolio">Portfolio</a> -->
                                            <ul class="sub-inner-list our-work-portfolio-boxes-mian">
                                                <li class="our-work-portfolio-row">
                                                    <div class="our-work-portfolio-row-box">
                                                        <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                            alt="portfolio">
                                                        <a class="" href="">Clubify</a>
                                                    </div>
                                                    <div class="our-work-portfolio-row-box">
                                                        <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                            alt="portfolio">
                                                        <a class="" href="">RSD</a>
                                                    </div>
                                                </li>
                                                <li class="our-work-portfolio-row">
                                                    <div class="our-work-portfolio-row-box">
                                                        <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                            alt="portfolio">
                                                        <a class="" href="">Rapidparty</a>
                                                    </div>
                                                    <div class="our-work-portfolio-row-box">
                                                        <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                            alt="portfolio">
                                                        <a class="" href="">Dotima</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6  dp-text">
                                    <div class="d-flex mobile-menu-border ">
                                        <div class="mobile-right-content-div">
                                            <div
                                                class="d-flex justify-content-between align-items-center portfolio-head">
                                                <h4>Blog</h4>
                                                <a class="" href="blog">See all</a>
                                            </div>
                                            <!-- <a class="dropdown-item" href="blog">Blog</a> -->
                                            <ul class="sub-inner-list blog-list-main">
                                                <li class="our-work-blog-list flex-wrap">
                                                    <div class="our-work-blog-list-row">
                                                        <div class="our-work-blog-list-row-image">
                                                            <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                                alt="blog">
                                                        </div>
                                                        <div class="our-work-blog-list-row-content">
                                                            <a class="title" href="">
                                                                Online food delivery app clone:
                                                            </a>
                                                            <span class="date">
                                                                Date: 15/01/2023
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="our-work-blog-list-row">
                                                        <div class="our-work-blog-list-row-image">
                                                            <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                                alt="blog">
                                                        </div>
                                                        <div class="our-work-blog-list-row-content">
                                                            <a class="title" href="">
                                                                Online food delivery app clone:
                                                            </a>
                                                            <span class="date">
                                                                Date: 15/01/2023
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="our-work-blog-list-row">
                                                        <div class="our-work-blog-list-row-image">
                                                            <img src="{{ asset('image/Demo-portfolio-small.svg')}}"
                                                                alt="blog">
                                                        </div>
                                                        <div class="our-work-blog-list-row-content">
                                                            <a class="title" href="">
                                                                Online food delivery app clone:
                                                            </a>
                                                            <span class="date">
                                                                Date: 15/01/2023
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo strpos($filename, 'career') !== false ? 'active' : ''; ?>">
                    <a href='career' class="main-tag">Careers</a>
                </li>
                <li class="hire-resources-menu <?php echo preg_match("(hire)", $filename) === 1 ? 'active' : ''; ?>">
                    <a href='javascript:void(0)' class="main-tag">Hire Resources</a>
                    <ul>
                        <li class="hire-resources-mobile-row-hine heading-t bg-white h-auto">
                            <div class="container">
                                <div class="services-main-menu hire-resources-main-row">
                                    <div class="service-menu-inner-box">
                                        <div class="service-menu-right-content-div">
                                            <ul class="col-12 col-lg-3 col-md-6">
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-php)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-php-developers">Hire PHP
                                                        Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-android)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-android-app-developer"> Hire Android
                                                        App Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-ios)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-ios-app-developer">Hire iOS App
                                                        Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-wordpress)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-wordpress-developer">Hire WordPress
                                                        Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-magento)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-magento-app-developer">Hire Magento
                                                        Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-uiux)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-uiux-designer">Hire UI/UX
                                                        Designer</a>
                                                </li>
                                            </ul>
                                            <ul class="col-12 col-lg-3 col-md-6">
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-ionic)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-ionic-app-developer">Hire Ionic App
                                                        Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-reactnative)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-reactnative-app-developer"> Hire React Native
                                                        App Developer </a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-flutter)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-flutter-app-developer">Hire Flutter App
                                                        Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-nodejs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-nodejs-developer">Hire Node.js Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-reactjs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-reactjs-developer">Hire RactJS Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-angularjs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-angularjs-developer">Hire AngularJS
                                                        Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-fullstack)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-fullstack-developer">Hire Fullstack
                                                        Developer</a>
                                                </li>
                                            </ul>
                                            <ul class="col-12 col-lg-3 col-md-6">
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-python)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-python-developer">Hire Python Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-dotnet)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-dotnet-developer"> Hire .NET Developer </a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-drupal)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-drupal-developer">Hire Drupal Developer</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-softwaretester)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-sofwaretester">Hire Software Tester</a>
                                                </li>
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-digital)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-digitalmarketer">Hire Digital Marketer</a>
                                                </li>
                                            </ul>
                                            <ul class="col-12 col-lg-3 col-md-6">
                                                <li>
                                                    <a class="<?php echo preg_match("(hire-support-team)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                                        href="hire-support-team">Hire Support Team</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hire-resources-menu-bottom-content">
                                <div class="container">
                                    <div
                                        class="bottom-centent d-flex align-items-center justify-content-between flex-wrap-wrap">
                                        <div class="row w-100 align-items-center">
                                            <div class="col">
                                                <h5>Plutus Technologies offers customized development solutions
                                                    built with high-quality standards at the most affordable costs.
                                                </h5>
                                            </div>

                                            <div class="hire-resources-contact-btn">
                                                <div class="d-flex align-items-center  justify-content-end">
                                                    <a href="contact-us" class="btn btn-white">Contact Us</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="row mobile-row-show heading-t bg-white h-auto">
                            <div class="col-12 col-lg-3 col-md-6 dp-text">
                                <a class="<?php echo preg_match("(hire-php)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-php-developers">Hire PHP Developer</a>

                                <a class="<?php echo preg_match("(hire-android)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-android-app-developer"> Hire Android App
                                    Developer</a>

                                <a class="<?php echo preg_match("(hire-ios)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-ios-app-developer">Hire iOS App Developer</a>

                                <a class="<?php echo preg_match("(hire-wordpress)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-wordpress-developer">Hire WordPress Developer</a>

                                <a class="<?php echo preg_match("(hire-magento)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-magento-app-developer">Hire Magento Developer</a>

                                <a class="<?php echo preg_match("(hire-uiux)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-uiux-designer">Hire UI/UX Designer</a>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 dp-text">
                                <a class="<?php echo preg_match("(hire-ionic)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-ionic-app-developer">Hire Ionic App Developer</a>

                                <a class="<?php echo preg_match("(hire-reactnative)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-reactnative-app-developer"> Hire React Native App Developer </a>

                                <a class="<?php echo preg_match("(hire-flutter)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-flutter-app-developer">Hire Flutter App Developer</a>

                                <a class="<?php echo preg_match("(hire-nodejs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-nodejs-developer">Hire Node.js Developer</a>

                                <a class="<?php echo preg_match("(hire-reactjs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-reactjs-developer">Hire RactJS Developer</a>

                                <a class="<?php echo preg_match("(hire-angularjs)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-angularjs-developer">Hire AngularJS Developer</a>

                                <a class="<?php echo preg_match("(hire-fullstack)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-fullstack-developer">Hire Fullstack Developer</a>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 dp-text">
                                <a class="<?php echo preg_match("(hire-python)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-python-developer">Hire Python Developer</a>

                                <a class="<?php echo preg_match("(hire-dotnet)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-dotnet-developer"> Hire .NET Developer </a>

                                <a class="<?php echo preg_match("(hire-drupal)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-drupal-developer">Hire Drupal Developer</a>

                                <a class="<?php echo preg_match("(hire-softwaretester)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-sofwaretester">Hire Software Tester</a>

                                <a class="<?php echo preg_match("(hire-digital)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-digitalmarketer">Hire Digital Marketer</a>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 dp-text">
                                <a class="<?php echo preg_match("(hire-support-team)", $filename) === 1 ? 'main-tag' : ''; ?>"
                                    href="hire-support-team">Hire Support Team</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo preg_match("(contact-us)", $filename) === 1 ? 'active' : ''; ?>">
                    <a href='contact-us'>Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>