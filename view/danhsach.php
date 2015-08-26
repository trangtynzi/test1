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
        <h2 style="color:#C40532"> Danh sách sản phẩm</h2>
        <table border="1" width="1000" >
            <tr><td colspan="7" style=" text-align: center;"><a href="index.php?page=them" style="color:#C40532; font-weight:bold; font-size: 17px; text-align: center; text-decoration: none;">Thêm</a></td></tr>
            <tr>
                <td style="color:#C40532; font-weight:bold; font-size: 17px;">Mã sp</td>
                <td style="color:#C40532; font-weight:bold; font-size: 17px;">Tên </td>
                <td style="color:#C40532; font-weight:bold; font-size: 17px;">Giá</td>
                <td style="color:#C40532; font-weight:bold; font-size: 17px;">Mô tả </td>
                <td style="color:#C40532; font-weight:bold; font-size: 17px;">Khuyến mại</td>
                <td style="color:#C40532; font-weight:bold; font-size: 17px;">Sửa</td>
                <td style="color:#C40532; font-weight:bold; font-size: 17px;">Xóa</td>
            </tr>
            <?php foreach ($danhsach as $row) {?>
            <tr>
                <td><?php echo $row['quanao_id']?></td>
                <td><?php echo $row['ten']?></td>
                <td><?php echo $row['gia']?></td>
                <td><?php echo $row['mota']?></td>
                <td><?php echo $row['khuyenmai'] ."%"?></td>
                <td><a href="index.php?page=sua&id=<?php echo $row['quanao_id']?>">Sửa</td>
                <td><a href="index.php?page=xoa&id=<?php echo $row['quanao_id']?>">Xóa</td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>
