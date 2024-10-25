<?php
include "header.php";
$products = mysqli_query($conn, "SELECT * FROM product Order By id DESC");
?>

<div>
    <?php
    include 'left_menu.php'
        ?>
    <div class="content">
        <div class="container_content">
            <div>
                <h1>Quản lý sản phẩm</h1>
                <form method="POST" action="form_add_product.php">
                    <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Giá cũ</th>
                        <th scope="col">Giá mới</th>
                        <th scope="col">Thông tin sản phẩm</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $prod): ?>
                        <tr>
                            <th scope="row"><?php echo $prod['id']; ?></th>
                            <td><?php echo $prod['product_name']; ?></td>
                            <td><?php echo $prod['product_img']; ?></td>
                            <td><?php echo $prod['product_price']; ?></td>
                            <td><?php echo $prod['price']; ?></td>
                            <td><?php echo $prod['product_info']; ?></td>
                            <td><?php echo $prod['category_id']; ?></td>
                            <td><?php echo $prod['title']; ?></td>
                            <td style="display:flex; justify-content: center; align-items: center;">
                                <!-- <div style="margin-right: 10px">
                                    <form method="POST" action="delete_product.php" style="margin:0">
                                        <input type="hidden" name="id" value=<?php echo $prod['id']; ?>>
                                        <button type="submit" class="btn btn-warning"
                                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">Sửa</button>
                                    </form>
                                </div> -->
                                <div>
                                    <form method="POST" action="delete_product.php" style="margin:0">
                                        <input type="hidden" name="id" value=<?php echo $prod['id']; ?>>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">Xóa</button>
                                    </form>
                                </div>

                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="../style/bootstrap.bundle.min.js"></script>