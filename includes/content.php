<?php
require_once('./config.php'); 


if(isset($_POST["send"]))
{
    date_default_timezone_set("Asia/Calcutta");
    $fname = $_POST["full_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $added_date = date("d/m/Y H:i:s");

    $insert = "insert into tbl_letstalk(letfname,letphone,letemail,added_date) values('$fname','$phone','$email','$added_date')";
    $query=mysqli_query($conn,$insert);

    echo "<script>
    alert('data is successfully sent')
    window.location='index.php';
    </script>";

}

?>

<section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Marketing is Not Enough You Need Sales!
                                Drive More Profit with SMARKETING</h2>
                        </div>

                        <!--<div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">-->
                        <!--    <div class="featured-block d-flex justify-content-center align-items-center">-->
                        <!--        <a href="eform.html" class="d-block">-->
                        <!--            <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">-->

                        <!--            <p class="featured-block-text">Become a <strong>volunteer</strong></p>-->
                        <!--        </a>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">-->
                        <!--    <div class="featured-block d-flex justify-content-center align-items-center">-->
                        <!--        <a href="eform.html" class="d-block">-->
                        <!--            <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">-->

                        <!--            <p class="featured-block-text"><strong>Caring</strong> Earth</p>-->
                        <!--        </a>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">-->
                        <!--    <div class="featured-block d-flex justify-content-center align-items-center">-->
                        <!--        <a href="eform.html" class="d-block">-->
                        <!--            <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">-->

                        <!--            <p class="featured-block-text">Make a <strong>Donation</strong></p>-->
                        <!--        </a>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">-->
                        <!--    <div class="featured-block d-flex justify-content-center align-items-center">-->
                        <!--        <a href="eform.html" class="d-block">-->
                        <!--            <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">-->

                        <!--            <p class="featured-block-text"><strong>Scholarship</strong> Program</p>-->
                        <!--        </a>-->
                        <!--    </div>-->
                        <!--</div>-->

                    </div>
                </div>
            </section>

            <section class="section-padding section-bg" >
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <img src="images/banner-img.png" style="width: 500px;height: 450px;;" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-box">
                                <h2 class="mb-2">We are a Creative Digital Agency & Marketing Experts </h2>

                                <h5 class="mb-3">Dream until your Dream Come True</h5>

                                <p class="mb-0">We help businesses Setting Up, Scaling & Maintaining Growth Systems. Schedule a call Now. Marketing Is Not Enough, You Need Sales & Profit. Growth Partner to 180+Leading Brands. Full Funnel Marketing. Marketing Ready Website. Tech Enabled Marketing. </p>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box mb-lg-0">
                                        <h5 class="mb-3">Our Mission</h5>

                                        <p>At Options Trading, we believe that investing in the stock market can help you generate a steady source of income, and with the right guidance, you can maximize your profits</p>

                                        <ul class="custom-list mt-2">
                                            <!-- <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                                Charity Theme
                                            </li>

                                            <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                                Semantic HTML
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <div class="counter-thumb"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="2009" data-speed="1000"></span>
                                                <span class="counter-number-text"></span>
                                            </div>

                                            <span class="counter-text">Invester</span>
                                        </div> 

                                        <div class="counter-thumb mt-4"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="120" data-speed="1000"></span>
                                                <span class="counter-number-text">B</span>
                                            </div>

                                            <span class="counter-text">Viewer</span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>



            <section class="volunteer-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-4">Let's talk</h2>



                            <form class="custom-form volunteer-form mb-5 mb-lg-0" method="post">
                               
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="full_name" id="first-name" class="form-control" placeholder="Full Name" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="phone" required>
                                    </div>
                                </div>

                                <input type="email" name="email"  class="form-control" placeholder="Jackdoe@gmail.com" required>

                                <input type="submit" name="send" class="form-control" style="background-color:#0099ff;" value="Submit">
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg" class="volunteer-image img-fluid" alt="">

                            <div class="custom-block-body text-center">
                                <h4 class="text-white mt-lg-3 mb-lg-3">About Inventers</h4>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="news-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">



                        <div class="media col-md-6 col-lg-4">
                            <div class="oval mr-4 m-4"><img class="align-self-start" src="images/quality-results.png" alt=""></div>
                            <div class="media-body">
                                <h5 class="mb-0">Quality Results</h5>
                                Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                                fermentum ac eu eros. Aliquam erat volutpat.
                            </div>
                        </div>
                        <div class="media col-md-6 col-lg-4">
                            <div class="oval mr-4 m-4"><img class="align-self-start" src="images/analytics.png" alt=""></div>
                            <div class="media-body">
                                <h5 class="mb-0">Analytics</h5>
                                Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                                fermentum ac eu eros. Aliquam erat volutpat.
                            </div>
                        </div>
                        <div class="media col-md-6 col-lg-4">
                            <div class="oval mr-4 m-4"><img class="align-self-start" src="images/affordable-pricing.png" alt=""></div>
                            <div class="media-body">
                                <h5 class="mb-0">Affordable Pricing</h5>
                                Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                                fermentum ac eu eros. Aliquam erat volutpat.
                            </div>
                        </div>
                        <div class="media col-md-6 col-lg-4">
                            <div class="oval mr-4 m-4"><img class="align-self-start" src="images/easy-to-use.png" alt=""></div>
                            <div class="media-body">
                                <h5 class="mb-0">Easy To Use</h5>
                                Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                                fermentum ac eu eros. Aliquam erat volutpat.
                            </div>
                        </div>
                        <div class="media col-md-6 col-lg-4">
                            <div class="oval mr-4 m-4"><img class="align-self-start" src="images/free-support.png" alt=""></div>
                            <div class="media-body">
                                <h5 class="mb-0">Free Support</h5>
                                Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                                fermentum ac eu eros. Aliquam erat volutpat.
                            </div>
                        </div>
                        <div class="media col-md-6 col-lg-4">
                            <div class="oval mr-4 m-4"><img class="align-self-start" src="images/effectively-increase.png" alt=""></div>
                            <div class="media-body">
                                <h5 class="mb-0">Effectively Increase</h5>
                                Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                                fermentum ac eu eros. Aliquam erat volutpat.
                            </div>
                        </div>
            


                    </div>
                </div>
            </section>


            <section class="testimonial-section section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="mb-lg-3">Happy Customers</h2>
                            
                                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                           <div class="carousel-caption">
                                                <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Maria</span>, Boss</small>
                                           </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Thomas</span>, Partner</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Jane</span>, Advisor</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Bob</span>, Entreprenuer</small>
                                           </div>
                                        </div>

                                          <ol class="carousel-indicators">
                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                                    <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                                    <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                                    <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                                    <img src="images/avatar/studio-portrait-emotional-happy-funny.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>
                                          </ol>

                                 </div>
                            </div>
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

                                        <a href="options.trading@gmail.com">
                                        options.trading@gmail.com
                                        </a>
                                    </p>

                                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form contact-form" action="#" method="post" role="form">
                                <h2>Contact form</h2>

                                <p class="mb-4">Or, you can just send an email:
                                    <a href="mailto:options.trading@gmail.com">options.trading@gmail.com</a>
                                </p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Jack" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe" required>
                                    </div>
                                </div>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>

                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                                <button type="submit" class="form-control">Send Message</button>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">OUR SUBCRIBE </h2>
                        </div>

                        <div class="col-md-7">
                            <?php 

                            // php mailer library
                            use PHPMailer\PHPMailer\PHPMailer;
                            use PHPMailer\PHPMailer\SMTP;
                            use PHPMailer\PHPMailer\Exception;


                            require_once("./config.php");
                            if(isset($_POST["SEND"]))
                            {
                                


                                require 'PHPMailer/Exception.php';
                                require 'PHPMailer/PHPMailer.php';
                                require 'PHPMailer/SMTP.php';        
                                $mail = new PHPMailer(true);
                                try {
                                    $e_mail=$_POST["e_mail"];
                                    
                                    //Server settings
                                    $mail->SMTPDebug = 1;                      //Enable verbose debug output
                                    $mail->isSMTP();                                            //Send using SMTP
                                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                    $mail->Username   = 'sahilkhanbelim28@gmail.com';                     //SMTP username
                                    $mail->Password   = 'icuc ihrz ewig klmt ';                               //SMTP password
                                    $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
                                    $mail->Port       = 587;                                       //TCP port to connect to; use 587 or 456 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                                    //Recipients
                                    $mail->setFrom($e_mail, 'Contact us details of customers');
                                    $mail->addAddress('sahilkhanbelim28@gmail.com');     //Add a recipient
                                
                                    //Content
                                    $mail->isHTML(true);                                  //Set email format to HTML
                                    $mail->Subject = 'Contact us details of customers';
                                    $mail->Body    = "<p><b>Customers Email is :$e_mail</b></p>";
                                   
                                    $mail->send();
                                    $insert="insert into tbl_subcriber(subemail) value('$e_mail')";
                                    $qeury=mysqli_query($con,$insert);
                                    if ($qeury) {
                                        echo "<script> 
                                        alert('Thank's for subcribe :)')
                                        window.location='index.php';
                                        </script>";
                                    }
                                }
                                catch (Exception $e)
                                {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                }
                            }

                            ?>
                            <form action="" method="post">
                                <div class="input-group">
                                            <input type="text" name="e_mail" id="last-name" class="form-control p-3 m-1" placeholder="Enter Your Email" required>
                                            <input type="submit" name="SEND" value="Send" class="btn btn-sm btn-primary rounded" placeholder="Enter Your Email" required>
                                </div>
                                <div class="input-group">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>