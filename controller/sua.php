<?php
$id =$_GET['id'];
$sp = getsanpham($id);

if(isset($_POST['submit'])){
    $ten  = $_POST['ten'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $khuyenmai = $_POST['khuyenmai'];
    
    if(isset($ten) && isset($gia) && isset($mota ) && isset($khuyenmai)){
        sua($ten,$gia,$mota,$khuyenmai,$id);
        header('location:index.php');
    }
}
include 'view/sua.php';
?>
