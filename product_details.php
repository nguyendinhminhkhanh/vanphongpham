<?php
include "header.php";
$id = $_POST['product'];
$product = mysqli_query($conn, "SELECT * FROM product WHERE id = '$id'");

?>


<section class="feature" style="backgroung: pink">
    <!-- <div style="margin-left:20rem">
        <button type="button" class="btn btn-danger" style="border:1px solid #333"><i class='bx bx-chevrons-left' ></i> Quay lại</button>
    </div> -->
    <div class="container">
        <div class="feature__item">
            <?php foreach ($product as $prod): ?>
                <div class="feature__image" style="display:flex;justify-content: center;margin:10px">
                    <img src="<?php echo $prod['product_img'] ?>" alt="" style="width:70%">
                </div>
                <div class="feature__info"
                    style="background-color: pink;padding:20px;border-radius:5px;border:1px solid #333;">
                    <h3 class="feature__title"><?php echo $prod['product_name'] ?></h3>
                    <p><i class='bx bx-group'></i> 10  Lượt xem</p>
                    <p class="feature-feature__desc">
                    <?php echo $prod['product_info'] ?>
                    </p>
                    <p class="feature-feature__desc">
                    <?php echo $prod['title'] ?>
                    </p>
                    <ul class="feature-intro__list">
                        <h4><s style="padding: 10px">Giá cũ: <?php echo number_format($prod['product_price']); ?> đ</s></h4>

                        <h1 style=" color:red">Giá: <?php echo number_format($prod['price']); ?> đ
                        </h1>
                    </ul>
                    <div style="display:flex; padding:-10px">
                        <form method="POST" action="product_details.php" style="margin:0">
                            <button class="btn btn-success"
                                style="background-color: #28a745;font-weight: 600;padding:5px 10px; font-size:15px"
                                name="product" value="<?php echo $prod['id']; ?>"><i class='bx bx-cart-add bx-tada'></i>
                                Đặt mua ngay</button>
                        </form>
                        <form method="POST" action="product_details.php" style="margin:0">
                            <button class="btn btn-success"
                                style="background-color: red;font-weight: 600;padding:5px 10px; font-size:15px"
                                name="product" value="<?php echo $prod['id']; ?>"><i class='bx bx-cart-add bx-tada'></i>
                                Thêm vào giỏ hàng</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>



<?php
include "footer.php";
?>