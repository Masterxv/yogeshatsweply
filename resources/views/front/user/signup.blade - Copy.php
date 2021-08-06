@extends('front.layout.master')
@section('main_content')
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/sweply.css">
<style>
    .copyright-bx{display: none}
    .header-main{padding: 0;box-shadow: 0 0 10px rgb(0 0 0 / 10%);}
</style>    
    <div class="signup-section-main front-otp-signup-main">
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
        <form method="POST" id="signup_frm" action="{{url('/')}}/process_register">
            @csrf
            <div class="container">
                <div class="signup-form-section">
                    <div class="signup-form-head">
                        Sign Up
                    </div>
                    <div class="signup-form-semihead">
                        Please Sign Up to your account. 
                    </div>
                    <div class="radio-btns">  
                        <div class="radio-btn">
                            <input type="radio" id="f-option" name="selector" checked value="personal">
                            <label for="f-option">Personal Business</label>
                            <div class="check"></div>
                        </div>
                        <div class="radio-btn">
                            <input type="radio" id="s-option" name="selector" value="commercial">
                            <label for="s-option">Commercial Business</label>
                            <div class="check"></div>
                        </div>
                        <DIV class="clearfix"></DIV>
                    </div>
                    <div class="personal box" style="display: block;">                    
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your first name" />
                            <?php if($errors->first('name')){ echo '<label for="name" class="error err-msg">'.$errors->first("name").'</label>';} ?>

                        </div>            
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" />
                        </div>            
                                  
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter your email address" />
                        </div>                    
                    </div>
                    <div class="commercial box" style="display:none;">                    
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" name="company_name"  placeholder="Enter your company name" />
                        </div> 
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="business_type" >
                                <option>Type1</option>
                                <option>Type1</option>
                            </select>
                            <span class="select-drop-icon"><i class="fal fa-angle-down"></i></span>
                        </div>                 
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" name="website"  placeholder="Enter website" />
                        </div>                        
                        <div class="form-group">
                            <label>Commercial Contact Number</label>
                            <input type="text" class="form-control" name="commercial_number"  placeholder="Enter commercial number" />
                        </div>                        
                        <div class="form-group">
                            <label>Vat Number</label>
                            <input type="text" class="form-control" name="vat_number"  placeholder="Enter vat number" />
                        </div>
                    </div>

                    <div class="form-group mobile-number-section">
                            <label>Mobile Number</label>
                            <div style="position: relative;">
                                <input type="hidden" class="form-control" id="code" name="code"  value="+966" />
                                <input type="text" class="form-control" placeholder="XXXXXXX" name="contact_number" id="contact_number" />
                                <span class="number-flag-id">
                                    <div class="dropdown">
                                        <button class="btn btn-warning dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0;background: none;font-size: 14px">
                                            <span style="display: inline-block;vertical-align: middle;" class="arabic-dd">
                                                <img src="{{url('/')}}/public/assets/images/logo/flag-arb.png" alt="" class="contry-flag" />
                                            </span>
                                            <span style="display: none;vertical-align: middle;" class="india-dd"><img src="{{url('/')}}/public/assets/images/logo/flag-india.png" alt="" class="contry-flag" />
                                            </span> 
                                            <span style="display: none;vertical-align: middle;" class="usa-dd"><img src="{{url('/')}}/public/assets/images/logo/flag-usa.jpg" alt="" class="contry-flag" />
                                            </span>
                                            <span class="india-dd contry-code" style="display:none;vertical-align: middle;">+91</span>
                                            <span class="usa-dd contry-code" style="display:none;vertical-align: middle;">+1</span>
                                            <span class="arabic-dd contry-code" style="display: inline-block;vertical-align: middle;">+966</span>
                                            <!--&nbsp&nbsp&nbsp 05-->
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);margin-top: 0px;margin-left: -10px;">
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
                            <?php if($errors->first('contact_number')){ echo '<label for="name" class="error err-msg">'.$errors->first("contact_number").'</label>'; }?>
                            <div class="varifi-code-send-txt">We will send you a <span>verification code by SMS</span></div>
                            <div class="varifi-code-send-txt alert alert-success"><i class="fas fa-check-circle"></i> &nbsp; Please enter code sent to ******0687</div>
                        </div>  

                    <div class="form-group otp-fld" style="display:none;">
                        <label>Verification Code</label>
                        <input type="text" id="verificationcode" class="form-control" name="otp" placeholder="Enter OTP ">
                    </div>

                    <div class="check-box">
                        <input id="filled-in-box" class="filled-in" name="terms_conditions"  checked="checked" type="checkbox">
                        <label for="filled-in-box">Please confirm that you agree to our</label>
                        <span><a href="javascript:void(0);">Privacy Policy</a> and <a href="javascript:void(0);">Terms and Conditions</a></span>
                    </div>
                    <div class="more-services-btn animation-fadeinup signup-btn">
                        <button type="button" value="Submit" class="btn-more-services activate-captcha" onclick="getOTP()"> Send OTP</button>
                        <button type="button" value="Submit" class="btn-more-services verify-otp" onclick="verifyOtp()" style="display:none;" > Verify OTP</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- <div class="login-man-img">
            <img src="{{url('/')}}/public/assets/images/logo/Signup-man.png" alt="" />
        </div> -->
    </div>
     <script type="text/javascript">
        $(document).ready(function(){
            $('input[type="radio"]').click(function(){
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue).show();
                if(inputValue=="personal"){
                    $('.commercial').hide();
                }
            });
        });
    </script>

<script type="text/javascript"> 
function getOTP(){
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
            }else if($.trim(data) == 'OTPErr'){
                swal("Oops !", "Something went wrong", "error");
            }else{
                swal("Oops !", "Contact is already exists, Login now", "error")
                    .then((value) => {
                        location.href = "{{url('/')}}/login/";
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
                    jQuery('#signup_frm').submit();
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
$(".dropdown-toggle").on("click", function(){
    $(".dropdown-menu").slideToggle();
});
</script>

@endsection