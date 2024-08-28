<?php
require_once('./includes/header.php');
require_once('./includes/navbar.php');
require_once('config.php');

if(isset($_POST["send"])){

    $nm = $_POST["full_name"];
    $ph = $_POST["phone"];
    $em = $_POST["email"];
    $msg = $_POST["message"];
    $added_date = date("d/m/Y H:i:s");

    $insert= "insert into tbl_contact(con_name,con_phone,con_email,con_msg,added_date) values('$nm','$ph','$em','$msg','$added_date')";
    $query=mysqli_query($conn,$insert);

    echo "<script>
    alert('Thanks for contact with us we will contact with you Soon')
    window.location='contact-us.php';
    </script>";
}




?>
        <main>



            <section class="news-detail-header-section text-center">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h1 class="text-white">Contact Us</h1>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contact-section section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                            <div class="contact-info-wrap">
                                <h2>Get in touch</h2>

                                <!--<div class="contact-image-wrap d-flex flex-wrap">-->
                                <!--    <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid avatar-image" alt="">-->

                                <!--    <div class="d-flex flex-column justify-content-center ms-3">-->
                                <!--        <p class="mb-0">Clara Barton</p>-->
                                <!--        <p class="mb-0"><strong>HR & Office Manager</strong></p>-->
                                <!--    </div>-->
                                <!--</div>-->

                                <div class="contact-info">
                                    <h5 class="mb-3">Contact Infomation</h5>

                                    <p class="d-flex mb-2">
                                        <i class="bi-geo-alt me-2"></i>
                                        Rupa Solitaire, Mahape,
                                        Navi Mumbai – 400703
                                        Maharashtra. INDIA
                                    </p>

                                    <p class="d-flex mb-2">
                                        <i class="bi-telephone me-2"></i>

                                        <a href="tel:+919833658109">
                                            +91 9833658109
                                        </a>
                                    </p>

                                    <p class="d-flex">
                                        <i class="bi-envelope me-2"></i>

                                        <a href="mailto:options.trading@gmail.com">
                                        options.trading@gmail.com
                                        </a>
                                    </p>

                                    <a href="https://maps.app.goo.gl/tKBFyi11euzcMsfc7" target="_blank" class="custom-btn btn mt-3">Get Direction</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form contact-form" method="post" role="form">
                                <h2>Contact form</h2>

                                <p class="mb-4">Or, you can just send an email: <a href="mailto:options.trading@gmail.com">options.trading@gmail.com</a>
                                </p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="full_name" id="first-name" class="form-control" placeholder="Full Name" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="phone" required>
                                    </div>
                                </div>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>

                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                                <button type="submit" name="send" class="form-control">Send Message</button>
                            </form>
                        </div>

                    </div>
                </div>
            </section>




        </main>

<?php
require_once('./includes/footer.php');
?>