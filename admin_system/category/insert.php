
<?php include('../connect_db.php') ?>
<?php include('include/script.php') ?>
<h1 class="app-page-title">Category</h1>
<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">

                <div class="app-content pt-3 p-md-3 p-lg-4">
                    <div class="container-xl">
                        <h1 class="app-page-title" style="font-size: 120%;">Add Category</h1>
                        <hr class="mb-4">
                        <div class="row g-4 settings-section">
                            <div class="col-12 col-md-8">
                                <div class="app-card app-card-settings shadow-sm p-4">
                                    <div class="app-card-body">
                                        <?php
                                        if(isset($_POST) && !empty($_POST)){
                                            
                                        // print_r($_POST);
                                            $category_id=$_POST['category_id'];
                                            $category_name=$_POST['category_name'];
                                            $cate_descrip=$_POST['cate_descrip'];

                                            $sql = "INSERT INTO category (category_id,category_name,cate_descrip) VALUES('$category_id', '$category_name', '$cate_descrip')";
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
                                                <label class="form-label">Category ID</label>
                                                <input type="text" class="form-control" name="category_id">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Category Name</label>
                                                <input type="text" class="form-control" name="category_name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Category Description</label>
                                                <input type="text" class="form-control" name="cate_descrip">
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
