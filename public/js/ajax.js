$(document).ready(function () {   
    $("#loaderImg").hide(); 
    $('#contactForm').validate({ // initialize the plugin
        rules: {
            email: {
                required: true,
                regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
            },
            name: {
                required: true,
                regex : /^[a-zA-Z ]*$/,
            },
            phone: {
                required: true,
                maxlength: 13,
                minlength: 10,
                regex : /^\+?(?:[\d]*)$/
            },
            subject: {
                required: true,
            },
            msg: {
                required: true,
            }
        }        
    });

    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var check = false;
            return this.optional(element) || regexp.test(value);
        },
        "Please check your input."
    );   

    $("#contactForm").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        if(grecaptcha.getResponse() == "") {
            e.preventDefault();
            $("#contact_captchError").show();
        }else{
            $("#contact_captchError").hide();
        } 
        $("#loaderImg").show();
        var form = $(this);
        var actionUrl = 'inquiryform';
        document.getElementById("submitButton").disabled=true;
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                let res = JSON.parse(data);
                if(res.success){
                    document.getElementById("contactForm").reset();
                    $("#successMsg").show();
                    setTimeout(() => {
                        $("#successMsg").hide();                    
                    }, 3000);
                }
                $("#loaderImg").hide();
                document.getElementById("submitButton").disabled=false;
            },error: function(error){
                $("#loaderImg").hide();
                document.getElementById("submitButton").disabled=false;
            }
        });
        
    });

    // career form
    $('#careerForm').validate({ // initialize the plugin
        rules: {
            email: {required: true, regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/},
            firstName:{required : true,regex : /^[a-zA-Z ]*$/},
            lastName:{required : true,regex : /^[a-zA-Z ]*$/},
            phone:{required : true, regex : /^\+?(?:[\d]*)$/},
            current_ctc:{required : true,number : true},
            expected_ctc:{required : true,number : true},
            experience_year:{required : true,number : true,},
            experience_month:{required : true,number : true},
            notice_period:{required : true},
            current_city:{required : true, regex : /^[a-zA-Z ]*$/,},
            resume: {required: true},            
        }        
    });

    $("#careerForm").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        $("#loaderImg").show();
        // var form = $(this);
        var actionUrl = 'inquiryform';
        document.getElementById("submitButton").disabled=true;

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(res)
            {
                $('#errorMsg').html('');
                console.log(res)
                if(res.success){
                    document.getElementById("careerForm").reset();
                    $("#successMsg").show();
                    setTimeout(() => {
                        $("#successMsg").hide();                    
                    }, 3000);
                }else{
                    $("#errorMsg").show();
                    $('#errorMsg').html('<p class="alert alert-danger">'+res.message+'</p>');
                    setTimeout(() => {
                        $("#errorMsg").hide();                    
                    }, 3000);
                
                }
                $("#loaderImg").hide();
                document.getElementById("submitButton").disabled=false;
            },error: function(error){
                $("#loaderImg").hide();
                document.getElementById("submitButton").disabled=false;
            }
        });
        
    });

    // hire developers form
    $('#hiredevelopers').validate({ // initialize the plugin
        rules: {
            email: {required: true, regex: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/},
            firstName:{required : true,regex : /^[a-zA-Z ]*$/},
            lastName:{required : true,regex : /^[a-zA-Z ]*$/},
            phone:{required : true, regex : /^\+?(?:[\d]*)$/},
            technology:{required : true},
            budget:{required : true},
            msg:{required : true},
            doc: {required: true},            
        }        
    });

    $("#hiredevelopers").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        if(grecaptcha.getResponse() == "") {
            e.preventDefault();
            $("#captchError").show();
        }else{
            $("#captchError").hide();
        } 

        $("#loaderImg").show();
        // var form = $(this);
        var actionUrl = 'inquiryform';
        document.getElementById("submitButton").disabled=true;

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(res)
            {
                $('#errorMsg').html('');
                console.log(res)
                if(res.success){
                    document.getElementById("hiredevelopers").reset();
                    $("#successMsg").show();
                    $("#technologyList").val('');
                    $(".techList").html('');
                    techarray = [];
                    setTimeout(() => {
                        location.reload();
                        $("#successMsg").hide();                    
                    }, 5000);
                }else{
                    $("#errorMsg").show();
                    $('#errorMsg').html('<p class="alert alert-danger">'+res.message+'</p>');
                    setTimeout(() => {
                        $("#errorMsg").hide();                    
                    }, 3000);
                
                }
                $("#loaderImg").hide();
                document.getElementById("submitButton").disabled=false;
            },error: function(error){
                $("#loaderImg").hide();
                document.getElementById("submitButton").disabled=false;
            }
        });
        
    });

});


function recaptchaCallback() {
    $("#captchError").hide();
};

function recaptchaActions(){
    $("#contact_captchError").hide();
}