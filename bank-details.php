<?php
require_once('./includes/header.php');
require_once('./includes/navbar.php');
?>
        <main>

            <section class="news-detail-header-section text-center">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h1 class="text-white">Bank Details</h1>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mx-auto p-5 rounded mt-5" style="background:#f5fbff !important;">
                        <?php
                        // available one record show data condition
                        $select1 = "select count(id) as total from tbl_bankdetails";
                        $query1 = mysqli_query($con,$select1);
                        $fetch1 =mysqli_fetch_array($query1);
                        $total = $fetch1["total"];


                        // fetch all data query
                        $select ="select * from tbl_bankdetails";
                        $result=mysqli_query($con,$select);
                        $fetch = mysqli_fetch_assoc($result);
                        if(!$total == 1){
                        ?>
                        <table class="table">
                            <tbody>
                                <tr>
                                <th scope="row">Payee Name</th>
                                <td> None </td>
                                </tr>
                                <tr>
                                <th scope="row">UPI ID </th>
                                <td> None</td>
                                </tr>
                                <tr>
                                <th scope="row">Pay on Phone Number </th>
                                <td> None </td>
                                </tr>
                            </tbody>
                            </table>
                            <?php
                        }else {
                            ?>
                            <table class="table">
                            <tbody>
                                <tr>
                                <th scope="row">Payee Name</th>
                                <td><?php echo $fetch["payeename"];?> </td>
                                </tr>
                                <tr>
                                <th scope="row">UPI ID </th>
                                <td><?php echo $fetch["upiid"];?></td>
                                </tr>
                                <tr>
                                <th scope="row">Pay on Phone Number </th>
                                <td><?php echo $fetch["phoneno"];?></td>
                                </tr>
                            </tbody>
                            </table>


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