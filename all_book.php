<?php
include "header.php";
$book = mysqli_query($conn, "SELECT * FROM product WHERE category_id = '2' Order By id DESC;");

    ?>
<section class="category" style="display:flex">
    <?php include "left_book.php"?>
    <div class="container" style="padding-top:6rem">
        <div class="textProductNew">
            <h2>Sách các loại <i class='bx bx-edit-alt bx-tada bx-flip-vertical'
                    style='color:#FFFFFF;font-size: 35px;'></i>
            </h2>
        </div>
        <ul class="category__list">
            <?php foreach ($book as $prod): ?>
                <li class="category__item">
                    <img src="<?php echo $prod['product_img']; ?>" alt="" class="category__image">
                    <h3 class="category__name"><?php echo $prod['product_name']; ?></h3>
                    <p class="card-text">
                        <b>Giá: <?php echo number_format($prod['product_price']); ?> đ</b>
                    </p>
                    <div class="action" style="display: flex; justify-content: start;align-items: center;">
                        <form method="POST" action="product_details.php" style="margin:0">
                            <button class="btn btn-success"
                                style="background-color: #28a745;font-weight: 600;padding:5px 10px; font-size:15px"
                                name="product" value="<?php echo $prod['id']; ?>"><i class='bx bx-cart-add bx-tada'></i>
                                More</button>
                        </form>
                        <form method="POST" action="product_details.php" style="margin:0; margin-left:10px">
                            <button class="btn btn-success"
                                style="background-color: #dc3545;font-weight: 600;padding:5px 10px; font-size:15px"
                                name="product" value="<?php echo $prod['id']; ?>"><i
                                    class='bx bx-message-square-add bx-tada'></i>Giỏ</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<a href="./admin/index.php">123</a>
<?php
include "footer.php";
?>