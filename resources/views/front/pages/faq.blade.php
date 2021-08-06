@extends('front.layout.dashboard-master')    
@section('main_content')
   <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section id="faq-search">                    
                    <div class="card faq-bg">
                        <div class="card-content">
                            <div class="card-body p-sm-4 p-2">
                                <h1 class="">Have Any Questions?</h1>
                                <p class="card-text mb-2">
                                    Bonbon sesame snaps lemon drops marshmallow ice cream carrot cake croissant wafer.
                                </p>
                                <form>
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <input type="text" class="form-control form-control-lg" id="searchbar" placeholder="Search">
                                        <div class="form-control-position">
                                            <i class="feather icon-search px-1"></i>
                                        </div>
                                    </fieldset>
                                </form>                                        
                                <div class="card bg-transparent border-0 shadow-none collapse-icon accordion-icon-rotate" style="margin-top: 30px">
                                    <div class="card-body p-0">
                                        <div class="accordion search-content-info" id="accordionExample">
                                            <div class="collapse-margin search-content mt-0">
                                                <div class="card-header" id="headingOne" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    <span class="lead collapse-title">
                                                        What does royalty free mean?
                                                    </span>
                                                </div>
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Royalty free means you just need to pay for rights to use the item once per end product. You don't need to pay additional or ongoing fees for each person who sees or uses it. Please note that there may be some limits placed on uses under the different license types available on the marketplaces, such as our Photo and Music Licenses.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse-margin">
                                                <div class="card-header" id="headingTwo" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <span class="lead collapse-title collapsed">
                                                        What do you mean by item and end product?
                                                    </span>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        The item is what you purchase from Envato Market. The end product is what you build with that item. Example: The item is a business card template; the end product is the finalized business card. The item is a button graphic; the end product is an app using the button graphic in the app's interface.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse-margin search-content">
                                                <div class="card-header" id="headingThree" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="lead collapse-title collapsed">
                                                        Am I allowed to modify the item that I purchased?
                                                    </span>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Yes. You can customize our items to fit the needs of your end product. Example: You could change the colors, text, and layout of a flyer template or convert an HTML template into a WordPress theme for a single client.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse-margin search-content">
                                                <div class="card-header" id="headingFour" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    <span class="lead collapse-title collapsed">
                                                        What does non-exclusive mean?
                                                    </span>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Non-exclusive means that you are not the only person with access to the item. Others will also be licensing and using the same item.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse-margin search-content">
                                                <div class="card-header" id="headingFive" role="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    <span class="lead collapse-title collapsed">
                                                        Is the Regular License the same thing as an editorial license?
                                                    </span>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        No, our Regular License is for a free end product (whether or not the item is used in the end product in an editorial way). And our Extended License is for an end product that's sold (whether or not the item is used in the end product in an editorial way). If you want to use an item in an editorial way in your end product, choose the Regular License if your end product is distributed for free, and choose the Extended License if your end product is sold to the end customer.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse-margin search-content">
                                                <div class="card-header" id="headingSix" role="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    <span class="lead collapse-title collapsed">
                                                        Which license do I need for an end product that is only accessible to paying users?
                                                    </span>
                                                </div>
                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        If the end users need to pay to see the end product, you need an Extended License. There can be more than one end user as long as there is only one end product. Example: A website that requires money before you can access the content.
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>                                        
                            </div>
                        </div>
                    </div>                    
                </section>               

            </div>
        </div>
    </div>
    <!-- END: Content-->
<!-- BEGIN: Vendor JS-->
<script src="{{url('/')}}/public/assets/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
@endsection
