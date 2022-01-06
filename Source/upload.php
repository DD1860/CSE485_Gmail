<?php
// Include the database configuration file
include 'db.php';
$statusMsg = '';
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

    $allowTypes = array('jpg','png','jpeg'); // chỉ cho phép tải lên ảnh với 3 định dạng JPG / PNG / JPEG
    if(in_array($fileType, $allowTypes)){
        // Upload file to local
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Cập nhật vào database
            $insert = $db->query("INSERT into db_images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
               header("location: show.php");
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>