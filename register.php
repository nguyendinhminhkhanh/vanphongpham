<?php
include 'connect.php';
include 'header.php';
$err = "";
if (isset($_POST['email'])) {
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $sql = "INSERT INTO customer (fullname,user_name,email,phone,address,password) VALUES ('$fullName','$userName','$email','$phone','$address','$password')";
    $query = mysqli_query($conn, $sql);
}
?>
<!-- <link rel="stylesheet" href="./style/register.css"> -->
<div class="container_register">
<div class="register">
    <div class="left-side">
        <h1>Chào mừng bạn đến với cửa hàng văn phòng phẩm</h1>
        <h3>Nếu bạn chưa có tài khoản xin hãy nhập thông tin đăng ký</h3>
        <p>Bạn đã có tài khoản. <a href="./login.php">Đăng nhập</a></p>
        <img style="height: 50px; width: 50px; background-color: #fff" src="./img/qr.png" alt="" />
        <!-- <div class="buttons">
                <button class="btn-primary">Get Started</button>
                <button class="btn-secondary">View More</button>
            </div> -->
    </div>
    <div class="right-side">
        <form method="POST" action="">
            <input type="text" placeholder="Full Name" name="fullName" required />
            <input type="text" placeholder="User Name" name="userName" required />
            <input type="email" placeholder="Email" name="email" required />
            <input type="text" placeholder="Phone" name="phone" required />
            <input type="text" placeholder="Address" name="address" required />
            <input type="password" placeholder="Password" name="password" required />
            <button type="submit">Đăng ký</button>
        </form>
        <?php if (true): ?>
            <div class="alert">
                <?php echo $err; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
</div>
<?php
include "footer.php";
?>