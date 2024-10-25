<?php
include "header.php";
$products = mysqli_query($conn, "SELECT * FROM customer Order By id DESC");
?>

<div>
    <?php
    include 'left_menu.php'
        ?>
    <div class="content">
        <div class="container_content">
            <div>
                <h1>Quản lý khách hàng</h1>
                <form method="POST" action="form_add_product.php">
                    <button type="submit" class="btn btn-success">Thêm khách hàng</button>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Mật khẩu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $prod): ?>
                        <tr>
                            <th scope="row"><?php echo $prod['id']; ?></th>
                            <td><?php echo $prod['fullname']; ?></td>
                            <td><?php echo $prod['user_name']; ?></td>
                            <td><?php echo $prod['email']; ?></td>
                            <td><?php echo $prod['phone']; ?></td>
                            <td><?php echo $prod['address']; ?></td>
                            <td><?php echo $prod['password']; ?></td>
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