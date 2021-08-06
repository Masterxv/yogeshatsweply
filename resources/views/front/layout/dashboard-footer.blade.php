   <div class="loader-section-main" >        
        <img src="{{url('/')}}/public/assets/images/logo/loader.gif" alt=""/>
        <!-- <div class="lds-default">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div> -->
    </div>

    <!--Share Button 3 Start Here-->
    <div id="draggable" >
        <div class="theme-color-change-main" >
            <div class='float-circle' id='twitter-color' rel="twitter-color"   onclick="setSessionAttribute('THEMEUI','twitter-color')" ></div>
            <div class='float-circle' id='youtube-color'   rel="youtube-color" onclick="setSessionAttribute('THEMEUI','youtube-color')"></div>
            <div class='float-circle' id='snapchat-color'  rel="snapchat-color" onclick="setSessionAttribute('THEMEUI','snapchat-color')" ></div>
            <div class='main-button share'>
                <div class='fa fa-cog fa-2x'></div>
            </div>
        </div>
    </div>
    <!--Share Button 3 End Here-->

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/shepherd-theme-default.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/plugins/tour/tour.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/plugins/forms/wizard.css">

    <!-- <script src="{{url('/')}}/public/assets/js/core/app-menu.js"></script> -->
    <script src="{{url('/')}}/public/assets/js/core/app.js"></script>

    <script>        
        $(".form-control-position").on("click", function(){                
            $(this).parent(".search-bar").toggleClass("search-open");
        });    
        function setBusinessDashboard(businessID){
            var token    = "{{csrf_token()}}";
            $.ajax({
                url: "{{url('/')}}/set_business_dashboard",
                type: 'post',
                data: {businessID: businessID,_token:token},
                success: function(data){
                   console.log('Done');
                   //location.href="{{url('/')}}/user/dashboard";
                   location.reload();
                }
             });

        }  
        function setSessionAttribute(attribute,sessionValue){
            var token    = "{{csrf_token()}}";
            $.ajax({
                url: "{{url('/')}}/set_session_attribute",
                type: 'post',
                data: {attribute:attribute,sessionValue:sessionValue,_token:token},
                success: function(data){
                   //location.reload();
                }
            });
        } 
        function showLoader(){
            $('.loader-section-main').show();
        }  
        function hideLoader(){
            $('.loader-section-main').hide();
        } 

        //document.addEventListener("DOMContentLoaded", showLoader());

        function scrollToTop() {
          //window.scrollTo({top: 0, behavior: 'smooth'});
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function(){ 
                $('.loader-section-main').fadeOut('slow');
             }, 500);
        });
    </script>
  

    <script>
        $('.share').on('click', function(e){
            $(".float-circle").removeClass("no-animation");
            $(".float-circle").toggleClass("open");
        });
        $('.float-circle').on('click', function(e){            
            $(".float-circle").removeClass("open");
        });        
        $('.float-circle').click(function(){
            var relClass = $(this).attr('rel');
            $('body').removeClass('twitter-color');
            $('body').removeClass('youtube-color');
            $('body').removeClass('snapchat-color');
            $('body').addClass(relClass);
            //setTimeout(function(){ location.reload }, 3000);
        });
          /*$(function() {  
                $( "#draggable" ).draggable({
                     containment: "parent"  
                });  
          }); */
    </script>
<!--     <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 -->

</body>
<!-- END: Body-->
</html>