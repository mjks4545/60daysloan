    <?php include'inc/header.php'; ?>
        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('img/slide1.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Become A Borrower</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Fast Funding  |  Low Points  |  Low or No FICO  |  Bankruptcy  |
No Seasoning    Lates & NODs  |  Self Employed  |  Developments  |  Equity Partnerships .</p>
<a href="#" class="button button-xlarge button-border button-rounded tright">Read more<i class="icon-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                  <div class="swiper-slide dark" style="background-image: url('img/slide2.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Become An Invester</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">6 Day Loans will structure your portfolio based on pre-established parameters which incorporate risk tolerances, liquidity preferences, leverage points, and desired real estate asset classes.</p>
<a href="#" class="button button-xlarge button-border button-rounded tright">Read more<i class="icon-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
            </div>

            <script>
                jQuery(document).ready(function($){
                    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        slidesPerView: 1,
                        grabCursor: true,
                        onSwiperCreated: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        },
                        onSlideChangeStart: function(swiper){
                            $('#slide-number-current').html(swiper.activeIndex + 1);
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                            });
                        },
                        onSlideChangeEnd: function(swiper){
                            $('#slider .swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                            });
                            $('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                            });
                            if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        }
                    });

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });

                    $('#slide-number-current').html(swiperSlider.activeIndex + 1);
                    $('#slide-number-total').html(swiperSlider.slides.length);
                });
            </script>

        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">


                <div class="container clearfix">

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="img/residential-loan.jpg" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Residential Lending.</h3>
                                <p>If you are looking for a quick close or looking to pull cash out of a property fast, 6 Day Loan Residential Hard Money Loan programs are here for you. Whether you're looking to Fix and Flip, Buy and Hold, Purchase, Rehab or Refinance, 6 Day Loan will customize a deal that is tailored for your needs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="img/commercial-loan.jpg" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Commercial Lending.</h3>
                                <p>Are banks taking too long to get your deal funded? Do they require too much paperwork? Enjoy effortless funding at 6 Day Loan, where Hard Money becomes easy! How easy? Find out by asking about our Commercial Program.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="img/trust-deed.jpg" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Trust Deed Investing.</h3>
                                <p>A truly passive approach to real estate investing without the headaches that come with property management. Our investors enjoy Diversification of their portfolio, steady cash inflow, the option to adjust the terms in the promissory note, and reduction of liquidity risk.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                </div>

                <div class="section parallax bottommargin-lg" style="background-image: url('img/business.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.3">
                    <div class="heading-block center nobottomborder nobottommargin">
                        <h2 style="color:#fff;">"Our Loan Programs bridge the gap between<br> Active and Passive Investors."</h2>
						<a href="quote.php" class="button button-rounded button-reveal button-large button-border tright" style="color:#fff;margin-top:20px;"><i class="icon-signal"></i><span>Get a Free Quote</span></a>
                    </div>
                </div></div>

        </section><!-- #content end -->

        <?php include'inc/footer.php'; ?>