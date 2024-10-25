<?php include "header.php";
$products = mysqli_query($conn, "SELECT * FROM product Order By id DESC LIMIT 4");
$newNotebook = mysqli_query($conn, "SELECT * FROM product WHERE category_id = '1' Order By id DESC LIMIT 4;");
$newBook = mysqli_query($conn, "SELECT * FROM product WHERE category_id = '2' Order By id DESC LIMIT 4;");
$newPen = mysqli_query($conn, "SELECT * FROM product WHERE category_id = '3' Order By id DESC LIMIT 4;");
$newDesk = mysqli_query($conn, "SELECT * FROM product WHERE category_id = '4' Order By id DESC LIMIT 4;");
$newPaper = mysqli_query($conn, "SELECT * FROM product WHERE category_id = '5' Order By id DESC LIMIT 4;"); ?>
<div class="container_index">
    <div class="container">
        <div class="wrapper">
            <section class="banner">
                <div class="slide-wrap">
                    <div class="slider">
                        <div class="slide" id="slide-1"><img src="./img/banner.jpg" alt=""></div>
                        <div class="slide1" id="slide-2"><img src="./img/banner01.jpeg" alt=""></div>
                        <div class="slide2" id="slide-3"><img src="./img/banner.jpg" alt=""></div>
                        <div class="slide3" id="slide-4"><img src="./img/banner01.jpeg" alt=""></div>
                    </div>
                </div>
            </section>
            <section class="category">
                <div class="container">
                    <div class="textProductNew">
                        <h2>Mới nhất <i class='bx bx-cart-add bx-flip-vertical bx-tada'
                                style='color:#FFFFFF;font-size: 35px;'></i></h2>
                    </div>
                    <ul class="category__list">
                        <?php foreach ($products as $prod): ?>
                            <li class="category__item">
                                <img src="<?php echo $prod['product_img']; ?>" alt="" class="category__image">
                                <h3 class="category__name"><?php echo $prod['product_name']; ?></h3>
                                <p class="card-text">
                                    <s>Giá cũ: <?php echo number_format($prod['product_price']); ?> đ</s>
                                    <br>
                                    <b>Giá: <?php echo number_format($prod['price']); ?> đ</b>
                                </p>
                                <div class="action" style="display: flex; justify-content: start;align-items: center;">
                                    <form method="POST" action="product_details.php" style="margin:0">
                                        <button class="btn btn-success"
                                            style="background-color: #28a745;font-weight: 600;padding:5px 10px; font-size:15px"
                                            name="product" value="<?php echo $prod['id']; ?>"><i
                                                class='bx bx-cart-add bx-tada'></i> More</button>
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
                <div style="display:flex;justify-content: flex-end;align-items: center;padding:0 5px">
                    <form method="POST" action="all_product.php">
                        <button type="submit" class="btn btn-danger" style=" padding:5px 10px;border:1px solid #333">Xem
                            thêm <i class='bx bx-chevrons-right'></i></button>
                    </form>
                </div>
            </section>


            <section class="category">
                <div class="container">
                    <div class="textProductNew">
                        <h2>Vở <i class='bx bx-book-open bx-tada bx-flip-vertical'
                                style='color:#FFFFFF;font-size: 35px;'></i>
                        </h2>
                    </div>
                    <ul class="category__list">
                        <?php foreach ($newNotebook as $prod): ?>
                            <li class="category__item">
                                <img src="<?php echo $prod['product_img']; ?>" alt="" class="category__image">
                                <h3 class="category__name"><?php echo $prod['product_name']; ?></h3>
                                <p class="card-text">
                                    <s>Giá cũ: <?php echo number_format($prod['product_price']); ?> đ</s>
                                    <br>
                                    <b>Giá: <?php echo number_format($prod['price']); ?> đ</b>
                                </p>
                                <div class="action" style="display: flex; justify-content: start;align-items: center;">
                                    <form method="POST" action="product_details.php" style="margin:0">
                                        <button class="btn btn-success"
                                            style="background-color: #28a745;font-weight: 600;padding:5px 10px; font-size:15px"
                                            name="product" value="<?php echo $prod['id']; ?>"><i
                                                class='bx bx-cart-add bx-tada'></i> More</button>
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
                <div style="display:flex;justify-content: flex-end;align-items: center;padding:0 5px">
                    <form method="POST" action="all_note_book.php">
                        <button type="submit" class="btn btn-danger" style=" padding:5px 10px;border:1px solid #333">Xem
                            thêm <i class='bx bx-chevrons-right'></i></button>
                    </form>
                </div>
            </section>

            <section class="category">
                <div class="container">
                    <div class="textProductNew">
                        <h2>Sách <i class='bx bx-book-bookmark bx-tada bx-flip-vertical'
                                style='color:#FFFFFF;font-size: 35px;'></i></h2>
                    </div>
                    <ul class="category__list">
                        <?php foreach ($newBook as $prod): ?>
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
                                            name="product" value="<?php echo $prod['id']; ?>"><i
                                                class='bx bx-cart-add bx-tada'></i> More</button>
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
                <div style="display:flex;justify-content: flex-end;align-items: center;padding:0 5px">
                    <form method="POST" action="all_book.php">
                        <button type="submit" class="btn btn-danger" style=" padding:5px 10px;border:1px solid #333">Xem
                            thêm <i class='bx bx-chevrons-right'></i></button>
                    </form>
                </div>
            </section>

            <section class="category">
                <div class="container">
                    <div class="textProductNew">
                        <h2>Bút các loại <i class='bx bx-edit-alt bx-tada bx-flip-vertical'
                                style='color:#FFFFFF;font-size: 35px;'></i></h2>
                    </div>
                    <ul class="category__list">
                        <?php foreach ($newPen as $prod): ?>
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
                                            name="product" value="<?php echo $prod['id']; ?>"><i
                                                class='bx bx-cart-add bx-tada'></i> More</button>
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
                <div style="display:flex;justify-content: flex-end;align-items: center;padding:0 5px">
                    <form method="POST" action="all_pen.php">
                        <button type="submit" class="btn btn-danger" style=" padding:5px 10px;border:1px solid #333">Xem
                            thêm <i class='bx bx-chevrons-right'></i></button>
                    </form>
                </div>
            </section>

            <section class="category">
                <div class="container">
                    <div class="textProductNew">
                        <h2>Giấy các loại <i class='bx bx-note bx-tada bx-flip-vertical'
                                style='color:#FFFFFF;font-size: 35px;'></i></h2>
                    </div>
                    <ul class="category__list">
                        <?php foreach ($newPaper as $prod): ?>
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
                                            name="product" value="<?php echo $prod['id']; ?>"><i
                                                class='bx bx-cart-add bx-tada'></i> More</button>
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
                <div style="display:flex;justify-content: flex-end;align-items: center;padding:0 5px">
                    <form method="POST" action="all_paper.php">
                        <button type="submit" class="btn btn-danger" style=" padding:5px 10px;border:1px solid #333">Xem
                            thêm <i class='bx bx-chevrons-right'></i></button>
                    </form>
                </div>
            </section>

            <div style="border-top: 5px solid pink"></div>
            <section class="connect" style="margin-top:10rem;margin-bottom:10rem">
                <div class="container">
                    <ul class="connect__list">
                        <li class="connect__item">
                            <img src="https://thanhdatpc.vn/template/client/img/certificate.svg" alt=""
                                class="connect__image">
                            <h1>Cam kết chất lượng</h1>
                            <p>Tuyệt đối an tâm</p>
                        </li>
                        <li class="connect__item">
                            <img src="https://thanhdatpc.vn/template/client/img/quality.svg" alt=""
                                class="connect__image">
                            <h1>Bảo hành</h1>
                            <p>1 đổi 1 nếu gặp lỗi của nhà sản xuất</p>
                        </li>
                        <li class="connect__item">
                            <img src="https://thanhdatpc.vn/template/client/img/money-svgrepo-com.svg" alt=""
                                class="connect__image">
                            <h1>Cam kết về giá</h1>
                            <p>Khỏi mất công so sánh giá</p>
                        </li>
                        <li class="connect__item">
                            <img src="	https://thanhdatpc.vn/template/client/img/manager.svg" alt=""
                                class="connect__image">
                            <h1>Dịch vụ</h1>
                            <p>Trợ giá cho sỉ lẻ</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section style="padding: 20px;">
                <h1 style="display:flex; justify-content:center;padding-bottom:10px;">Hệ thống cửa hàng của DELI</h1>
                <div class="map-container">
                    
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7837.172357726544!2d106.626736!3d10.842947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a299b2d6b9d%3A0xa6cea4b60aeaa650!2zVsSDbiBQaMOybmcgUGjhuqltIEhvw6BuZyBUaGnDqm4gw4Ju!5e0!3m2!1svi!2sus!4v1729844955727!5m2!1svi!2sus"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </section>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>