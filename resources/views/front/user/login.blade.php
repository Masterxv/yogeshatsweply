@extends('front.layout.master')
@section('main_content')
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/sweply.css">
<style>
    .copyright-bx{display: none}
    .header-main{padding: 0;box-shadow: 0 0 10px rgb(0 0 0 / 10%);}
</style>    
    <div class="signup-section-main front-otp-login-main">
        <div class="login-bg-pink">
            <img src="{{url('/')}}/public/assets/images/logo/login-bg/login-bg-pink.png" alt="" />
        </div>
        <div class="login-bg-blue">
            <img src="{{url('/')}}/public/assets/images/logo/login-bg/login-bg-blue.png" alt="" />
        </div>
        <div class="login-bg-yellow-small">
            <img src="{{url('/')}}/public/assets/images/logo/login-bg/login-bg-yellow-small.png" alt="" />
        </div>
        <div class="login-bg-yellow-big">
            <img src="{{url('/')}}/public/assets/images/logo/login-bg/login-bg-yellow-big.png" alt="" />
        </div>
        <div class="container" style="height: 100%;">
            <div class="signup-form-section login-form-main otp-step-one">                
                <div class="signup-form-head">
                    <img src="{{url('/')}}/public/assets/images/logo.png" alt="" />
                </div>
                <div class="signup-form-semihead">
                    Please Login to your account. 
                </div>    
                    <form method="POST"  id="login_frm" action="{{url('/')}}/process_login">            
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            @csrf
                            <div class="form-group mobile-number-section">
                                <label>Mobile number</label>
                                <div style="position: relative;">
                                    <input type="hidden" class="form-control" id="code" name="code"  value="+966" />
                                    <input type="hidden" class="form-control" id="extension" name="extension"  value="" />

                                    <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="XXXXXXXXXX" />
                                    <span class="number-flag-id">
                                        <div class="dropdown">
                                            <button class="btn btn-warning dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0;background: none;font-size: 14px">
                                                <span style="display: inline-block;vertical-align: middle;" class="arabic-dd"><img src="{{url('/')}}/public/assets/images/logo/flag-arb.png" alt="" class="contry-flag" />
                                                </span>

                                                <span style="display: none;vertical-align: middle;" class="india-dd"><img src="{{url('/')}}/public/assets/images/logo/flag-india.png" alt="" class="contry-flag" />
                                                </span>

                                                <span style="display: none;vertical-align: middle;" class="usa-dd"><img src="{{url('/')}}/public/assets/images/logo/flag-usa.jpg" alt="" class="contry-flag" />
                                                </span>

                                                <span class="india-dd contry-code" style="display:none;vertical-align: middle;">+91</span>
                                                <span class="usa-dd contry-code" style="display:none;vertical-align: middle;">+1</span>
                                                <span class="arabic-dd contry-code" style="display: inline-block;vertical-align: middle;">+966</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);margin-left: -10px;">
                                                <a class="dropdown-item" id="arabic-dd" href="javascript:void(0);">
                                                    <span style="display: inline-block;vertical-align: middle;" ><img src="{{url('/')}}/public/assets/images/logo/flag-arb.png" alt="" /></span> 
                                                    <span  style="display: inline-block;vertical-align: middle;">+966</span>
                                                </a>
                                                <a class="dropdown-item" id="india-dd" href="javascript:void(0);">
                                                    <span style="display: inline-block;vertical-align: middle;"><img src="{{url('/')}}/public/assets/images/logo/flag-india.png" alt="" /></span> 
                                                    <span  style="display: inline-block;vertical-align: middle;">+91</span>
                                                </a>
                                                <a class="dropdown-item" id="usa-dd" href="javascript:void(0);">
                                                    <span style="display: inline-block;vertical-align: middle;"><img src="{{url('/')}}/public/assets/images/logo/flag-usa.jpg" alt="" /></span> 
                                                    <span  style="display: inline-block;vertical-align: middle;">+1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <?php if($errors->first('contact_number')){ echo '<label for="contact_number" class="error err-msg">'.$errors->first("contact_number").'</label>';} ?>
                                <div class="form-group otp-fld" style="display:none;">
                                    <label>Send Verification Code</label>
                                    <input type="text" id="verificationcode" class="form-control" name="otp" placeholder="Enter OTP ">
                                </div>
                            </div>
                        </div>                    
                    </div>                
                    <div class="more-services-btn animation-fadeinup signup-btn">
                        <button type="button" value="Submit" class="btn-more-services activate-captcha" onclick="getOTP()"> Submit </button>
                        <button type="button" value="Submit" class="btn-more-services verify-otp" onclick="verifyOtp()" style="display:none;" >Login</button>
                    </div>
                </form>

                <div class="dont-have-account-section">
                    Don't have an account? <a href="{{url('/')}}/signup">Sign Up</a>
                </div>
            </div>
            <div class="signup-form-section login-form-main otp-screen-section-main" style="display: none;">
                <!-- <div class="signup-form-head">
                    2 Step Verification
                </div> -->
                <div class="otp-send-img">
                    <img src="{{url('/')}}/public/assets/images/logo/smartphone-message.png" alt="" />
                </div>
                <div class="signup-form-semihead">
                    Enter Your verification code
                </div>    
                <div class="otp-send-txt-section">
                    A text message with the varification code was send to <span class="short-mobileno">******7766</span>
                </div>
                <form method="POST"  id="login_frm" action="{{url('/')}}/process_login">            
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            @csrf
                            <div class="form-group mobile-number-section">                                
                                <div class="otp-input-section" style="position: relative;">
                                    <input type="text" class="form-control otp-input" index="1" maxlength="1" />
                                    <input type="text" class="form-control otp-input" index="2" maxlength="1" />
                                    <input type="text" class="form-control otp-input" index="3" maxlength="1" />
                                    <input type="text" class="form-control otp-input" index="4" maxlength="1" />
                                    <input type="text" class="form-control otp-input" index="5" maxlength="1" />
                                    <input type="text" class="form-control otp-input" index="6" maxlength="1" />
                                </div>
                                <!-- <?php //if($errors->first('contact_number')){ echo '<label for="contact_number" class="error err-msg">'.$errors->first("contact_number").'</label>';} ?>
                                <div class="form-group otp-fld" style="display:none;">
                                    <label>Send Verification Code</label>
                                    <input type="text" id="verificationcode" class="form-control" name="otp" placeholder="Enter OTP ">
                                </div> -->
                            </div>
                        </div>                    
                    </div>                
                    <div class="more-services-btn animation-fadeinup signup-btn">
                        <!-- <button type="button" value="Submit" class="btn-more-services activate-captcha" onclick="getOTP()"> Send Verification Code </button> -->
                        <button type="button" value="Submit" class="btn-more-services verify-otp" onclick="verifyOtp()">Verify</button>
                    </div>
                </form>
                <div class="dont-have-account-section">                    
                    <div class="timer-sec" style="display:none;">
                        <span class="dont-received-otp">Don't receive the OTP? </span>
                        <span class="seconds-left-text"><span id="timer"></span> Seconds left to</span> 
                        <a href="javascript:void(0);" onclick="resendOTP()" class="otp-resend disabled">Resend OTP</a> or <a href="javascript:void(0);" class="otp-resend change-mobno disabled">Change mobile number</a>
                    </div> 
                </div>
            </div>
        </div>
        <!-- <div class="login-man-img">
            <img src="{{url('/')}}/public/assets/images/logo/Signup-man.png" alt="" />
        </div> -->
    </div>
<script type="text/javascript"> 
function getOTP(){
    var contact_number = jQuery('#contact_number').val();
    if(jQuery('#contact_number').val()){
        var code = jQuery('#code').val();
        var extension = jQuery('#extension').val();
        var token = "{{csrf_token()}}";
        jQuery.ajax({
            url: "{{url('/')}}/verify_contact",
            data: {contact_number:contact_number,_token:token,code:code},
            type: 'post',
            success: function (data) {
                if($.trim(data) == 'success'){
                    $('.otp-fld').show();
                    $('.otp-step-one').hide();                
                    $('.otp-screen-section-main').show();
                    $('.verify-otp').show();
                    $('.activate-captcha').hide();
                    $('.short-mobileno').text('******'+contact_number.substr(contact_number.length-4));
                }else if($.trim(data) == 'OTPErr'){
                    swal("Oops !", "Something went wrong", "error");
                }else{
                    swal("Oops !", "Contact not exists, Signup now", "error")
                    .then((value) => {
                        location.href = "{{url('/')}}/signup/";
                    });
                }

                $('.timer-sec').show();
                timer(120);
            }
        }); 
    }else{
        swal("Oops !", "Enter correct mobile number", "error");
    }
}

function verifyOtp(){
    var contact_number = jQuery('#contact_number').val();
    var code = jQuery('#code').val();
    var token = "{{csrf_token()}}";
    var mobile_number = code+''+contact_number;
    var OTP = '';
    $('.otp-input').each(function(){
        if($(this).val()){
            OTP = OTP+''+$(this).val();
        }
    });
    console.log(OTP.length);
    if(OTP.length<6){
        swal("Oops !", "Enter valid OTP", "error");
    }

    if(OTP){
        jQuery.ajax({
            url: "{{url('/')}}/verify_otp",
            data: {contact_number:mobile_number,_token:token,otp_code:OTP},
            type: 'post',
            success: function (data) {
                if($.trim(data) == 'success'){
                    jQuery('#login_frm').submit();
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

</script>

<script>
    $(".dropdown-toggle").on("click", function(){
        $(".dropdown-menu").slideToggle();
    });
    $(document).ready(function(){
        $('.dropdown-item').click(function(){
            var selector = $(this).attr('id');
            $('.'+selector).css("display", "inline-block");
            if(selector=="arabic-dd"){
                $('.india-dd').hide();
                $('.arabic-dd').show();
                $('.usa-dd').hide();
                $('#code').val('+966');
                $('#extension').val('05');
            }else if(selector=="india-dd"){
                $('.india-dd').show();
                $('.arabic-dd').hide();
                $('.usa-dd').hide();
                $('#code').val('+91');
                $('#extension').val('');
            }else if(selector=="usa-dd"){
                $('.usa-dd').show();
                $('.arabic-dd').hide();
                $('.india-dd').hide();
                $('#code').val('+1');
                $('#extension').val('');
            }
            $('.dropdown-menu').hide();
        });
    });
</script>

<script>
    $('.otp-input,#contact_number').keypress(function (e) {    
        var charCode = (e.which) ? e.which : event.keyCode    
        if (String.fromCharCode(charCode).match(/[^0-9]/g))    
            return false;                        
    });    
    $('.otp-input').on("keyup paste",function(){
        if($(this).val()){
            var index = $(this).attr('index');
            var nextIndex = parseInt(index)+parseInt(1);
            if(nextIndex<7){
                $('.otp-input[index="'+nextIndex+'"]').focus();
            }
        }
    });


    $('.change-mobno').click(function(){
        $('.otp-step-one').show();
        $('.otp-screen-section-main').hide();
        $('.otp-fld').hide();
        $('.activate-captcha').show();
        $('.verify-otp').hide();
        $('.timer-sec').hide();
        $('#contact_number').focus();
        $('.seconds-left-text').show();
        $('.dont-received-otp').hide();
        $('.otp-resend').addClass('disabled');
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