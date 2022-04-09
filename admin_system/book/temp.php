
            <table class="table mb-4" id="tabelAll">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $data); ?>
                        <tr>
                        <td><?= $data['book_id'] ?></td>
                        <td><?= $data['category_id'] ?></td>
                        <td><?= $data['book_name'] ?></td>
                        <td><?= $data['price'] ?></td>
                        <td><?= $data['description'] ?></td>
                        <td><img src="upload/admin/<?= $data['book_img'] ?>" width="100" height="100"></td>
                            <td>
                            <a href="?page=>?=$_GET['page']?>&function=update&id=<?= $data['book_id']?>" class="btn btn-sm btn-warning p-1 mb-2 ">Edit</a>
                            <a href="?page=>?=$_GET['page']?>&function=delete&id=<?= $data['book_id']?>" onclick="return confirm('คุณต้องการลบใชไหม')" class="btn btn-sm btn-danger p-1 mb-2">Delete</a>
                            </td>
                        </tr>
                    
                    

                </tbody>
            </table>