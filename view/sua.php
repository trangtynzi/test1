<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color:#C40532">Sửa</h2>
        <form method="post">
            <p>Tên : <input type="text" name="ten" value="<?php echo $sp['ten']?>"></p>
            <p>Giá:<input type="text" name="gia" value="<?php echo $sp['gia']?>"> </p>
            <p>Mô tả:<input type="text" name="mota" value="<?php echo $sp['mota']?>"> </p>
            <p>Khuyến mại: <input type="text" name="khuyenmai" value="<?php echo $sp['khuyenmai']?>"></p>
            <p><input type="submit" name="submit" value="sua"></p>
            
        </form>
    </body>
</html>
