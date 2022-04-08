
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
                        <h1 class="app-page-title" style="font-size: 120%;">Ed11111it Bank</h1>
                        <hr class="mb-4">
                        <div class="row g-4 settings-section">
                            <div class="col-12 col-md-8">
                                <div class="app-card app-card-settings shadow-sm p-4">
                                    <div class="app-card-body">
                                        <?php
                                        
                                        if(isset($_GET['bank_id']) && !empty($_GET['bank_id'])){
                                            $bank_id = $_GET['bank_id'];
                                            // $bank_name=$_GET['bank_name'];
                                            // $bank_no=$_GET['bank_no'];
                                            $sql = "SELECT * FROM bank WHERE bank_id = '$bank_id'";
                                            $query = mysqli_query($conn, $sql);
                                            $result = mysqli_fetch_assoc($query);

                                            
                                        $sql = "UPDATE bank SET bank_name = '$bank_name', bank_no = '$bank_no' WHERE bank_id = '$bank_id'";
                                        if(mysqli_query($conn, $sql)){
                                            echo "Success!!";
                                        }else{
                                            echo "Fail: ".$sql."<br>". mysqli_error($conn);
                                        }
                                        // mysqli_close($conn);
                                        }

                                        // if(isset($_POST) && !empty($_POST)){
                                        //     $bank_name=$_POST['bank_name'];
                                        //     $bank_no=$_POST['bank_no'];

                                        // // print_r($_POST);
                                        // //     $bank_name=$_POST['bank_name'];
                                        // //     $bank_no=$_POST['bank_no'];
                                        //     // $sql = "INSERT INTO bank (bank_no,bank_name) VALUES('$bank_no', '$bank_name')";
                                        //     // if(mysqli_query($conn, $sql)){
                                        //     //     echo "Success!!";
                                        //     // }else{
                                        //     //     echo "Fail: ".$sql."<br>". mysqli_error($conn);
                                        //     // }
                                        //     // mysqli_close($conn);
                                        // } 
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
                                            <button type="submit" class="btn btn-warning">Edit</button>
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
