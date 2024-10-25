<?php
include '../connect.php';
include 'header.php';
$err = " ";
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_account WHERE email = '$email' AND password = '$password'";

    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) == 1) {
        $kh = mysqli_fetch_assoc($query);
        $_SESSION['kh_login'] = $kh;
        header('location: index.php');

    } else {
        $err = "Thông tin đăng nhập không chính xác";
    }
}
?>
<div class="container-login">
    <div class="login">
        <div class="left-side">
            <!-- <h1>Chào mừng bạn đến với cửa hàng văn phòng phẩm</h1>
            <p>Bạn hãy đăng nhập để có thể tìm kiếm những đồ dùng hữu ích cho mình <br>
                Bạn chưa có tài khoản? <a href="./register.php">Đăng kí</a>
            </p>
            <img style="height: 50px; width: 50px; background-color: #fff" src="./img/qr.png" alt="" /> -->

            <h1>Đăng nhập với quyền quản trị trang web</h1>
        </div>
        <div class="col-md-4">
            <div class="right-side">
                <form method="POST" action="">
                    <input type="email" placeholder="Email" name="email" required />
                    <input type="password" placeholder="Password" name="password" required />
                    <button type="submit">Đăng nhập</button>
                </form>

                <?php if ($err): ?>
                    <div class="alert">
                        <?php echo $err; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>