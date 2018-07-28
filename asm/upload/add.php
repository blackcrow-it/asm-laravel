<?php
include "config.php";
if (isset($_POST["process"])) {
    $name = mysqli_escape_string($con, $_POST["name"]);
    $anh = $_FILES['c_img']['name'];
    $price = mysqli_escape_string($con, $_POST["price"]);
    $desc = mysqli_escape_string($con, $_POST["desc"]);
    if ($anh != null) {
        $path = "up/";
        $tmp_name = $_FILES['c_img']['tmp_name'];
        $anh = $_FILES['c_img']['name'];

        move_uploaded_file($tmp_name, $path . $anh);
        $sql = "insert into csdl(name,img,price,descrybe) values('$name','$anh','$price','$desc')";
        mysqli_query($con, $sql);
    }
}
?>
<div>
    <div>
        <h2 style="color: red ; padding-top: 20px; text-align: center;"> Thêm ảnh </h2>
        <form  action="" method="post" enctype="multipart/form-data">
            <table width="500" border="1" style="margin:auto;">

                <tr>
                    <td>Tên</td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>Ảnh</td>
                    <td><input type="file" name="c_img"></td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td><input type="number" name="price"></td>
                </tr>

                <tr>
                    <td>Mô tả</td>
                    <td><input type="text" name=" desc"></td>
                </tr>

                <tr>

                    <td></td>
                    <td><input type="submit" name="process" value="Add"></td>
                </tr>
            </table>
        </form>
    </div>

</div>
<?php
include "config.php";
$sql = "select *from csdl";
$result = mysqli_query($con, $sql);
?>

<div class="infor">
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top:10px;text-align:center;">
        <tr>
            <th width="50px;">STT</th>
            <th width="50px;">Tên</th>
            <th width="50px;">Hình Ảnh</th>
            <th width="100px;">Gía</th>
            <th width="100px;">Mô tả</th>
        </tr>
<?php
while ($row = mysqli_fetch_array($result)) {
    # code...
    ?>
            <tr>
                <td><?php echo $row ['id']; ?> </td>
                <td><?php echo $row ['name']; ?></td>
                <td><img src="up/<?php echo $row['img']; ?>" style="max-width: 100px;"</td>
                <td><?php echo $row ['price']; ?></td>
                <td><?php echo $row ['descrybe']; ?></td>
            </tr>
<?php } ?>
    </table>
</div>
