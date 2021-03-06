
<?php include('../connect_db.php') ?>
<?php include('include/script.php') ?>
<h1 class="app-page-title">Bank</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">

                <div class="app-content pt-3 p-md-3 p-lg-4">
                    <div class="container-xl">
                        <h1 class="app-page-title" style="font-size: 120%;">Add Bank</h1>
                        <hr class="mb-4">
                        <div class="row g-4 settings-section">
                            <div class="col-12 col-md-8">
                                <div class="app-card app-card-settings shadow-sm p-4">
                                    <div class="app-card-body">
                                        <?php
                                        if(isset($_POST) && !empty($_POST)){
                                            
                                        // print_r($_POST);
                                            $bank_name=$_POST['bank_name'];
                                            $bank_no=$_POST['bank_no'];

                                            $sql = "INSERT INTO bank (bank_no,bank_name) VALUES('$bank_no', '$bank_name')";
                                            if(mysqli_query($conn, $sql)){
                                                echo "Success!!";
                                            }else{
                                                echo "Fail: ".$sql."<br>". mysqli_error($conn);
                                            }
                                            mysqli_close($conn);
                                        } 
                                        // print_r($_POST);
                                        ?>
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <label class="form-label">Bank Name</label>
                                                <input type="text" class="form-control" name="bank_name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Bank No</label>
                                                <input type="text" class="form-control" name="bank_no">
                                            </div>
                                            <button type="submit" class="btn app-btn-primary">Add</button>
                                        </form>
                                    </div>
                                    <!--//app-card-body-->

                                </div>
                                <!--//app-card-->
                            </div>
                        </div>
                        <!--//row-->
                    </div>
                    <!--//container-fluid-->
                </div>
                <!--//app-content-->
            </div>
        </div>
    </div>
</div>
