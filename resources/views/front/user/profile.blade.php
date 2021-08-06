@extends('front.layout.dashboard-master')    
@section('main_content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <div class="main-bck-section profile-main-section">
                    <div class="profile-setting-warp">
                        <div class="from-tab-section">
                            <form id="user_profile" name="user_profile" >
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">                       
                                            <div style="position: relative;" class="profile-img-block">
                                                <div class="pro-img"><img src="{{$userData->profile_photo}}" class="img-responsive img-preview" alt=""/></div>
                                                <div class="update-pic-btns">
                                                    <button href="#" class="up-btn"><i class="fal fa-user-edit"></i></button>
                                                    <input style="height: 100%; width: 100%; z-index: 99;" id="logo_id" name="logo"  type="file" class="attachment_upload">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" placeholder="Enter First Name" class="form-control" id="first_name" name="first_name" value="{{$userData->first_name}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" placeholder="Enter Last Name" class="form-control" id="last_name" name="last_name" value="{{$userData->last_name}}">
                                        </div>
                                    </div>
                                    <?php

                                    if($userData->contry_code==""){
                                        $userData->contry_code = "+91";
                                    }
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group change-btn-form-group">
                                            <label for="contact_number"> Mobile Number </label>
                                            <div style="position: relative">
                                                <input style="padding-left: 110px;" type="text" placeholder="Enter  Mobile Number " class="form-control" id="contact_number" name="contact_number" value="{{$userData->contact_number}}" disabled="true">
                                                <!-- <span class="mobile-no-pro">{{$userData->contry_code}}</span> -->

                                                <?php
                                                $countryArr = DB::table('country')->get();
                                                $optionStr = "";
                                                $optionSelectedStr = "";
                                                if($countryArr){
                                                    $i=0;
                                                    foreach($countryArr as $country){
                                                        $i++;
                                                        $style="display: none;";
                                                        if($country->country_phone_code==$userData->contry_code){
                                                            $style = "display:block;";
                                                        }
                                                        $optionStr .= '<span style="'.$style.'vertical-align: middle;" class="'.$country->country_code.'-dd code-el"><img src="'.url('/').'/public/assets/images/logo/'.$country->flag.'" alt="" class="contry-flag" /></span>
                                                            <span class="'.$country->country_code.'-dd contry-code code-el" style="'.$style.'vertical-align: middle;color: #000000">'.$country->country_phone_code.'</span>';

                                                            $optionSelectedStr .= '<a class="dropdown-item" id="'.$country->country_code.'-dd" href="javascript:void(0);" phone-code="'.$country->country_phone_code.'">
                                                                <span style="display:inline-block;vertical-align: middle;"><img src="'.url('/').'/public/assets/images/logo/'.$country->flag.'" alt="" /></span> 
                                                                <span  style="display:inline-block;vertical-align: middle;color: #000000">'.$country->country_phone_code.'</span>
                                                            </a>';
                                                    }
                                                }

                                                ?>
                                                <span class="number-flag-id">
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0;background: none;font-size: 14px">
                                                            <?php echo $optionStr; ?>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);margin-left: -10px;">
                                                            <?php echo $optionSelectedStr; ?>
                                                        </div>
                                                        <input type="hidden" id="code" name="contry_code" value="<?php echo $userData->contry_code; ?>" />
                                                    </div>
                                                </span>
                                                <button type="button" class="mobile-change-btn change-mobile-no">Change</button>
                                                <button type="button" class="mobile-change-btn send-otp-btn" style="display:none;" onclick="getOTP()" >Send OTP</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6 otp-fld" style="display:none;">
                                        <div class="form-group change-btn-form-group">
                                            <label for="email">Enter OTP </label>
                                            <input type="text" placeholder="Enter OTP" class="form-control" id="verificationcode"  >
                                            <button type="button" class="mobile-change-btn verify-otp-btn" onclick="verifyOtp()" >Verify OTP</button>
                                        </div>
                                    </div>

                                    <div class="dont-have-account-section timer-sec" style="display:none;">                    
                                        <div>
                                            <span class="dont-received-otp" style="display:none;">Don't receive the OTP? </span>
                                            <span class="seconds-left-text"><span id="timer"></span> Seconds left to</span> 
                                            <a href="javascript:void(0);" onclick="resendOTP()" class="otp-resend disabled">Resend OTP</a> or <a href="javascript:void(0);" class="otp-resend change-mobno disabled">Change mobile number</a>
                                        </div> 
                                    </div>

                                    
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group change-btn-form-group">
                                            <label for="email">Email <span class="verofy-txt-section"><i class="fas fa-shield-check"></i> Verified</span></label>
                                            <input type="text" placeholder="Enter Email" class="form-control" id="email" name="email" value="{{$userData->email}}">
                                            <button class="mobile-change-btn">Change</button>
                                        </div>
                                    </div>



                                    <?php
                                    /********************* Yogesh Added **********************/
                                        $cityArr = DB::table('city')->where('country_id','1')->get();
                                        $optionStr = "";
                                        if($cityArr){
                                            foreach($cityArr as $city){
                                                $selected = ""; 
                                                if($userData->city == $city->city_name){
                                                    $selected = "selected";
                                                }
                                                $optionStr .= '<option '.$selected.' value="'.$city->city_name.'">'.$city->city_name.'</option>';
                                            }
                                        }
                                    ?>

                                    <div class=" col-sm-12 col-md-6 col-lg-6 form-group">
                                        <label for="account_access">City</label>
                                        <select class="form-control" name="city" id="city">
                                            <option>Select City</option>
                                            <?php echo $optionStr; ?>
                                        </select>
                                    </div>
                                    <div class=" col-sm-12 col-md-6 col-lg-6 form-group">
                                        <label for="account_access">Gender</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="Male" <?php if($userData->gender=="Male"){ echo "selected"; } ?> >Male</option>
                                            <option value="Female" <?php if($userData->gender=="Female"){ echo "selected"; } ?>>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="occupation"> Occupation </label>
                                            <select class="form-control" name="occupation" id="occupation">
                                                <option value="Student">Student</option>
                                                <option value="Employee">Employee</option>
                                            </select>
                                            <!-- <input type="text" placeholder="Enter  Occupation Name " class="form-control" id="occupation" name="occupation" value="{{$userData->occupation}}"> -->
                                        </div>
                                    </div>      

                                    <!-- <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="age"> Age </label>
                                            <input type="text" placeholder="Enter Age" class="form-control" id="age" name="age" value="{{$userData->age}}">
                                        </div>
                                    </div> -->
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Date Of Birth <span style="color: red">*</span></label>
                                            <input name="DOB" placeholder="Select date of birth" type='text' class="form-control datepicker" value="{{$userData->DOB}}" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <a style="width: 100%;" href="javascript:void(0);" onclick="update_profile();" class="btn btn-primary shadow waves-effect waves-light mt-2 profile-update-btn">Update</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <script type="text/javascript">
       $(document).ready(function() {
        var brand = document.getElementById('logo_id');
        brand.className = 'attachment_upload';
        brand.onchange = function() {
            //document.getElementById('fakeUploadLogo').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);

                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo_id").change(function() {
            readURL(this);
        });

    });
    
    function update_profile(){
      
       
            showLoader();
            
            var file_data = "";
            var logo = $('#logo_id').prop('files')[0]; 
            //var file_data = $('#vat_cr_certificate').prop('files')[0]; 
            var token    = "{{csrf_token()}}";
            
          
            
            var form_data = new FormData();   
             form_data.append("form_data",$('#user_profile').serialize());           
            form_data.append('file', file_data);
            form_data.append('logo', logo);
            form_data.append('_token', token);
           
            jQuery.ajax({
                url: "{{url('/')}}/user/update_profile",
                dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function (data) {
                    
                    if(data != ''){
                        swal("Thank You!", "User Profile Updated successfully!", "success")
                            .then((value) => {
                                location.href = "{{url('/')}}/user/profile/";
                        });
                    }else{
                            swal("Oops !", "Something went Wrong", "error")
                        .then((value) => {
                                //location.href = "{{url('/')}}/user/profile/";
                        });
                    }
                }
            });  
            //hideLoader();
        }
            
    </script> 
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-datepicker.min.css">
    <script src="{{url('/')}}/public/assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            $( ".datepicker" ).datepicker({
                todayHighlight: true,
                autoclose: true,
                format: 'dd/mm/yyyy',
                //startDate: new Date()
            });
        });       
    </script>   
    <script>   
        $(".dropdown-toggle").on("click", function(){
            $(this).next(".dropdown-menu").slideToggle();
        });
        $(document).ready(function(){
            $('.dropdown-item').click(function(){
                var selector = $(this).attr('id');
                $('.'+selector).css("display", "inline-block");
                $('.code-el').hide();
                $('.'+selector).show();
                var phoneCode = $(this).attr('phone-code');
                $('#code').val(phoneCode);
                $('#extension').val('');
                $('.dropdown-menu').hide();
            });

            $('.change-mobile-no').click(function(){
                $('#contact_number').removeAttr('disabled');
                $('#contact_number').focus();
                $(this).hide();
                $('.send-otp-btn').show();
                $('.profile-update-btn').hide();
            });

        });


function getOTP(){
    $('.send-otp-btn').hide();
    var contact_number = jQuery('#contact_number').val();
    var code = jQuery('#code').val();
    var extension = jQuery('#extension').val();
    var token = "{{csrf_token()}}";
    jQuery.ajax({
        url: "{{url('/')}}/verify_contact",
        data: {contact_number:contact_number,_token:token,code:code,type:'regiser'},
        type: 'post',
        success: function (data) {
            if($.trim(data) == 'success'){
                $('.otp-fld').show();
                $('.verify-otp').show();
                $('.activate-captcha').hide();
                $('.varifi-code-send-txt').hide();
                $('.varifi-code-send-txt.alert').show();
                $('.short-mobileno').text('******'+contact_number.substr(contact_number.length-4));
                $('.confirm-acc').show();
                $('.timer-sec').show();
                timer(120);
            }else if($.trim(data) == 'OTPErr'){
                swal("Oops !", "Something went wrong", "error");
            }else{
                swal("Oops !", "Contact is already exists, Add another contact", "error");
            }

            
        }
    }); 
}

function verifyOtp(){
    var contact_number = jQuery('#contact_number').val();
    var code = jQuery('#code').val();
    var token = "{{csrf_token()}}";
    var mobile_number = code+''+contact_number;
    var OTP = '';
    var OTP = $('#verificationcode').val();

    console.log(OTP.length);
    if(OTP.length<6){
        swal("Oops !", "Enter valid OTP", "error");
    }

    if(OTP){
        jQuery.ajax({
            url: "{{url('/')}}/verify_otp",
            data: {contact_number:mobile_number,_token:token,otp_code:OTP,type:'change-contact',contact:contact_number,code:code},
            type: 'post',
            success: function (data) {
                if($.trim(data) == 'updated'){
                    $('.profile-update-btn').show();
                    $('.timer-sec').hide();
                    $('.otp-fld').hide();
                    swal("", "Mobile number successfully changed", "success");

                }else if($.trim(data) == 'INVALID'){
                    swal("Oops !", "Enter valid OTP", "error");
                }else{
                    swal("Oops !", "Something went wrong", "error");
                }
            }
        });
    }else{
        swal("Oops !", "Enter valid OTP", "error");
    } 
}


$('.change-mobno').click(function(){
        $('.otp-fld').hide();
        $('.activate-captcha').show();
        $('.verify-otp').hide();
        $('.timer-sec').hide();
        $('#contact_number').focus();
        $('.seconds-left-text').show();
        $('.dont-received-otp').hide();
        $('.otp-resend').addClass('disabled');
        $('.change-mobile-no').show();
        $('.send-otp-btn').hide();
        $('.verify-otp-btn').hide();
        $('.profile-update-btn').hide();
    });

    function resendOTP(){
        getOTP();
        $('.seconds-left-text').show();
        $('.dont-received-otp').hide();
        $('.otp-resend').addClass('disabled');
        $('.timer-sec').show();
        timer(120);
    }



let timerOn = true;
function timer(remaining) {
  var m = Math.floor(remaining / 60);
  var s = remaining % 60;
  
  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('timer').innerHTML = m + ':' + s;
  remaining -= 1;
  
  if(remaining >= 0 && timerOn) {
    setTimeout(function() {
        timer(remaining);
    }, 1000);
    return;
  }
  //alert('Timeout for otp');
  $('.seconds-left-text').hide();
  $('.dont-received-otp').show();
  $('.otp-resend').removeClass('disabled');
}

    </script>   

    @endsection
