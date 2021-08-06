
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
    <script src="{{url('/')}}/public/assets/js/core/app-menu.js"></script>
    <script src="{{url('/')}}/public/assets/js/core/app.js"></script>
    <script type="text/javascript" >
        $(".form-control-position").on("click", function(){                
            $(this).parent(".search-bar").toggleClass("search-open");
        });     
    
    $("document").ready(function(){
        setTimeout(function(){
           $("div.alert").remove();
        }, 3000 ); // 5 secs

    });
    function action_perform(recordID,status){
			
        swal({
            title: "Confirm",
            text: "Do you really want to "+ status +" this ??",
            icon: "warning",
            buttons: [
            'Cancle',
            'Confirm'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
			  var url = '';
			  if(status == 'active'){
				  url = window.location.href+'/active/'+recordID;
			  }
			  if(status == 'inactive'){
				 url = window.location.href+'/inactive/'+recordID;
			  }
			  
           		document.location.href = url;
          } else {
            
          }
        });
			
    }
    </script>    
</body>
<!-- END: Body-->

</html>