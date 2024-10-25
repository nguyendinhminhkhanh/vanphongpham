<?php 
ob_start();
session_start();
include 'connect.php'; 
// $cats = mysqli_query($conn,"SELECT * FROM danh_muc Order By ten_danh_muc ASC");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Văn phòng phẩm</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Pichforest">


    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">

    <!--Unicons Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!-- tinyslider -->
    <link rel="stylesheet" type="text/css" href="style/tiny-slider.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">

    <!-- custom Css -->
    <link rel="stylesheet" id="app-css" type="text/css" href="style/style.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <!-- <link rel="stylesheet" href="./style/index.css"> -->
     <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top nav-sticky sticky" id="navbar">
        <div class="container">
            <a class="navbar-brand logo" href="index.php">
                <span class="logo-light-mode">
                    <img src="img/logo.png" class="logo-light" alt="" height="22">
                    <img src="img/logo.png" class="logo-dark" alt="" height="22">
                </span>
                <!-- <img src="images/logo-light.png" class="logo-dark-mode" alt="" height="22"> -->
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link " href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="all_product.php">Tất cả</a></li>
                            <li><a class="dropdown-item" href="all_note_book.php">Vở</a></li>
                            <li><a class="dropdown-item" href="all_book.php">Sách</a></li>
                            <li><a class="dropdown-item" href="all_pen.php">Bút</a></li>
                            <li><a class="dropdown-item" href="#">Bàn</a></li>
                            <li><a class="dropdown-item" href="all_paper.php">Giấy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Thông tin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Về chúng tôi</a></li>
                            <li><a class="dropdown-item" href="#">Về sản phẩm</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopping_cart.php">Giỏ hàng</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tài khoản
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cập nhật thông tin</a></li>
                            <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                            <li><a class="dropdown-item" href="./login.php">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>