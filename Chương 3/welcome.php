<?php
// TODO 1: Khởi động session (BẮT BUỘC ở mọi trang cần dùng SESSION)
// Gợi ý: Dùng hàm session_...()
session_start();

if(isset($_SESSION['nanh'])) {

    $loggedInUser = $_SESSION['nanh'];

    echo "<h1>Chào mừng trở lại, $loggedInUser?</h1>";
    echo "<p>Bạn đã đăng nhập thành công.</p>";

    echo '<a href="login.html">Đăng xuất (Tạm thời)</a>';

}else {
    header('Location:login.html');
    exit;
}
?>