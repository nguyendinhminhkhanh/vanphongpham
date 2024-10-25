<?php
include '../connect.php';

// Kiểm tra nếu id đã được gửi qua POST
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Trước khi xóa sản phẩm, lấy đường dẫn ảnh của sản phẩm đó
    $sql_select = "SELECT product_img FROM product WHERE id = ?";
    $stmt_select = $conn->prepare($sql_select);
    $stmt_select->bind_param("i", $id);
    $stmt_select->execute();
    $stmt_select->bind_result($product_img);  // Lấy đường dẫn ảnh
    $stmt_select->fetch();
    $stmt_select->close();

    // Kiểm tra nếu ảnh tồn tại và xóa ảnh
    if ($product_img && file_exists($_SERVER['DOCUMENT_ROOT'] . $product_img)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . $product_img);  // Xóa file ảnh
    }



    // Chuẩn bị câu truy vấn xóa
    $sql = "DELETE FROM product WHERE id = ?";

    // Chuẩn bị statement để ngăn chặn SQL Injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);  // "i" đại diện cho kiểu số nguyên (integer)

    // Thực hiện câu truy vấn
    if ($stmt->execute()) {
        echo "Sản phẩm đã được xóa thành công!";
        header('location: product_management.php');
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng kết nối
    $stmt->close();
}

$conn->close();
?>