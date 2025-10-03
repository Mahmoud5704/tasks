<?php

if(isset($_POST['submit'])){
$tmp=$_FILES['image']['tmp_name'];
$image_name=$_FILES['image']['name'];
$image_name=time()."_".$image_name;
$upload_path = "images/".basename($image_name);
if (move_uploaded_file($tmp, $upload_path)) {
echo "<div style='border:10px solid #2182f3; background-color:#2182f3;'>Uploaded successfully.</div><br>";
echo "<img src='$upload_path' width='200' alt='Uploaded Image' style='border: 10px solid #2182f3; border-radius: 50%; margin: 20px auto; display: block;'>";
 } else {
        echo "<div style='border:10px solid red'>no uploaded file yet</div><br>";
    }
   
}
?>


<html>
    <head>
        <style>
            input{
               border-color:#2182f3;
               border-width:10px; 
               margin:20px auto;
              
               height: 50px;
                display: block;
            }
          
            button{
                background-color:#2182f3;
                border-radius:50%;
                width:80px;
                height: 50px;
                margin:20px 200px;
            }
            button:hover{
                background-color:blue;
            }
            form{
                background-color:#1ab8ff;
            }
            div{
                font-size:30px;
                
            }
        </style>
    </head>
    <body>
    <form method="POST" enctype="multipart/form-data">
       <div>enter your name: </div> <input type="text" name="name" placeholder="enter name">
        <br>
       <div> enter telephone: </div><input type="text" name="phone" placeholder="enter phone">
        <br>
       <div> enter password : </div><input type="text"name="password" placeholder="enter password">
        <br>
       <div> upload picture : </div> <input type="file" name="image">
        <br>
<button type="submit" name="submit">save</button>
        </form>
    </body>

</html>

<?php
echo "<div style='border:10px solid #000000ff; background-color:blue;'>FOR MORE INFORMATION!</div><br>";

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";
?>
