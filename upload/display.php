<?php
include "config.php";
$sql = "select *form csdl";
$result = mysqli_query($con,$db);


 ?>

 <div class="infor">
   <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top:10px;text-align:center;">
     <tr>
       <th width="50px;">STT</th>
       <th width="50px;">Mã ảnh</th>
       <th width="200px;">Ảnh</th>
       <th width="100px;"><a href="add.php?xuli=add">Thêm</a></th>
     </tr>

     <?php while ($row =mysqli_fetch_array($result)) {
       // code...

      ?>
      <tr>
        <td><?php echo $row['id']; ?> </td>
        <td><?php echo $row['name']; ?></td>
        <td><img src="upload/<?php echo $row['img']; ?>" style="max-width: 100px;"</td>
      </tr>


<?php } ?>
   </table>
 </div>
