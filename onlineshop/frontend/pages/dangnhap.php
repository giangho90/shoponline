<form name="frmDangNhap" method = "post" action = "C:\xampp\htdocs\Shoponline\onlineshop\frontend\pages\xulydangnhap.php">;
Username: <input type = "text" name = "username"
id="username"/><br/>
Password: <input type = "text" name = "password"
Password="username"/><br/>
<button name="btnDangNhap">Bấm để đăng nhập</button>
</from>

<?php
if(isset($_POST['btnDangNhap'])) //Tuc la nguoi dung da bam nut dang nhap
{
    $tendangnhap = $_POST['username'];
    $matkhau = $_POST['password'];

    if($tendangnhap = 'admin' $matkhau = 123456) {
        echo'ban da dang nhap thanh cong'; 
    } else {
        'sai thong tin dang nhap '
    }
       
    
}