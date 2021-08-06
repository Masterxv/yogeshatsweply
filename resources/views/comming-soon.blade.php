<!DOCTYPE html>
<html>
<head>
    <title>Comming Soon - Sweply</title>
    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/comingsoon/fontawesome-v5.7.2-pro.min.css" />
    <link href="{{url('/')}}/public/assets/css/comingsoon/icofont.css" rel=stylesheet>
    <link href="{{url('/')}}/public/assets/css/comingsoon/bootstrap.min.css" rel=stylesheet>
    <link href="{{url('/')}}/public/assets/css/comingsoon/comingsoon-style.css" rel=stylesheet>
    <link href="{{url('/')}}/public/assets/css/comingsoon/responsive.css" rel=stylesheet>
    <!--[if lt IE 9 ]><script src=js/modernizr-3.5.0.min.js></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/comingsoon/jquery.countdownTimer.css" />    
</head>
<body class="bg-img body-bg">
<div class=preloader-wrap>
    <div class=preloader><span></span> <span></span> <span></span> <span></span></div>
</div>
<div class="bg-img color-white main-container">
    <header class="xs-no-positioning fixed fixed-top main-header">
        <div class=container-fluid>
            <div class="clearfix row">
                <div class="pull-right clearfix col-xs-6 exs-full-width">
                    <div class="pull-right header-right">
                        <ul class="list-inline social-icons">
                            <li><a href=https://www.facebook.com/sweplyhq target=_blank><i class="fab fa-facebook-f"></i></a>
                            <li><a href=https://twitter.com/SweplyP target=_blank><i class="fab fa-twitter"></i></a>
                            <li><a href=# target=_blank><i class="fab fa-instagram"></i></a>
                            <li><a href=https://www.linkedin.com/company/sweply target=_blank><i class="fab fa-linkedin-in"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 exs-full-width">
                    <!-- <div class=logo><a href=index.html><img alt=Logo src=images/logo.png> </a> </div>  -->
                </div> 
            </div> 
        </div> 
    </header> 
    <div class="xs-no-positioning fixed fixed-middle main-body">
        <div class=container-fluid>
            <div class=row>
                <div class=col-md-12>
                    <div class=tab-container>
                        <ul class="pull-left rect-1 tab-controller tab-style-one xs-no-positioning" role=tablist>
                            <li class=active role=presentation><a href=#home data-toggle=tab aria-controls=home role=tab>Home</a>
                            <li role=presentation><a href=#contact data-toggle=tab aria-controls=contact role=tab>Contact</a>
                            <li role=presentation><a href=#about data-toggle=tab aria-controls=about role=tab>About</a>
                        </ul>
                        <div class=tab-content>
                            <div class="fade tab-pane text-center active home-tab in" id=home role=tabpanel>
                                <span style="display: none" id="given_date"></span>
                                <div class="logo" style="margin: 0 auto 30px;"><a href=index.html><img alt=Logo src="{{url('/')}}/public/assets/images/logo-white.png"></a></div>
                                <div class="time-day-section-main">
                                    <div class="time-day-section">
                                        <div class="day-head-seciton">
                                            Day
                                        </div>
                                        <div id="showmyday" class="day-count-section">
                                            15
                                        </div>
                                    </div>
                                    <div class="time-day-section">
                                        <div class="day-head-seciton">
                                            Hours
                                        </div>
                                        <div id="showmyhours" class="day-count-section">
                                            10
                                        </div>
                                    </div>
                                    <div class="time-day-section">
                                        <div class="day-head-seciton">
                                            Min
                                        </div>
                                        <div id="showmymins" class="day-count-section">    
                                            45
                                        </div>
                                    </div>
                                    <div class="time-day-section">
                                        <div class="day-head-seciton">
                                            Sec
                                        </div>
                                        <div  id="showmysecs" class="day-count-section">
                                            35
                                        </div>
                                    </div>
                                </div>      
                                <div class=tab-heading>
                                    <h1 class=primary-title>We are Coming Soon</h1>
                                    <p class=text-light>Our exciting new website is coming soon! Check back later...
                                </div>
                                <div class=tab-body>
                                    <div class="countdown-timer padding-big"><input name=count-down-date id=count-down-date type=hidden value="31 Dec, 2019 12:00:00">
                                        <h2 class="expired-text hidden">Welcome to Our Website</h2>
                                        <ul class="list-inline count-down-list" id=countdown-boxes>
                                            <li class=gray-bg-1 id=years><span class=years></span><span>Years</span>
                                            <li class=gray-bg-1 id=months><span class=months></span><span>Months</span>
                                            <li class=gray-bg-1 id=days><span class=days></span><span>Days</span>
                                            <li class=gray-bg-1 id=hours><span class=hours></span><span>Hours</span>
                                            <li class=gray-bg-1 id=minutes><span class=minutes></span><span>Minutes</span>
                                            <li class=gray-bg-1 id=seconds><span class=seconds></span><span>Seconds</span>
                                        </ul>
                                    </div>
                                    <div class=subscribe-form>
                                        <h4>Subscrive to our newsletter</h4>
                                        <form action=index.html class=form-inline><input name=email class="form-control btn-rounded" placeholder="Email Address" type=email> <button class="btn btn-cyan btn-round" type=submit>Submit</button></form>
                                    </div>
                                </div>
                            </div>
                            <div class="fade tab-pane text-center contact-tab" id=contact role=tabpanel>
                                <div class=tab-heading>
                                    <h1 class=primary-title>Contact Information</h1>
                                    <p class=text-light>Our exciting new website is coming soon! Check back later...
                                </div>
                                <div class=tab-body>
                                    <div class="contact-form pt-70">
                                        <form action=index.html class=clearfix id=contact-form>
                                            <div class=success>Your message has been sent successfully.</div>
                                            <div class=error>E-mail must be valid and message must be longer than 1 character.</div>
                                            <div class="pull-left field-half-width form-field"><input name=name class=form-control placeholder="Full Name" id=name> <i class="fas fa-user"></i></div>
                                            <div class="pull-right form-field field-half-width"><input name=email class=form-control placeholder="Email Address" id=email_address type=email> <i class="fas fa-envelope"></i></div>
                                            <div class="pull-right form-field field-full-width"><textarea class=form-control id=message name=message placeholder=Message></textarea></div><button class="btn btn-cyan btn-big" type=submit id=submit name=submit>Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="fade tab-pane about-tab" id=about role=tabpanel>
                                <div class=tab-heading>
                                    <h2 class=primary-title>About Us</h2>
                                </div>
                                <div class=tab-body>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.<p>And more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p><a href=# data-toggle=modal data-target=#aboutus class=readmore-link>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fade modal" id=aboutus role=dialog aria-labelledby=aboutusLabel tabindex=-1>
    <div class=modal-dialog role=document>
        <div class=modal-content>
            <div class=modal-header><button class=close type=button data-dismiss=modal aria-label=Close><span aria-hidden=true>×</span></button>
                <h3 class=text-center id=aboutusLabel>About Us</h3>
            </div>
            <div class=modal-body>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum similique odio nam perferendis ab, tempore cupiditate maiores quia, sunt rem beatae, ipsum at error! Labore laboriosam rerum odit et ipsum optio explicabo unde. Quod, rem quam totam itaque eius dolorem repudiandae porro eligendi illo quaerat sequi vitae qui. Quibusdam libero a hic odio, aperiam repellat facilis officia, quia maxime minus. Explicabo sequi laudantium qui animi fugiat nihil recusandae, eum sed esse doloremque modi quasi expedita voluptate perspiciatis nulla voluptatem nobis accusamus dolorem libero cumque repellat quam, odit nisi rerum. Quisquam, iure officiis minus quibusdam aut alias accusamus sed incidunt voluptate nisi dolorem, aliquam repellat adipisci vero at<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum nulla est consectetur sequi, quasi aut, soluta libero dolorum ipsam, facilis vel labore aperiam dolorem consequuntur ducimus dolores, perferendis debitis.<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa impedit, odit numquam perferendis eaque magnam deserunt illo repellendus excepturi, officiis id consequuntur hic voluptatem inventore maxime iure debitis, pariatur porro recusandae. Eaque totam neque sequi beatae, ut accusantium amet eum incidunt nesciunt?<p>Repellat dignissimos sit sequi ratione, possimus. Veritatis ab consequatur praesentium quasi. Illum eos dolorum sapiente cum beatae animi, et accusamus laboriosam repudiandae quidem culpa odit laudantium, reiciendis hic commodi cupiditate magnam aliquam deleniti modi libero! Quisquam possimus maxime maiores perspiciatis dolorum neque modi earum dolores! Ad nobis odit repellat obcaecati, qui, eos, necessitatibus, a est inventore doloremque itaque!
            </div>
            <div class=modal-footer>
                <ul class="list-inline social-icons pull-left">
                    <li><a href=# target=_blank><i class="fab fa-facebook-f"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-twitter"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-pinterest-p"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-dribbble"></i></a>
                </ul><button class="btn btn-cyan" type=button data-dismiss=modal>Close</button>
            </div>
        </div>
    </div>
</div>
<div class="fade modal" id=helpme role=dialog aria-labelledby=helpmeLabel tabindex=-1>
    <div class=modal-dialog role=document>
        <div class=modal-content>
            <div class=modal-header><button class=close type=button data-dismiss=modal aria-label=Close><span aria-hidden=true>×</span></button>
                <h3 class=text-center id=helpmeLabel>Help</h3>
            </div>
            <div class=modal-body>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum similique odio nam perferendis ab, tempore cupiditate maiores quia, sunt rem beatae, ipsum at error! Labore laboriosam rerum odit et ipsum optio explicabo unde. Quod, rem quam totam itaque eius dolorem repudiandae porro eligendi illo quaerat sequi vitae qui. Quibusdam libero a hic odio, aperiam repellat facilis officia, quia maxime minus. Explicabo sequi laudantium qui animi fugiat nihil recusandae, eum sed esse doloremque modi quasi expedita voluptate perspiciatis nulla voluptatem nobis accusamus dolorem libero cumque repellat quam, odit nisi rerum. Quisquam, iure officiis minus quibusdam aut alias accusamus sed incidunt voluptate nisi dolorem, aliquam repellat adipisci vero at<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa impedit, odit numquam perferendis eaque magnam deserunt illo repellendus excepturi, officiis id consequuntur hic voluptatem inventore maxime iure debitis, pariatur porro recusandae. Eaque totam neque sequi beatae, ut accusantium amet eum incidunt nesciunt? Repellat dignissimos sit sequi ratione, possimus. Veritatis ab consequatur praesentium quasi. Illum eos dolorum sapiente cum beatae animi, et accusamus laboriosam repudiandae quidem culpa odit laudantium, reiciendis hic commodi cupiditate magnam aliquam deleniti modi libero! Quisquam possimus maxime maiores perspiciatis dolorum neque modi earum dolores! Ad nobis odit repellat obcaecati, qui, eos, necessitatibus, a est inventore doloremque itaque!
            </div>
            <div class=modal-footer>
                <ul class="list-inline social-icons pull-left">
                    <li><a href=# target=_blank><i class="fab fa-facebook-f"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-twitter"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-pinterest-p"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-dribbble"></i></a>
                </ul><button class="btn btn-cyan" type=button data-dismiss=modal>Close</button>
            </div>
        </div>
    </div>
</div>
<div class="fade modal" id=privacy role=dialog aria-labelledby=privacyLabel tabindex=-1>
    <div class=modal-dialog role=document>
        <div class=modal-content>
            <div class=modal-header><button class=close type=button data-dismiss=modal aria-label=Close><span aria-hidden=true>×</span></button>
                <h3 class=text-center id=privacyLabel>Privacy</h3>
            </div>
            <div class=modal-body>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum similique odio nam perferendis ab, tempore cupiditate maiores quia, sunt rem beatae, ipsum at error! Labore laboriosam rerum odit et ipsum optio explicabo unde. Quod, rem quam totam itaque eius dolorem repudiandae porro eligendi illo quaerat sequi vitae qui. Quibusdam libero a hic odio, aperiam repellat facilis officia, quia maxime minus. Explicabo sequi laudantium qui animi fugiat nihil recusandae, eum sed esse doloremque modi quasi expedita voluptate perspiciatis nulla voluptatem nobis accusamus dolorem libero cumque repellat quam, odit nisi rerum. Quisquam, iure officiis minus quibusdam aut alias accusamus sed incidunt voluptate nisi dolorem, aliquam repellat adipisci vero at<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa impedit, odit numquam perferendis eaque magnam deserunt illo repellendus excepturi, officiis id consequuntur hic voluptatem inventore maxime iure debitis, pariatur porro recusandae. Eaque totam neque sequi beatae, ut accusantium amet eum incidunt nesciunt? Repellat dignissimos sit sequi ratione, possimus. Veritatis ab consequatur praesentium quasi. Illum eos dolorum sapiente cum beatae animi, et accusamus laboriosam repudiandae quidem culpa odit laudantium, reiciendis hic commodi cupiditate magnam aliquam deleniti modi libero! Quisquam possimus maxime maiores perspiciatis dolorum neque modi earum dolores! Ad nobis odit repellat obcaecati, qui, eos, necessitatibus, a est inventore doloremque itaque!
            </div>
            <div class=modal-footer>
                <ul class="list-inline social-icons pull-left">
                    <li><a href=# target=_blank><i class="fab fa-facebook-f"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-twitter"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-pinterest-p"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-dribbble"></i></a>
                </ul><button class="btn btn-cyan" type=button data-dismiss=modal>Close</button>
            </div>
        </div>
    </div>
</div>
<div class="fade modal" id=contactus role=dialog aria-labelledby=contactusLabel tabindex=-1>
    <div class=modal-dialog role=document>
        <div class=modal-content>
            <div class=modal-header><button class=close type=button data-dismiss=modal aria-label=Close><span aria-hidden=true>×</span></button>
                <h3 class=text-center id=contactusLabel>Contact Us</h3>
            </div>
            <div class=modal-body>
                <div class="text-center contact-form padding-big">
                    <form action=index.html class=clearfix id=popup-contact-form>
                        <div class=success>Your message has been sent successfully.</div>
                        <div class=error>E-mail must be valid and message must be longer than 1 character.</div>
                        <div class="pull-left field-half-width form-field"><input name=name class=form-control placeholder="Full Name" id=popup_name> <i class="icofont icofont-user"></i></div>
                        <div class="pull-right form-field field-half-width"><input name=email class=form-control placeholder="Email Address" id=popup_email_address type=email> <i class="icofont icofont-envelope"></i></div>
                        <div class="pull-right form-field field-full-width"><textarea class=form-control id=popup_message name=message placeholder=Message></textarea></div><button class="btn btn-cyan btn-big" type=submit id=popup_submit name=submit>Send</button>
                    </form>
                </div>
            </div>
            <div class=modal-footer>
                <ul class="list-inline social-icons pull-left">
                    <li><a href=# target=_blank><i class="fab fa-facebook-f"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-twitter"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-pinterest-p"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-dribbble"></i></a>
                </ul><button class="btn btn-cyan" type=button data-dismiss=modal>Close</button>
            </div>
        </div>
    </div>
</div>
<div class="fade modal" id=faq role=dialog aria-labelledby=faqLabel tabindex=-1>
    <div class=modal-dialog role=document>
        <div class=modal-content>
            <div class=modal-header><button class=close type=button data-dismiss=modal aria-label=Close><span aria-hidden=true>×</span></button>
                <h3 class=text-center id=faqLabel>Faq</h3>
            </div>
            <div class=modal-body>
                <div class=panel-group id=faqAccordion>
                    <div class="panel panel-default">
                        <div class="accordion-toggle collapsed panel-heading question-toggle" data-parent=#faqAccordion data-target=#q-0 data-toggle=collapse>
                            <h4 class=panel-title><a href=# class=ing>Q: What is Lorem Ipsum?</a></h4>
                        </div>
                        <div class="collapse panel-collapse in" id=q-0>
                            <div class=panel-body>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="accordion-toggle collapsed panel-heading question-toggle" data-parent=#faqAccordion data-target=#q-1 data-toggle=collapse>
                            <h4 class=panel-title><a href=# class=ing>Q: Why do we use it?</a></h4>
                        </div>
                        <div class="collapse panel-collapse" id=q-1>
                            <div class=panel-body>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="accordion-toggle collapsed panel-heading question-toggle" data-parent=#faqAccordion data-target=#q-3 data-toggle=collapse>
                            <h4 class=panel-title><a href=# class=ing>Q: Where does it come from?</a></h4>
                        </div>
                        <div class="collapse panel-collapse" id=q-3>
                            <div class=panel-body>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="accordion-toggle collapsed panel-heading question-toggle" data-parent=#faqAccordion data-target=#q-4 data-toggle=collapse>
                            <h4 class=panel-title><a href=# class=ing>Q: Where does it come from?</a></h4>
                        </div>
                        <div class="collapse panel-collapse" id=q-4>
                            <div class=panel-body>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=modal-footer>
                <ul class="list-inline social-icons pull-left">
                    <li><a href=# target=_blank><i class="fab fa-facebook-f"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-twitter"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-pinterest-p"></i></a>
                    <li><a href=# target=_blank><i class="fab fa-dribbble"></i></a>
                </ul><button class="btn btn-cyan" type=button data-dismiss=modal>Close</button>
            </div>
        </div>
    </div>
</div>
<!--[if lt IE 8]><script src=js/modernizr-3.5.0.min.js></script><![endif]-->
<script src="{{url('/')}}/public/assets/js/comingsoon/jquery-3.2.1.min.js"> </script> 
<script src="{{url('/')}}/public/assets/js/comingsoon/bootstrap.min.js"> </script> 
<script src="{{url('/')}}/public/assets/js/comingsoon/coming-soon-scripts.js"> </script>
<script type="text/javascript" src="{{url('/')}}/public/assets/js/comingsoon/jquery.countdownTimer.js"></script>
<script>
    $(function(){
        $('#given_date').countdowntimer({
            startDate : "2020/03/01 00:00:00",
            dateAndTime : "2020/03/17 00:00:00",
            size : "lg"
        });            
        window.setInterval(function(){
            var k1=$('#given_date').html();                
            var getmesplit = k1.split(":");                 
            $('#showmyday').html(getmesplit[0]);
            $('#showmyhours').html(getmesplit[1]);
            $('#showmymins').html(getmesplit[2]);
            $('#showmysecs').html(getmesplit[3]);                 
        }, 1000);
    });
</script>
</body>
</html>