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
                <!-- <h1>Quản lý sản phẩm</h1>
                <form method="POST" action="form_add_product.php">
                    <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
                </form> -->
            </div>
        </div>
    </div>
</div>
<script src="../style/bootstrap.bundle.min.js"></script>