
<?php
$sql = "SELECT * FROM book";
$query = mysqli_query($connect,$sql);


?>
<h1 class="app-page-title">ตารางข้อมูลหนังสือ</h1>
        <hr class="mb-12">
                <div class="row g-20 settings-section">
	                
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
                            <a href="?page=<?=$_GET['page']?> &function=add" class="byn btn-success p-2 float-right">เพิ่มหนังสือ</a>
                            <table class="table" id="mytable">
                                <thead>
                                    <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Categoey</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($query as $data); ?>
                                        <tr>
                                            

                                            <td><?=$data['book_id']?></td>
                                            <td><?=$data['category_id']?></td>
                                            <td><?=$data['book_name']?></td>
                                            <td><?=$data['price']?></td>
                                            <td><?=$data['description']?></td>
                                            <td><img src="upload/admin/<?=$data['book_img']?>" width="100" height="100"></td>
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </tr>
                                    <?php ; ?>
                                </tbody>
                                </table>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                <?php mysqli_close($connect); ?>