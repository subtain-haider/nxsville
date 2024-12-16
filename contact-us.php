<?php include 'header.php'; ?>

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>



<section class="page-header pt-120 pb-120" data-background="assets/img/bg-img/page-header-bg.jpg">
    <div class="container">
        <div class="page-header-content text-center">
            <h1 class="title">Contact Us</h1>
            <h4 class="sub-title"><a href="index.html">Home </a><span>></span><a href="contact.html" class="inner-page">
                    Contact us</a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->

<section class="contact-section pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center gy-lg-0 gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="contact-item text-center">
                    <div class="icon"><i class="fa-sharp fa-regular fa-clock"></i></div>
                    <h3 class="title">Emergency Works</h3>
                    <a href="tel:0031234567890" class="number">(003) 123 456 7890</a>
                    <a href="#" class="contact-btn">Call Us</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-item item-2">
                    <h3 class="header">Main Branch</h3>
                    <ul class="contact-list">
                        <li>Address : <span>Amsterdam, 109-74</span></li>
                        <li>Phone : <a href="tel: +01569896654">+01 569 896 654</a></li>
                        <li>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-item text-center">
                    <div class="icon"><i class="fa-regular fa-user"></i></div>
                    <h3 class="title">You Have a Question?</h3>
                    <a href="tel:0031234567890" class="number">(003) 123 456 7890</a>
                    <a href="#" class="contact-btn">Call Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ contact-section -->

<section class="contact-form-area bg-grey pt-120 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <h2 class="section-title">Get In Touch</h2>
        </div>
        <div class="contact-form">
            <form action="contact.php" method="post" id="ajax_contact" class="form-horizontal">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Number">
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="website" name="website" class="form-control" placeholder="Website">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <textarea id="message" name="message" cols="30" rows="5" class="form-control address"
                            placeholder="Comment*" required=""></textarea>
                    </div>
                </div>
                <div class="submit-btn text-center">
                    <button id="submit" class="lt-primary-btn" type="submit">Submit Now</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="cta-section pt-120 pb-120">
    <div class="cta-shape"><img src="assets/img/shapes/cta-shape.png" alt="cta"></div>
    <div class="container">
        <div class="cta-wrap">
            <h2 class="title">Fastest & Secure Way to Get Transport Your Freight.</h2>
            <!-- <a href="#" class="lt-primary-btn cta-btn">Contact Us</a> -->
        </div>
    </div>
</section>
<br>
<br>
<!-- ./ cta-section -->

<?php include 'footer.php'; ?>