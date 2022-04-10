
                        <?php foreach ($rs as $data) : ?>
                            <tr>
                                <td><?= $data['book_name'] ?></td>
                                <td><?= $data['total_qty'] ?></td>
                                <td><?= $data['total_price'] ?></td>
                                <td>
                                    <a href="?page=<?= $_GET['page'] ?>&function=add_to_cart&id=<?= $data['book_id'] ?>" class="btn btn-sm btn-success">Add to Cart</a>
                                </td>
                            </tr>
                        <?php endforeach ?>