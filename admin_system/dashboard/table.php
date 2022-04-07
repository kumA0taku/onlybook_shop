<?php 
$sql = "SELECT * FROM stock";
$query = mysqli_query($connect,$sql);


?>
<h1 class="app-page-title">Add Stock</h1>
        <hr class="mb-4">
                <div class="row g-4 settings-section">
	                
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								<?php include("insert.php"); ?>
                                <a href="?page=<?=$_GET['page']?> &function=add" class="byn btn-success p-2 float-right">Add</a>
							<table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">รหัสที่เก็บ</th>
                                    <th scope="col">รหัสหนังสือ</th>
                                    <th scope="col">quality</th>
                                    <th scope="col">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($query as $data); ?>
                                        <tr>
                                            

                                            <td><?=$data['stock_id']?></td>
                                            <td><?=$data['book_id']?></td>
                                            <td><?=$data['qty']?></td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                        </tr>
                                    <?php  ?>
                                
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
				<?php mysqli_close($connect); ?>
                

