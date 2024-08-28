<?php
require_once('./includes/header.php');
require_once('./includes/navbar.php');
require_once('./get-start.php');
require_once('config.php');
?>
        <main>

            <section class="news-detail-header-section text-center">
                <div class="section-overlay"></div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h1 class="text-white" style="color:white">PACKAGES</h1>
                        </div>

                    </div>
                </div>
            </section>
            <h2 class="m-2 p-3 f-25 text-center mt-5">Cash Packages</h2>
            <section class="news-section section-padding " >
                <div class="container">
                    <div class="row">
                        <?php
                        $select="select * from tbl_packages";
                        $q=mysqli_query($con,$select);
                        while($fetch=mysqli_fetch_array($q))
                        {
                        ?>

                            
                       
                        <div class="col-md-5 border bg-light p-4  m-3 border border-black rounded">
                        <h3 class="text-center"><?php echo $fetch["pname"];?></h3>
                            <ul class="mt-3">
                                <li style="text-align: left;">Only one research alert per day.</li>
                                <li style="text-align: left;">Get Positional Equity alerts.</li>
                                <li style="text-align: left;">Get well-researched targets and stop-loss on every research alert.</li>
                                <li style="text-align: left;">Live Market customer support is available.</li>
                                <li style="text-align: left;">Risk Level: &#8211; Moderate to High</li>
                            </ul>

                            <h5 class="text-center mt-5">₹ <?php echo $fetch["pprice"];?>/-</h5>
                            <p class="text-center mt-1">*All Prices are inclusive of GST</p>
                            <p class="text-center"><button style="text-align: center;" class="btn btn-md btn-primary p-2 "><a style="color:white;font-size:15px;" href="https://wa.me/919833658109 " target="_blank" rel="noopener" title="Get Started">Chat Now</a></button></p>
                            <p class="text-center" ><button style="text-align: center;margin:auto;"  data-bs-toggle="modal" data-bs-target="#enq" class="btn btn-md btn-primary p-2 "><a style="color:white;font-size:20px;" href="#" title="Get Started">Get Started</a></button></p>

                        </div>

                        <?php
                        }
                        ?>

                        


                    </div>
                </div>
            </section>
        </main>
<?php

require_once('includes/footer.php');
?>