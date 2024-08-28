<!-- ishan auto portal enquiry form start here -->
<!-- <section id="ishan-enquiry">
<div class="w-25 p-2 enquiry"> 
<p class="p-1 fs-3"><a href="" data-bs-toggle="modal" data-bs-target="#enq">Enquiry with us</a></p> 
</div> -->

<!-- enquiry modal created here -->

<?php
require_once('config.php');


if(isset($_POST["send_btn"])){

    date_default_timezone_set("Asia/Calcutta");
    $name = $_POST["uname"];
    $ph = $_POST["phone"];
    $mail = $_POST["e-mail"];
    $cName = $_POST["state-name"];
    $seg_name = $_POST["segment-name"];
    $inve_name = $_POST["investment-name"];
    $added_date = date("d/m/Y H:i:s");
 
    $insert = "insert into tbl_getlivedemo(getusernmae,getphone,getemail,getcname,getsegname,getinvename,added_date) values('$name','$ph','$mail','$cName','$seg_name','$inve_name','$added_date')";
    $query=mysqli_query($conn,$insert);
    // $exe=mysqli_query($con,$insert);

        
            echo "<script>
            alert('data is successfully sent')
            window.location='packages.php';
            </script>";
       
           
}


?>





<div class="modal fade" id="enq" role="dialog">
    <div class="modal-dialog" style="min-width:45%;margin-top:5%;">
    <div class="modal-content p-5">
     <div class="row border p-3">
     <h3 class="mb-4 text-center">Get Live Demo</h3>
            <form method="post" class="border p-3">
                <!-- <div class="mt-2 ">
                    <button type="button" class="btn btn-sm btn-danger border border-0 float-end" data-bs-dismiss="modal">&times</button>
                </div> -->
                <div class="row">
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="uname" placeholder="Name *" required class="form-control">
                </div>
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="uname" placeholder="Surname *" required class="form-control">
                </div>
                
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="phone" placeholder="Phone *" required class="form-control">
                </div>
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="phone" placeholder="Whatsapp No *" required class="form-control">
                </div>
                
                <div class="input-group mt-2">
                    <input type="text" name="email" placeholder="Email *" required class="form-control">
                </div>

                <div class="form-group mt-2">
                     <select name="state-name" id="donation-name" class="form-control" required>
                        <option value="#" >--Please choose an State--</option>

                        <?php
                        $select = "select * from tbl_state";
                        $query = mysqli_query($conn,$select);
                        
                        while($fatch=mysqli_fetch_array($query)) {
                            
                        ?>
                            
                            <option value="<?php echo $fatch["state_name"]; ?>"><?php echo $fatch["state_name"]; ?></option>

                        <?php
                            }
                            ?>
                    </select>
                </div>
               
                <div class="form-group mt-2">
                <select name="segment-name" class="form-control" required>
                        <option value="#">--Please choose an Segment--</option>
                        <option value="Equity Cash/Intraday">Equity Cash / Intraday</option>
                        <option value="Options (call/put)">Options (call / put)</option>
                        <option value="Futures">Futures </option>
                        <option value="Index">Index</option>
                    </select>
                </div>
                
                
                <div class="form-group mt-2">
                    <select name="state-name"  class="form-control" required>
                        <option value="#" >--Please choose an Investment--</option>
                        <option value="above 50000">Above INR Rs 50000</option>
                        <option value="Above 1 lac">Above INR Rs 1 Lac</option>
                        <option value="Above 3 lac">Above INR 3 Lac</option>
                        <option value="Above 5 lac">Above INR 5 Lac</option>
                    </select>
                </div>

                <div class="form-group mt-2">
                    <input class="form-check-input" type="checkbox" name="DonationPayment" id="flexRadioDefault9" required>
                    <label class="form-check-label" for="flexRadioDefault9">
                        I Accept <u><a href="terms-condition.php">Terms and Conditions</a></u>
                    </label>
                </div>
            

                <div class="input-group text-center mt-2">
                    <input type="submit"  name="send_btn" value="Send" class="btn btn-lg btn-dark border border-0">
                    <button type="button"  style="width:80px;font-size:18px;" class="btn ms-3 btn-sm btn-danger border border-0 float-end" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </form>
        
     </div>     


    </div>
    </div>
</div>

</section>   
