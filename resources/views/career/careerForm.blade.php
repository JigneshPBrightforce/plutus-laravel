<form id="careerForm" novalidate="novalidate" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="First name" name="firstName" id="firstName"
                    required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Last name" name="lastName" id="lastName" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" maxlength="13" class="form-control" placeholder="Phone" name="phone" id="phone"
                    required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Current CTC" name="current_ctc" id="current_ctc"
                    required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Expected CTC" name="expected_ctc"
                    id="expected_ctc" required>
            </div>
        </div>
        <input type="hidden" id="page" name="page" id="page" value="careerForm" />
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <input type="number" min="0" max="50" class="form-control" placeholder="Experience Year"
                            name="experience_year" id="experience_year" required>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="number" min="0" max="50" class="form-control" placeholder="Experience month"
                            name="experience_month" id="experience_month" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <select class="form-select" required aria-label="select example" name="notice_period"
                    id="notice_period">
                    <option value="">Select notice period</option>
                    <option value="1">Less than 1 month</option>
                    <option value="2">1 month</option>
                    <option value="3">2 month</option>
                    <option value="4">3 month</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Current city" name="current_city"
                    id="current_city">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="file" class="form-control" name="resume" id="resume" required
                    accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/pdf">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
    <img src="{{ asset('images/loading.gif')}}" alt="loader" id="loaderImg" style="display: none;">
    <div id="successMsg" class="text-primary mt-3" style="display: none">Resume sent successfully.</div>
    <div id="errorMsg" class="text-primary mt-3" style="display: none"></div>
</form>