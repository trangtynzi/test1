<?php
if(isset($_POST['submit'])){
    $ten  = $_POST['ten'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $khuyenmai = $_POST['khuyenmai'];
    
    if(isset($ten) && isset($gia) && isset($mota ) && isset($khuyenmai)){
        them($ten,$gia,$mota,$khuyenmai);
        header('location:index.php');
    }
}
include 'view/them.php';
?>
