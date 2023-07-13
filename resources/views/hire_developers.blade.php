<div class="d-flex justify-content-center pb-5">
    <div class="row aos-init" data-aos="fade-up" data-aos-delay="500">
        <div class="col-12">
            <div class="">
                <button class="btn btn-primary" id="apply_now">Hire Developers</button>
            </div>
        </div>
    </div>
</div>
<div class="bg-lightblue space careers-details-bottom-form" style="display: none">
    <div class="container aos-init" data-aos="fade-up">
        <form id="hiredevelopers" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="lable-style subtext f-text mb-2" for="name">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" name="firstName" id="firstName"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="lable-style subtext f-text mb-2" for="name">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" name="lastName" id="lastName"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="lable-style subtext f-text mb-2" for="name">Phone</label>
                        <input type="text" maxlength="13" class="form-control" placeholder="Phone" name="phone"
                            id="phone" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="lable-style subtext f-text mb-2" for="name">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="lable-style subtext f-text mb-2" for="name">Technologies</label>
                        <select class="form-select" required aria-label="select example" name="technology"
                            id="technology">
                            <option value="">Select</option>
                            <option value="php">PHP</option>
                            <option value="android">Android</option>
                            <option value="ios">iOS</option>
                            <option value="wordpress">Wordpress</option>
                            <option value="magento">Magento</option>
                            <option value="uiux-designer">Ui Ux designer</option>
                            <option value="ionic">Ionic</option>
                            <option value="reactnative">React native</option>
                            <option value="flutter">Flutter</option>
                            <option value="nodejs">Node.js</option>
                            <option value="reactjs">React.js</option>
                            <option value="angularjs">Angular.js</option>
                            <option value="fullstack">Fullstack</option>
                            <option value="python">Python</option>
                            <option value="dotnet">.net</option>
                            <option value="drupal">Drupal</option>
                            <option value="softwaretester">Software Tester</option>
                            <option value="digitalmarketer">Digital Marketer</option>
                            <option value="support-team">Support team</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" id="page" name="page" id="page" value="hiredevelopers" />
                <div class="col-md-12">
                    <label class="lable-style subtext f-text mb-2" for="name">Budget</label>
                    <div class="form-group">
                        <div class="custom-radio">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="Fixed" id="flexRadioDefault1"
                                    name="budget">
                                <label class="form-check-label" for="flexRadioDefault1">
                                </label><span>Fixed</span>
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" value="Hourly" id="flexRadioDefault2"
                                    name="budget">
                                <label class="form-check-label" for="flexRadioDefault2">
                                </label><span>Hourly</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="lable-style subtext f-text mb-2" for="name">Project Details</label>
                        <textarea class="form-control message-box lable-style subtext f-text" id="msg" name="msg"
                            rows="3" placeholder="Enter Details" required></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" class="form-control" name="doc" id="doc" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6Lc7bHcmAAAAAKJMOt6Gz7gv2X80LqFFjJTicu3s"
                            data-callback="recaptchaCallback"></div>
                        <div id="captchError" class="error" style="display: none;">This field is required.</div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
            <img src="images/loading.gif" alt="loader" id="loaderImg" style="display: none;">
            <div id="successMsg" class="text-primary mt-3" style="display: none">Application sent successfully.</div>
            <div id="errorMsg" class="text-primary mt-3" style="display: none"></div>
        </form>
    </div>
</div>
@push('extra-js-scripts')
<script type="text/javascript">
</script>
@endpush