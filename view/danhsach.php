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
        <h3> DANH SACH</h3>
        <table border="1" width="1000">
            <a href="index.php?page=them">Them</a>
            <tr>
                <td style="color:red">ma sp</td>
                <td style="color:red">ten </td>
                <td style="color:red">gia</td>
                <td style="color:red">mota </td>
                <td style="color:red">khuyen mai</td>
                <td style="color:red">sua</td>
                <td style="color:red">xoa</td>
            </tr>
            <?php foreach ($danhsach as $row) {?>
            <tr>
                <td><?php echo $row['quanao_id']?></td>
                <td><?php echo $row['ten']?></td>
                <td><?php echo $row['gia']?></td>
                <td><?php echo $row['mota']?></td>
                <td><?php echo $row['khuyenmai']?></td>
                <td><a href="index.php?page=sua&id=<?php echo $row['quanao_id']?>">Sua</td>
                <td><a href="index.php?page=xoa&id=<?php echo $row['quanao_id']?>">Xoa</td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>
