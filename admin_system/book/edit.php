<?php include('../connect_db.php');

?>
<?php include('include/script.php');
if(isset($_GET['book_id']) && !empty($_GET['book_id'])){
    $id =$_GET['book_id'];
    $sql = "SELECT * FROM book WHERE book_id ='$id'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);
} 
if (isset($_POST) && !empty($_POST)) 
{

    // print_r($_POST);
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
        if(in_array($ext,$extension))
        {
            if(!file_exists($target.$filename)){
                if(move_uploaded_file($filetmp,$target.$filename)){
                    $filename = $filename;
                }else{
                    
                    $alert ='<script type="text/javascript>">';
                    $alert .= 'alert("เพิ่มไฟล์เข้า folder ไม่สำเร็จ");';
                    $alert .= 'window.location.href ="?page=book&function=add";';
                    $alert .= '</script>';
                    echo $alert;
                    exit();
                }
            }else{
                $newfilename = time().$filename;if(move_uploaded_file($filetmp,$target.$newfilename)){
                    $filename = $newfilename;
                }else{
                    
                    $alert ='<script type="text/javascript>">';
                    $alert .= 'alert("เพิ่มไฟล์เข้า folder ไม่สำเร็จ");';
                    $alert .= 'window.location.href ="?page=book&function=add";';
                    $alert .= '</script>';
                    echo $alert;
                    exit();
                }
            }

        }else{
            
            $alert ='<script type="text/javascript>">';
            $alert .= 'alert("ประเภทไฟล์ไม่ถูกต้อง");';
            $alert .= 'window.location.href ="?page=book&function=add";';
            //$alert .= 'return false;';
            $alert .= '</script>';
            echo $alert;
            exit();
        }
    }else{
        
        $alert ='<script type="text/javascript>">';
        $alert .= 'alert("ค้นไม่พบ");';
        $alert .= 'window.location.href ="?page=book&function=add";';
        $alert .= '</script>';
        echo $alert;
        exit();
    }
    echo $filename = $oldimage ;
    exit();

    $sql = "UPDATE book SET book_id='$id', category_id='$category', book_name='$name', price='$price', description='$description',book_img='$filename' WHERE book_id='$id'";
    
    if (mysqli_query($conn, $sql)) 
    {
    //echo "เพิ่มข้อมูลสำเร็จ";
    $alert ='<script type="text/javascript>">';
    $alert .= 'alert("เพิ่มข้อมูลสำเร็จ");';
    $alert .= 'window.location.href ="?page=book";';
    $alert .= '</script>';
    echo $alert;
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
}

?>
<div class="row justify-content-between">
    <div class="col-auto">
    <h1 class="app-page-title p-4 mb-0 mt-0 ">Book </h1> 
    </div>

<div class="col-auto">
    
<a href="?page=<?=$_GET['page']?>" class="btn btn-success float-left">back</a>
</div>
</div>


<hr class="mb-4">
<div class="row g-4 setting-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-setting shadow-sm p-4">
            <div class="app-card-body">

                <div class="app-content pt-3 p-md-3 p-lg-4">
                    <div class="container-xl">
                        <h1 class="app-page-title" style="font-size: 120%;">Edit Book</h1>
                        <hr class="mb-4">
                        <div class="row g-4 settings-section">
                            <div class="col-12 col-md-8">
                                <div class="app-card app-card-settings shadow-sm p-4">
                                    <div class="app-card-body">
                                        
                                        <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
									    <label  class="form-label">Image</label>
                                        <div class="mb-23">
                                        <img id="preview" src="upload/admin/<?=$result['book_img']?>" class="rounded float-start" width="100" height="100">
                                        </div>
                                        <!button onclick="return triggerFile();" class="btn vtb-success"></!button>
									    <input type="file" class="form-control" name="book_img" id="image" value="<?=$result['book_img']?>" style=" ">
                                        <input type="hidden" name="oldimage" value="<?=$result['book_img']?>">
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">ID </label>
									    <input type="text" class="form-control" name="book_id" placeholder="id" value="<?=$result['book_id']?>" autocomplete="off" required>
									</div>
								    
                                    <div class="mb-3">
									    <label  class="form-label">Category</label>
									    <input type="text" class="form-control" name="category_id" placeholder="หมวดหมู่" value="<?=$result['category_id']?>" autocomplete="off" required>
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">Name</label>
									    <input type="text" class="form-control" name="book_name" placeholder="ชื่อหนังสือ" value="<?=$result['book_name']?>" autocomplete="off"  required>
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">Price </label>
									    <input type="text" class="form-control" name="price" placeholder="ราคา" value="<?=$result['price']?>" autocomplete="off" required>
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">Description</label>
									    <input type="text" class="form-control" name="description" placeholder="รายละเอียด" value="<?=$result['description']?>" autocomplete="off" required>
									</div>
                                    
									<button type="submit" class="btn app-btn-primary" >Save </button>
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