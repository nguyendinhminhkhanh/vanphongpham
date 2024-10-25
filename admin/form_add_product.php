<?php
include "header.php";
?>

<div>
    <?php
    include 'left_menu.php'
        ?>
    <div class="content">
        <div class="container_content">
            <form method="POST" action="add_product.php" enctype="multipart/form-data">
                <h1>Thêm sản phẩm</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm: </label>
                    <input type="text" class="form-control" name="product_name" placeholder="Tên sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Ảnh sản phẩm: </label>
                    <input type="file" class="form-control" style="padding: 10px 20px;" name="product_img" placeholder="Tên sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Thông tin sản phẩm: </label>
                    <input type="text" class="form-control" name="product_info" placeholder="Thông tin sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Giá ban đầu: </label>
                    <input type="number" class="form-control" name="product_price" placeholder="Giá ban đầu" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Giá giá mới: </label>
                    <input type="number" class="form-control" name="price" placeholder="Giá sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title: </label>
                    <input type="text" class="form-control" name="title" placeholder="Title" required>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Loại sản phẩm</label>
                    <select class="form-select" id="validationCustom04" name="category_id" required>
                        <option selected disabled value="0">--Lựa chọn--</option>
                        <option value="1">Vở</option>
                        <option value="2">Sách</option>
                        <option value="3">Bút</option>
                        <option value="4">Bàn</option>
                        <option value="5">Giấy</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="margin-top: 10px;">Thêm</button>
            </form>
            <button type="submit" class="btn btn-secondary" style="margin-top: 10px;">Thoát</button>
        </div>
    </div>
</div>