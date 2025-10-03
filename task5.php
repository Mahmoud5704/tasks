<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

if(isset($_POST['submit'])){
$tmp=$_FILES['image']['tmp_name'];
$image_name=$_FILES['image']['name'];
$image_name=time()."_".$image_name;
$upload_path = "images/basename($image_name)"; // Full path
 unlink($upload_path);
if (move_uploaded_file($tmp, $upload_path)) {
        echo "uploaded successfully.<br>";
        echo "<img src='$upload_path' width='200' alt='Uploaded Image'>";
    } else {
        echo "no uploaded file yet";
    }
   
}
?>


<html>
    <head>
        <style>
            input{
               border-color:red;
               border-width:10px; 
               margin:20px auto;
                display: block;
            }
            
        </style>
    </head>
    <body>
    <form method="POST" enctype="multipart/form-data">
        enter your name: <input type="text" name="name" placeholder="enter name">
        <br>
        enter telephone: <input type="text" name="phone" placeholder="enter phone">
        <br>
        enter password : <input type="text"name="password" placeholder="enter password">
        <br>
        upload picture : <input type="file" name="image">
        <br>
<button type="submit" name="submit">save</button>
        </form>
    </body>

</html>
