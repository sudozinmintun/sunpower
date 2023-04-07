<footer id="footer" class="footer divider layer-overlay overlay-dark-8" data-tm-bg-img="images/bg/bg8.jpg">
    <div class="footer-widget-area">
        <div class="container pt-90 pb-40">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="widget tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                        <div class="thumb">
                            <img alt="Logo" src="images/logo-wide-white.png">
                        </div>
                        <div class="description">203, Envato Labs, Behind Alis Steet, Melbourne, Australia.immersion
                            along the information close the loop on focusing</div>
                        <ul class="mb-30">
                            <li class="contact-phone">
                                <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
                                <div class="text"><a href="tel:+123-456-789">+123-456-789</a></div>
                            </li>
                            <li class="contact-email">
                                <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
                                <div class="text"><a href="mailto:contact@yourdomain.com">contact@yourdomain.com</a>
                                </div>
                            </li>
                            <li class="contact-website">
                                <div class="icon"><i class="flaticon-contact-035-website"></i></div>
                                <div class="text"><a target="_blank" href="http://yourdomain.com/">yourdomain.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Services</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Course</a></li>
                            <li><a href="#">Pricing Table</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget">
                        <h4 class="widget-title">Twitter Feed</h4>
                        <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget">
                        <h4 class="widget-title">Opening Hours</h4>
                        <div class="opening-hours border-dark">
                            <ul>
                                <li class="clearfix"> <span> Mon - Tues : </span>
                                    <div class="value"> 6.00 am - 10.00 pm </div>
                                </li>
                                <li class="clearfix"> <span> Wednes - Thurs :</span>
                                    <div class="value"> 8.00 am - 6.00 pm </div>
                                </li>
                                <li class="clearfix"> <span> Fri :</span>
                                    <div class="value"> 3.00 pm - 8.00 pm </div>
                                </li>
                                <li class="clearfix"> <span> Sun : </span>
                                    <div class="value"> Closed </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Call Us Now</h5>
                        <div class="text-gray">
                            +61 3 1234 5678 <br>
                            +12 3 1234 5678
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Connect With Us</h5>
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
                            <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <!-- Mailchimp Subscription Form-->
                    <form id="mailchimp-subscription-form1" class="newsletter-form">
                        <label for="mce-EMAIL"></label>
                        <div class="input-group">
                            <input type="email" id="mce-EMAIL" data-tm-height="45px" class="form-control"
                                placeholder="Your Email" name="EMAIL" value="">
                            <div class="input-group-append tm-sc-button">
                                <button type="submit" class="btn btn-theme-colored1 btn-sm"
                                    data-tm-height="45px">Subscribe</button>
                            </div>
                        </div>
                    </form>
                    <!-- Mailchimp Subscription Form Validation-->
                    <script>
                        (function($) {
                            $('#mailchimp-subscription-form1').ajaxChimp({
                                callback: mailChimpCallBack,
                                url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                            });

                            function mailChimpCallBack(resp) {
                                // Hide any previous response text
                                var $mailchimpform = $('#mailchimp-subscription-form1'),
                                    $response = '';
                                $mailchimpform.children(".alert").remove();
                                if (resp.result === 'success') {
                                    $response =
                                        '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                        resp.msg + '</div>';
                                } else if (resp.result === 'error') {
                                    $response =
                                        '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                        resp.msg + '</div>';
                                }
                                $mailchimpform.prepend($response);
                            }
                        })(jQuery);
                    </script>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-sm-6">
                        <div class="footer-paragraph">
                            © 2021 ThemeMascot. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-paragraph text-right">
                            Site Template
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
