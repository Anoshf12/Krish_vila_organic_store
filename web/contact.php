<?php include('head.php'); ?>
<?php include('header.php'); ?>
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>CONTACT US</h3>
            </div>
        </div>
    </div>    
    <div class="contact-us ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="small-title mb-30">
                        <h2>Contact Form</h2>
                        <p>For all enquiries, please email us using the form below.</p>
                    </div>
                    <form id="contact-form" action="database/messege.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="name" placeholder="Full Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="email" placeholder="Email Address" type="email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style mb-20">
                                    <input name="subject" placeholder="Subject" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button class="submit" type="submit">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
                <div class="col-lg-6">
                    <div class="small-title mb-30">
                        <h2>Contact Address</h2>
                        <p>Question not answered yet? We are here to help!</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-information mb-30">
                                <h4>Our Address</h4>
                                <p>Hokandara, hokandara south</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-information contact-mrg mb-30">
                                <h4>Phone Number</h4>
                                <p>
                                    <a href="tel:0718308262">0718308262</a>
                                    <a href="tel:0714317927">0714317927</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-information contact-mrg mb-30">
                                <h4>Web Address</h4>
                                <p>
                                    <a href="info@kvoraganics.com">info@kvoraganics.com</a>
                                    <a href="kvstore@krishvilla.com">kvstore@krishvilla.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7922.2290728218295!2d79.96371418711449!3d6.876878625301326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae250e01223eeb7%3A0x29145e44e2add0bd!2sHokandara!5e0!3m2!1sen!2slk!4v1629118696283!5m2!1sen!2slk" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <?php include('footer.php'); ?>