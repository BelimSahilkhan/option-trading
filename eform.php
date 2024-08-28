<?php
require_once('./includes/header.php');
require_once('./includes/navbar.php');
require_once('config.php');


if(isset($_POST["submit"])){

    date_default_timezone_set("Asia/Calcutta");
    $name = $_POST["uname"];
    $surname = $_POST["usurname"];
    $ph = $_POST["phone"];
    $wph = $_POST["wphone"];
    $mail = $_POST["e-mail"];
    $cName = $_POST["state-name"];
    $seg_name = $_POST["segment-name"];
    $inve_name = $_POST["investment-name"];
    $added_date = date("d/m/Y H:i:s");
 
    $insert = "insert into tbl_getlivedemo(getusernmae,getsurname,getphone,getwphone,getemail,getcname,getsegname,getinvename,added_date) values('$name','$surname','$ph','$wph','$mail','$cName','$seg_name','$inve_name','$added_date')";
    $query=mysqli_query($conn,$insert);
    // $exe=mysqli_query($con,$insert);

        
            echo "<script>
            alert('data is successfully sent')
            window.location='eform.php';
            </script>";
       
            //     echo "<script>
            //     alert('something went wrong.. please try again..!')
            // window.location='eform.php';
            // </script>";
}







?>
        <main>

            <section class="donate-section">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mx-auto">
                            <form class="custom-form donate-form" method="post" >
                                <h3 class="mb-4 text-center">Get Live Demo</h3>

                                <div class="row">
                                <div class="col-lg-12 col-12">
                                        <h5 class="mt-1">Personal Info</h5>
                                    </div>

                                    <div class="form-check-group">
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                            
                                            <input type="text" class="form-control" placeholder="Enter Your Name *" aria-label="Username"  name="uname" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                            
                                            <input type="text" class="form-control" placeholder="Enter Your Surname *" aria-label="Username"  name="usurname" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-phone"></i></span>
                                            
                                            <input type="text" class="form-control" name="phone" placeholder="Enter Your Mobile *" aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-whatsapp"></i></span>
                                            
                                            <input type="text" class="form-control" name="wphone" placeholder="Enter Your Whatsapp No *" aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                                            
                                            <input type="email" name="e-mail" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                                        </div>
                                    </div>

               
                                    <div class="col-lg-6 col-12 mt-2">
                                        <select name="state-name" id="donation-name" class="form-control" required>
                                            <option value="#">--Please choose an state Name--</option>
                                        <?php
                                        $select = "select * from tbl_state";
                                        $query = mysqli_query($conn,$select);
                                        
                                        while ($fatch=mysqli_fetch_array($query)) {
                                          
                                       ?>
                                            <option value="<?php echo $fatch["state_name"]; ?>"><?php echo $fatch["state_name"]; ?></option>

                                        <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12 mt-2">
                                        <select name="segment-name" id="donation-name" class="form-control" required>
                                            <option value="#">--Please choose an segment--</option>
                                            <option value="Equity Cash / Intraday">Equity Cash / Intraday</option>
                                            <option value="Options (call / put)">Options (call / put)</option>
                                            <option value="Futures">Futures </option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <center>

                                        <div class="col-lg-6 col-12 mt-2">
                                            <select name="investment-name" id="donation-name" class="form-control" required>
                                                <option value="#">--Please choose an investment--</option>
                                                <option value="above 50000">Above INR Rs 50000</option>
                                                <option value="Above 1 lac">Above INR Rs 1 Lac</option>
                                                <option value="Above 3 lac">Above INR 3 Lac</option>
                                                <option value="Above 5 lac">Above INR 5 Lac</option>
                                            </select>
                                        </div>
                                    </center>
                                   
                                    <div class="col-lg-12 col-12 mt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="DonationPayment" id="flexRadioDefault9" required>
                                            <label class="form-check-label" for="flexRadioDefault9">
                                                I Accept <u><a href="terms-condition.php">Terms and Conditions</a></u>
                                            </label>
                                        </div>

                                        <button type="submit" name="submit" class="form-control mt-4">Submit </button>    
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>
      
      
<?php
require_once('./includes/footer.php');
?>