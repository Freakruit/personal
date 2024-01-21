<?php include 'header.php'; ?>

<?php include 'header_bar.php'; ?>
<meta property="og:url"            content="/place-job.php">
<meta property="og:type"           content="article" >
<meta property="og:title"          content="website title "  >
<meta property="og:description"    content="article description"  >
<meta property="og:image"          content="image  link url" >
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@">
<meta name="twitter:title" content="website title">
<meta name="twitter:description" content="article description">
<meta name="twitter:image" content="summary_large_image">
<link rel="canonical" href="/place-job.php" />
<meta name="description" content= "Convey Your Job Openings, Stay updated with the current recruitment trends and talent in your industry. Fill In Your Requests, Help us identify your" />
<!--Page Title-->
<section class="page-title pb-0" style="background-image: url(assets/images/background/page-title-2.jpg);">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-35.png);"></div>
    <div class="auto-container bg-shape-inrespo">
        <div class="content-box">
            <div class="title-box centred">
                <h1>Convey Your Job Openings</h1>
                <p>Stay updated with the current recruitment trends and talent in your industry.</p>
            </div>
            <div class="bg-shape"></div>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- placejob-section -->
<section class="placejob-section">
    <div class="auto-container comp-detail">
        <div class="sec-title centred">
            <span class="top-title title-two" style="padding-left: 35px;">Ready to hire ?</span>
            <h2>Fill In Your Requests</h2>
            <p>Help us identify your requirements to help you better. We will reach out to you shortly.</p>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <div class="title-inner">
                        <figure class="icon-box"><img src="assets/images/icons/office.png" alt="Freakruit Talenthub is a US staffing service"></figure>
                        <h2>Company Details</h2>
                        <p>Please fill out your company details here.</p>
                    </div>
                    <form action="place-job.html" method="post" class="job-form">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="name" placeholder="Company Name" required="required">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="url" name="website" placeholder="companywebsite.com" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="address" placeholder="Enter Your Address" required="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <div class="title-inner">
                        <figure class="icon-box"><img src="assets/images/icons/communicate.png" alt="Freakruit Talenthub is a US staffing service"></figure>
                        <h2>Point-of-Contact</h2>
                        <p>Fill the details of the person who will be our Contact.</p>
                    </div>
                    <form action="place-job.html" method="post" class="job-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="fname" placeholder="First Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="lname" placeholder="Last Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="contact" placeholder="Contact No" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="url" name="address" placeholder="Linkedin / Indeed Profile" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                <div class="form-inner mr-0">
                    <div class="title-inner">
                        <figure class="icon-box"><img src="assets/images/icons/talent.png" alt="Freakruit Talenthub is a US staffing service"></figure>
                        <h2>Request Talent</h2>
                        <p>Intimate us about the recent job openings so that we can go on our talent search spree !</p>
                    </div>
                    <form action="place-job.php" method="post" class="job-form">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 column" style="padding-bottom: 20px;">
                                <div class="form-group">
                                    <textarea name="description" placeholder="Enter Your Job Description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <i class="flaticon-cloud-computing"></i>
                                <input type="text" name="upload_file" placeholder="Upload Job Requirements ( DOC, PDF or JPG Files only, Upto 25 MB )" required="">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 column">
                                <div class="form-group">
                                    <input type="text" name="position" placeholder="Position (Sr. Developer)" required="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 column">
                                <div class="form-group">
                                    <input type="text" name="skills" placeholder="Skills / Specialisations">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 column">
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="No. of Openings">No. of Openings</option>
                                            <option value="1">1 - 3</option>
                                            <option value="2">3 - 6</option>
                                            <option value="3">6 - 10</option>
                                            <option value="10">10+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 column">
                                 <div class="form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Bill Rate (USD)">Bill Rate (USD)</option>
                                            <option value="1">$10 - $20</option>
                                            <option value="2">$20 - $30</option>
                                            <option value="3">$30 - $40</option>
                                            <option value="4">$40 - $50</option>
                                            <option value="5">$50 - $60</option>
                                            <option value="6">$60 - $70</option>
                                            <option value="7">$70 - $80</option>
                                            <option value="8">$80 - $90</option>
                                            <option value="9">$90 - $100</option>
                                            <option value="10">$100+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 column" style="padding-top: 20px;">
                                <div class="form-group">
                                    <button type="submit" class="theme-btn-one">E N Q U I R E &nbsp; N O W</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- placejob-section end -->

<?php include 'footer_bar.php'; ?>
<?php include 'footer.php'; ?>