<div class="copyright-bx">  
        <div class="copyright-bx-logo">
            <img src="<?php echo e(url('/')); ?>/public/assets/images/logo.png" alt="" />
        </div>
        <div class="copyright-bx-social">
            <ul>
                <li><a style="color: #3b5999;" href="https://www.facebook.com/sweplyhq"><i class="fab fa-facebook-f"></i></a></li>
                <li><a style="color: #55acee;" href="https://twitter.com/SweplyP"><i class="fab fa-twitter"></i></a></li>
                <li><a style="color: #e4405f;" href="https://www.instagram.com/sweplyhq/"><i class="fab fa-instagram"></i></a></li>
                <li><a style="color: #0077b5;" href="https://www.linkedin.com/company/sweply"><i class="fab fa-linkedin-in"></i></a></li>                   
                <li><a style="color: #cd201f;" href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>    
        <div class="copyright-bx-txt">
            &copy; Copyright <script>new Date().getFullYear()>document.write(new Date().getFullYear());</script> Sweply All Rights Reserved.
        </div>  
        <div class="footer-menu-section">
            <ul>
                <li><a href="<?php echo e(url('/')); ?>/terms-and-conditions/">Terms and conditions</a></li>
                <li><a href="<?php echo e(url('/')); ?>/privacy-policy/">Privacy policy</a></li>
            </ul>
        </div>      
        <div class="clearfix"></div>       
    </div>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/assets/js/swiper.min.js"></script>


 <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.home-banner-slider', {
            centeredSlides: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });



        var swiper = new Swiper('.logos-swiper-slider', {
            slidesPerView: 4,
            spaceBetween: 30,
            speed: 1000,
            loop: true,
            breakpoints: {                                               
                480: {
                    slidesPerView: 2                
                },                
                991: {
                    slidesPerView: 3                
                }
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });   
    </script>
    <script type="text/javascript">
        // $(function () {
        //     $('.scroll1').infiniteslide({
        //         speed: 50,
        //     });
        // });
    </script>


    <script>
        function setLanguage(obj){
            var lang = obj;
            $.ajax({
                url  :"<?php echo e(url('/')); ?>/change_language",
                type :'POST',
                data :{'lang':lang ,'_token':'<?php echo csrf_token();?>'},
                success:function(data){
                  location.reload(true);
                }
            });
        }
    </script>


<div class="loader-section-main" style="display:none;">
    <img src="<?php echo e(url('/')); ?>/public/assets/images/logo/loader.gif" alt=""/>
</div>
<?php include("resources/lang/translation-script.php"); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\sweply\resources\views/front/layout/footer.blade.php ENDPATH**/ ?>