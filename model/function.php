<?php
function danhsach(){
    global $connect;
    $query  = "SELECT * FROM quanao ORDER BY quanao_id DESC";
    $result = mysqli_query($connect,$query);
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}
function them($ten,$gia,$mota,$khuyenmai){
    global $connect;
    $query  = "INSERT INTO quanao(ten,gia,mota,khuyenmai) VALUES ('$ten','$gia','$mota','$khuyenmai')";
    mysqli_query($connect,$query);
}
function getsanpham($id){
    global $connect;
    $query  = "SELECT * FROM quanao WHERE quanao_id = $id";
    $result = mysqli_query($connect,$query);
    $row =mysqli_fetch_assoc($result);
    return $row;
}
function sua($ten,$gia,$mota,$khuyenmai,$id){
    global $connect;
    $query  = "UPDATE quanao SET ten = '$ten', gia = '$gia' ,mota ='$mota' , khuyenmai = '$khuyenmai' WHERE quanao_id = '$id'";
    mysqli_query($connect,$query);
}
function xoa($id){
    global $connect;
    $query  = "DELETE FROM quanao WHERE quanao_id = '$id'";
    mysqli_query($connect,$query);
}

?>
