<?php 
$technology = ['PHP','Android','iOS','Wordpress','Magento','Ui Ux designer','Ionic','React native','Flutter','Node.js','React.js','Angular.js','Fullstack','Python', '.Net','Drupal','Software Tester','Digital Marketer','Support team'];
$techArray = []; 
?>
<div class="d-flex justify-content-center pb-5">
    <div class="row aos-init" data-aos="fade-up" data-aos-delay="500">
        <div class="col-12">
            <div class="">
                <button class="cursor-hover btn-orange" id="apply_now">Hire Developers</button>
            </div>
        </div>
    </div>
</div>
<div class="bg-lightorange space careers-details-bottom-form" style="display: none">
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
                        <input type="text" class="form-control" placeholder="Email" name="email" id="email" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="lable-style subtext f-text mb-2" for="name">Technologies</label>
                        <select class="form-select" required aria-label="select example" id="technology">
                            <option value="">Select</option>
                            @foreach ($technology as $tech)
                            <option value="{{$tech}}">{{$tech}}</option>
                            @endforeach
                        </select>
                        <input type="hidden" id="technologyList" name="technology" id="page" value="" />
                    </div>
                </div>
                <div class="col-md-12 mb-2 techList"></div>
                <input type="hidden" id="page" name="page" id="page" value="hiredevelopers" />
                <div class="col-md-12">
                    <label class="lable-style subtext f-text mb-2" for="name">Budget</label>
                    <div class="form-group mb-0">
                        <div class="custom-radio d-flex align-item-center flex-wrap position-relative pb-4">
                            <div class="d-flex align-item-center me-3">
                                <input class="form-check-input" type="radio" value="Fixed" id="flexRadioDefault1"
                                    name="budget">
                                <label class="custom" for="flexRadioDefault1">
                                </label><span class="ms-2">Fixed</span>
                            </div>
                            <div class="d-flex align-item-center me-3">
                                <input class="form-check-input" type="radio" value="Hourly" id="flexRadioDefault2"
                                    name="budget">
                                <label class="custom" for="flexRadioDefault2">
                                </label><span class="ms-2">Hourly</span>
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
                        <label class="lable-style subtext f-text mb-2" for="name">Upload Documents</label>
                        <input type="file" class="cursor-hover form-control" name="doc" id="doc" required
                            accept="application/msword, application/pdf">
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
            <!-- <img src="images/loading.gif" alt="loader" id="loaderImg" style="display: none;"> -->
            <div class="d-flex align-items-center">
                <button type="submit" class="cursor-hover btn btn-primary" id="submitButton">Submit</button>
                <div class="loader mx-3" id="loaderImg" style="display: none;"></div>
            </div>
            <div id="successMsg" class="text-primary mt-3" style="display: none">Application sent successfully.</div>
            <div id="errorMsg" class="text-primary mt-3" style="display: none"></div>
        </form>
    </div>
</div>
@push('extra-js-scripts')
<script type="text/javascript">
var techarray = [];
$("#technology").on('change', function() {
    techarray.push($(this).val());
    techarray = techarray.filter((item,
        index) => techarray.indexOf(item) === index);
    setTechtohtml();
});

function setTechtohtml() {
    var html = '';
    $.each(techarray, function(key, val) {
        html += '<button type="button" class="btn-primary"> ' + val +
            '<span class="badge badge-light"  onclick="deleteItem(' + key + ');">X</span></button>';
    })
    $(".techList").html(html)
    $("#technologyList").val(techarray);
}

function deleteItem(item) {
    delete techarray[item];
    techarray = techarray.filter(function(el) {
        return el != null;
    });
    $("#technology").val('');
    setTechtohtml();
    // techarray = techarray.filter(e => e !== value);
}
</script>
@endpush