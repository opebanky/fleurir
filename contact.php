<?php include('header.php'); ?>

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Contact Us				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->				  

        <!-- Start contact-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="map-wrap" style="width:100%; height: 445px;" id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6470664984113!2d3.366971714325561!3d6.566153295251098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d87e272b3d3%3A0x3406e25837bbe296!2s19b%20Bush%20St%2C%20Maryland%2C%20Lagos!5e0!3m2!1sen!2sng!4v1566697677681!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-lg-4 d-flex flex-column address-wrap">
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-home"></span>
                            </div>
                            <div class="contact-details">
                                <h5>Lagos, Nigeria</h5>
                                <p>
                                   19b, Bush Street Maryland
                                </p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <div class="contact-details">
                                <h5>+234 708 8997 207</h5>
                                <p>Mon to Fri 8am to 5pm</p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <div class="contact-details">
                                <h5>info@fleurirconcept.com</h5>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>														
                    </div>
                    <div class="col-lg-8">
                    
                    <?php
                        // echo $_POST['send'];
                    ?>
                        <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                            <div class="row">	
                                <div class="col-lg-6 form-group">
                                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                                
                                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                    <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <textarea class="common-textarea form-control" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>				
                                </div>
                                <div class="col-lg-12">
                                    <div class="alert-msg" style="text-align: left;"></div>
                                    <button name="send" class="genric-btn primary circle" style="float: right;">Send Message</button>											
                                </div>
                            </div>
                        </form>	
                    </div>
                </div>
            </div>	
        </section>
        <!-- End contact-page Area -->

<?php include('footer.php'); ?>