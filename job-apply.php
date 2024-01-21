<?php include 'header.php'; ?>

<?php include 'header_bar.php'; ?>
<meta property="og:url"            content="/job-apply.php">
<meta property="og:type"           content="article" >
<meta property="og:title"          content="website title "  >
<meta property="og:description"    content="article description"  >
<meta property="og:image"          content="image  link url" >
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@">
<meta name="twitter:title" content="website title">
<meta name="twitter:description" content="article description">
<meta name="twitter:image" content="summary_large_image">
<link rel="canonical" href="/job-apply.php" />
<meta name="description" content= "Apply Now, To Be Employed In An Environment Fostering Growth And Evolution. Seize Rewarding Opportunities, Find the best job opening in your" />
<!--Page Title-->
<section class="page-title pb-0" style="background-image: url(assets/images/background/page-title-2.jpg);">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-35.png);"></div>
    <div class="auto-container bg-shape-inrespo">
        <div class="content-box">
            <div class="title-box centred">
                <h1>Apply Now</h1>
                <p>To Be Employed In An Environment Fostering Growth And Evolution. </p>
            </div>
            <div class="bg-shape"></div>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- placejob-section -->
<section class="placejob-section applynow-section">
    <div class="auto-container comp-detail">
        <div class="sec-title centred">
            <span class="top-title title-three" style="padding-left: 35px;">Employment Options</span>
            <h2>Seize Rewarding Opportunities</h2>
            <p>Find the best job opening in your industry without tedious research and continual scrolling over online platforms.</p>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <div class="title-inner">
                        <figure class="icon-box"><img src="assets/images/icons/identity-card.png" alt="Seize Rewarding Opportunities"></figure>
                        <h2>Basic Infomation</h2>
                        <p>Help Us Know a Little More About Yourself.</p>
                    </div>
                    <form action="." method="post" class="job-form information-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="fname" placeholder="First Name*" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="lname" placeholder="Last Name*" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email*" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="number" name="phone" placeholder="Phone" required="">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="address" placeholder="Address (eg: No,Street,City,State,Zip)" required="">
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <div class="title-inner">
                        <figure class="icon-box"><img src="assets/images/icons/grade.png" alt="Seize Rewarding Opportunities"></figure>
                        <h2>Qualification</h2>
                        <p>Inform Us About Your Qualifications & Skills Here.</p>
                    </div>
                    <div class="job-form pualification-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="name" placeholder="Education" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="experience" placeholder="Total Experience" required="">
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Current Job Status">Current Job Status</option>
                                        <option value="1">Employed</option>
                                        <option value="2">Unemployed</option>
                                        <option value="3">Looking For Change</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Work Authorization">Work Authorization</option>
                                        <option value="1">US Citizen (USC)</option>
                                        <option value="2">Green Card (GC)</option>
                                        <option value="3">Employment Authorization Document (EAD)</option>
                                        <option value="4">Prefer Not to Say</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                <div class="form-inner resume-up">
                    <div class="job-form pualification-form">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <i class="flaticon-cloud-computing"></i>
                                <input type="text" name="upload_file" placeholder="Upload Resume ( DOC, PDF or JPG Files only, Upto 25 MB )" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                <div class="apply-form">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Additional Information ..."></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                            <button type="submit" class="theme-btn-one">Apply for Job</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<!-- placejob-section end -->

<?php include 'footer_bar.php'; ?>
<?php include 'footer.php'; ?>