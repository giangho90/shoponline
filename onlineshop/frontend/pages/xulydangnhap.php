<?php
$tendangnhap = $_POST['username'];
$matkhau = $_POST['password'];

if($tendangnhap == 'admin' && $matkhau == '123456'){
    echo'bạn đã đăng nhập thành công';
} else {
    echo 'sai  thông tin đăng nhập';
}
?>