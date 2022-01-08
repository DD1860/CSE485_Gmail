<?php
    session_start();
include_once("db.php");

if(isset($_POST['submit']))

{ 

$imgfile=$_FILES["image"]["name"];

$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

$allowed_extensions = array(".jpg","jpeg",".png");

// Validation for allowed extensions

if(!in_array($extension,$allowed_extensions))

{

echo "<script>alert('Hình ảnh sai định dạng, chỉ chấp nhận định dạng .JPG, .PNG, .JPEG');</script>";

}

else

{

//md5 thay đổi tên file

$imgnewfile=md5($imgfile).$extension;  

// lưu ảnh vào foler uploads

move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$imgnewfile);

// lưu vào databases

$query=mysqli_query($conn,"insert into tb_client (user_id,link) values('{$_SESSION['id']}','$imgnewfile')");

if($query)

{
$success = "Cập nhật thành công !";
header("location:uploads.php?sucess=$success");
}

else

{

echo "<script>alert('Failed !');</script>";

}}



}

 ?>
