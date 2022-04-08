
<!div class="app-wrapper">
        <!div class="app-content pt-3 p-md-3 p-lg-4">
        <!div class="container-xl">
        <h1 class="app-page-title" >เพิ่มข้อมูลหนังสือ</h1>
        <hr class="mb-8" >
                <div class="row g-4 settings-section">
	                
	                <div class="col-12 col-md-12" >
		                <div class="app-card app-card-settings shadow-sm p-5" >
						    
						    <div class="app-card-body" >
                                <?php 
                                if(isset($_GET['book_id']) && !empty($_GET['book_id'])){
                                    $id = $_GET["book_id"];
                                    $sql = "SELECT * FROM book WHERE book_id='$id'";
                                    $query = mysqli_query($connect,$sql);
                                    $result = mysqli_fetch_assoc($query);
                                }
                                    //print_r($_POST);
                                    if(isset($_POST) && !empty($_POST))
                                    {
                                        //print_r($_POST);
                                        // echo '<pre>';
                                        // print_r($_FILES);
                                        // echo '</pre>';
                                        // exit();
                                        $id = $_POST["book_id"];
                                        $name = $_POST["book_name"];
                                        $price = $_POST["price"];
                                        $category = $_POST["category_id"];
                                        $description = $_POST["description"];
                                        $oldimage =$_POST['oldimage'];

                                        if(isset($_FILES["book_img"]["name"]) && !empty($_FILES["book_img"]["name"])){
                                            $extension = array("jpeg","jpg","png");
                                            $target = "upload/admin/";
                                            $filename = $_FILES["book_img"]["name"];
                                            $filetmp = $_FILES["book_img"]["tmp_name"];
                                            $ext = pathinfo($filename,PATHINFO_EXTENSION);
                                            //echo $ext;
                                            if(in_array($ext,$extension)){
                                                if(!file_exists($target.$filename)){
                                                    if(move_uploaded_file($filetmp,$target.$filename)){
                                                        $filename = $filename;
                                                    }else{
                                                        echo "เพิ่มไฟล์เข้า folder ไม่สำเร็จ";
                                                    }
                                                }else{
                                                    $newfilename = time().$filename;if(move_uploaded_file($filetmp,$target.$newfilename)){
                                                        $filename = $newfilename;
                                                    }else{
                                                        echo "เพิ่มไฟล์เข้า folder ไม่สำเร็จ";
                                                    }
                                                }

                                            }else{
                                                echo "ประเภทไฟล์ไม่ถูกต้อง";
                                            }
                                        }else{
                                            $filename =$oldimage;
                                        }
                                        //echo $filename;
                                        exit();
                                        
                                        $sql = "UPDATE book SET book_id="$id",category="$category",book_name="$name",price="$price",description="$description", book_img="$image" WHERE id=" " " ;
                                        

                                        if (mysqli_query($connect, $sql)) {
                                        echo "เพิ่มข้อมูลสำเร็จ";
                                        } else {
                                        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                                            }

                                            mysqli_close($connect);
                                    }
                                ?>
                                <script type="text/javascript">

                                </script>
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                         <h1 class="app-page-title mb-0">แก้ไขข้อมูล</h1>
                                    </div>
                                    <div class="col-auto">
                                        <a href="?page=>?=$_GET['page']?>" class="btn app-btn-secondary">phvod]y[</a>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="row g-4 settings-section">
                                    <div class="col-12 col-md-12">
                                        <div class="app-card app-card-setting shadow-sm p-4">
                                            <div class="mb-3">
                                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
									    <label  class="form-label">Image</label>
                                        <div class="mb-23">
                                        <img id="preview" src="upload/admin<?=$result['book_img']?>" class="rounded" width="150" height="150">
                                        </div>
                                        <button onclick="return triggerFile();" class="btn vtb-success">เลือกรูปภาพ</button>
									    <input type="file" class="form-control" name="book_img" id="image" style="display:none">
                                        <input type="hidden" name="oldimage" value="<?=$result['book_img']?>">
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">ID </label>
									    <input type="text" class="form-control" name="book_id" placeholder="id"  required
                                        value="<?=$result['book_id']?>" autocomplete="off">
									</div>
								    
                                    <div class="mb-3">
									    <label  class="form-label">Category</label>
									    <input type="text" class="form-control" name="category_id" placeholder="หมวดหมู่"  required
                                        value="<?=$result['category_id']?>" autocomplete="off">
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">Name</label>
									    <input type="text" class="form-control" name="book_name" placeholder="ชื่อหนังสือ" 
                                         value="<?=$result['book_name']?>" autocomplete="off" required>
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">Price </label>
									    <input type="text" class="form-control" name="price"
                                        value="<?=$result['price']?>" autocomplete="off" placeholder="ราคา"  required>
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">Description</label>
									    <input type="text" class="form-control" name="description" placeholder="รายละเอียด" 
                                        value="<?=$result['Description']?>" autocomplete="off" required>
									</div>
                                    
									<button type="submit" class="btn app-btn-primary" >Save </button>
							    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							    
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                
            <!--//container-fluid-->
        </!div>
        <!--//app-content-->
        <!--<!?php include('include/footer.php') ?>-->
        <!--//app-footer -->
    </!div>
    <script type="text/javascript">
            function readURL(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $("#preview").attr("src", e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            } 
            $("#image").change(function() {
                readURL(this);
            });
    </script>

