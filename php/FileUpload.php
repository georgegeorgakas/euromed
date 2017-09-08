<?php
    if (isset($_FILES['UploadFileField'])) {

        $UploadName = $_FILES['UploadFileField']['name'];
        $UploadName = mt_rand(100000, 999999) .$UploadName;
        $UploadTmp = $_FILES['UploadFileField']['tmp_name'];
        $UploadType = $_FILES['UploadFileField']['type'];

        if (!$UploadTmp) {
            die("No File Selected");
            header("location: ../index/index.php");
        } else {
          move_uploaded_file($UploadTmp, "../Upload/$UploadName");
          header("location: ../paper/submission.php");
        }
    }
?>