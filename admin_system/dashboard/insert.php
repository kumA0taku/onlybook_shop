<?php 
                                    //print_r($_POST);
                                    if(isset($_POST) && !empty($_POST))
                                    {
                                        //print_r($_POST);
                                        // echo '<pre>';
                                        // print_r($_FILES);
                                        // echo '</pre>';
                                        // exit();
                                        $stock_id = $_POST["stock_id"];
                                        $book_id = $_POST["book_id"];
                                        $quality = $_POST["qty"];

                                        
                                        $sql = "INSERT INTO stock (stock_id, book_id, qty)
                                        VALUES ('$stock_id','$book_id','$quality', )";

                                        if (mysqli_query($connect, $sql)) {
                                        echo "เพิ่มข้อมูลสำเร็จ";
                                        } else {
                                        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                                            }

                                            mysqli_close($connect);
                                    }
                                ?>
							    <form action="" method="post" enctype="multipart/form-data">
                                
                                    <div class="mb-3">
									    <label  class="form-label">รหัสที่เก็บ</label>
									    <input type="text" class="form-control" name="stock_id" placeholder="รหัสที่เก็บ"  required>
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">รหัสหนังสือ</label>
									    <input type="text" class="form-control" name="book_id" placeholder="รหัสหนังสือ"  required>
									</div>
                                    <div class="mb-3">
									    <label  class="form-label">Quality</label>
									    <input type="text" class="form-control" name="qty" placeholder="จำนวน"  required>
									</div>
								    
									<button type="submit" class="btn app-btn-primary" >Save </button>
							    </form>
