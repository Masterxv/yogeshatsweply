@extends('front.layout.master')
@section('main_content')
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/sweply.css">
<style>
    .copyright-bx{display: none}
    .header-main{padding: 0}
</style>
<div class="breadcurmb-section">
        <div class="container">
            <div class="breadcurmb-section-head">
                Login
            </div>
            <div class="breadcurmb-li-section">
                <ul>
                    <li><a href="{{url('/')}}">Home</a> <i class="fal fa-angle-right"></i> </li>
                    <li><a class="signup-link-tag" href="javascript:void(0);">Login</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="signup-section-main">
        <div class="container">
            <div class="signup-form-section login-form-main">
                <div class="signup-form-head">
                    Login
                </div>
                <div class="signup-form-semihead">
                    Please Login to your account. 
                </div>    
                    <form method="POST"  id="login_frm" action="{{url('/')}}/process_login">            
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            @csrf
                            <div class="form-group mobile-number-section">
                                <label>Enter your mobile number</label>
                                <div style="position: relative;">
                                    <input type="hidden" class="form-control" id="code" name="code"  value="+91" />
                                    <input type="hidden" class="form-control" id="extension" name="extension"  value="" />

                                    <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="XXXXXXX" />
                                    <span class="number-flag-id">
                                        <div class="dropdown">
                                            <button class="btn btn-warning dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0;background: none;font-size: 14px">
                                                <span style="display: inline-block;vertical-align: middle;"><img src="{{url('/')}}/public/assets/images/logo/flag-arb.png" alt="" /></span> 
                                                <span class="india-dd contry-code" style="display:none;vertical-align: middle;">+91</span>
                                                <span class="arabic-dd contry-code" style="display: inline-block;vertical-align: middle;">+966</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);margin-top: -6px;margin-left: -10px;">
                                                <a class="dropdown-item" id="arabic-dd" href="javascript:void(0);">
                                                    <span style="display: inline-block;vertical-align: middle;" ><img src="{{url('/')}}/public/assets/images/logo/flag-arb.png" alt="" /></span> 
                                                    <span  style="display: inline-block;vertical-align: middle;">+966</span>
                                                </a>
                                                <a class="dropdown-item" id="india-dd" href="javascript:void(0);">
                                                    <span style="display: inline-block;vertical-align: middle;"><img src="{{url('/')}}/public/assets/images/logo/flag-arb.png" alt="" /></span> 
                                                    <span  style="display: inline-block;vertical-align: middle;">+91</span>
                                                </a>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                        <?php if($errors->first('contact_number')){ echo '<label for="contact_number" class="error err-msg">'.$errors->first("contact_number").'</label>';} ?>
                                <div class="form-group otp-fld" style="display:none;">
                                    <label>Verification Code</label>
                                    <input type="text" id="verificationcode" class="form-control" name="otp" placeholder="Enter OTP ">
                                </div>
                            </div>
                        </div>                    
                    </div>                
                    <div class="more-services-btn animation-fadeinup signup-btn">
                        <button type="button" value="Submit" class="btn-more-services activate-captcha" onclick="getOTP()"> Next</button>
                        <button type="button" value="Submit" class="btn-more-services verify-otp" onclick="verifyOtp()" style="display:none;" >Login</button>
                    </div>
                </form>

                <div class="dont-have-account-section">
                    Don't have an account? <a href="{{url('/')}}/signup">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="login-man-img">
            <img src="{{url('/')}}/public/assets/images/logo/Signup-man.png" alt="" />
        </div>
    </div>

<script type="text/javascript"> 
function getOTP(){
    var contact_number = jQuery('#contact_number').val();
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
                $('.verify-otp').show();
                $('.activate-captcha').hide();
            }else if($.trim(data) == 'OTPErr'){
                swal("Oops !", "Something went wrong", "error");
            }else{
                swal("Oops !", "Contact not exists, Signup now", "error")
                .then((value) => {
                    location.href = "{{url('/')}}/signup/";
                });
            }
        }
    }); 
}

function verifyOtp(){
    var contact_number = jQuery('#contact_number').val();
    var code = jQuery('#code').val();
    var token = "{{csrf_token()}}";
    var mobile_number = code+''+contact_number;
    var OTP = $('#verificationcode').val();
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
                $('#code').val('+966');
                $('#extension').val('05');

            }else if(selector=="india-dd"){
                $('.india-dd').show();
                $('.arabic-dd').hide();
                $('#code').val('+91');
                $('#extension').val('');
            }
            $('.dropdown-menu').hide();
        });
    });
</script>
@endsection