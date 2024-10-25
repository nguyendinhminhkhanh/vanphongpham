<?php
include "../connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_info = $_POST['product_info'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $title = $_POST['title'];

    // Kiểm tra xem file có được upload không
    if (isset($_FILES['product_img']) && $_FILES['product_img']['error'] == 0) {
        // Thư mục lưu ảnh
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/Website_VanPhongPham/img/uploads/";  
        $target_file = $target_dir . basename($_FILES['product_img']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Kiểm tra xem file có phải là hình ảnh không
        $check = getimagesize($_FILES['product_img']['tmp_name']);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File không phải là ảnh.";
            $uploadOk = 0;
        }

        // Kiểm tra nếu file đã tồn tại
        // if (file_exists($target_file)) {
        //     echo "File đã tồn tại.";
        //     $uploadOk = 0;
        // }

        // Kiểm tra kích thước file (giới hạn 500KB)
        // if ($_FILES['product_img']['size'] > 500000) {
        //     echo "File quá lớn.";
        //     $uploadOk = 0;
        // }

        // Chỉ cho phép các định dạng file ảnh (JPG, PNG, JPEG, GIF)
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Chỉ cho phép các định dạng JPG, JPEG, PNG & GIF.";
            $uploadOk = 0;
        }

        // Kiểm tra uploadOk để đảm bảo file hợp lệ
        if ($uploadOk == 1) {
            // Upload file
            if (move_uploaded_file($_FILES['product_img']['tmp_name'], $target_file)) {
                // File đã được upload thành công, lưu đường dẫn vào cơ sở dữ liệu
                $product_img = "/Website_VanPhongPham/img/uploads/" . basename($_FILES['product_img']['name']);

                // Chuẩn bị câu truy vấn thêm bản ghi
                $sql = "INSERT INTO product (product_name, product_img, product_price, category_id, product_info, price, title ) VALUES (?,?,?,?,?,?,?)";

                // Sử dụng prepared statements để bảo vệ khỏi SQL Injection
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssiisis", $product_name, $product_img, $product_price, $category_id, $product_info,$price,$title); // "s" cho string, "i" cho integer

                // Thực hiện câu truy vấn
                if ($stmt->execute()) {
                    echo "Thêm sản phẩm thành công!";
                    header('location: product_management.php');
                    exit();
                } else {
                    echo "Lỗi: " . $stmt->error;
                }

                // Đóng statement và kết nối
                $stmt->close();
            } else {
                echo "Có lỗi khi upload file.";
            }
        } else {
            echo "File không được upload.";
        }
    } else {
        echo "Không có file nào được chọn.";
    }

    $conn->close();
}
?>


?>