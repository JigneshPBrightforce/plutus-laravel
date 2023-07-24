<div class="contact">
    <div class="contact-bg">
        <div class=" container d-flex justify-content-end space">
            <div class="col-12 col-md-12 col-lg-6 col-xl-5 bg-white square">
                <form class="form p-4" id="contactForm" novalidate="novalidate">
                    <h3 class="card-title subtitle d-flex align-items-center pb-4"> <span></span>Get In Touch</h3>
                    @csrf
                    <input type="hidden" id="page" name="page" value="contactForm" />
                    <div class="form-group  mb-3">
                        <label class="lable-style subtext f-text mb-2" for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="lable-style subtext f-text mb-2" for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="lable-style subtext f-text mb-2" for="Phone">Phone</label>
                        <input type="text" maxlength="13" id="phone" name="phone" placeholder="Enter Phone Number"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="lable-style subtext f-text mb-2" for="Ysub">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Enter Subject" required>
                    </div>
                    <div class="form-group ">
                        <label class="lable-style subtext f-text mb-2" for="Ymsg">Message</label>
                        <textarea class="form-control message-box lable-style subtext f-text" id="msg" name="msg"
                            rows="3" placeholder="Enter Message" required></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lc7bHcmAAAAAKJMOt6Gz7gv2X80LqFFjJTicu3s"
                        data-callback="recaptchaCallback"></div>
                    <div id="captchError" class="error" style="display: none;">This field is required.</div>
                    <!-- <img src="images/loading.gif" alt="loader" id="loaderImg" style="display: none;"> -->
                    <div class="d-flex align-items-center">
                        <button type="submit" class=" mt-3 btn-orange" id="submitButton">Send</button>
                        <!-- <img src="{{ asset('images/loading.gif')}}" alt="loader" id="loaderImg" style="display: none;"> -->
                        <div class="loader mx-3" id="loaderImg" style="display: none;"></div>
                    </div>
                    <div id="successMsg" class="text-primary mt-3" style="display: none">Email sent successfully.</div>
                </form>
            </div>
        </div>
    </div>
</div>