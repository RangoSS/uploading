 <?php
include 'connection.php';

 ?>


 <?php
   if($_SERVER['REQUEST_METHOD']=='POST') 
 {
    // all this codes is saving file in a directoy and 
   $image=$_FILES['image']['name'];
   $text=$_POST['text'];
   $dir="images/".basename($_FILES['image']['name']); //save this image in this directory
   
   

// here this codes is for saving thing this codes on database
    $patt="http://localhost/uploading file/".$dir; 
                                                  // path of directory
   $query="insert into driver(images,texts) values('$patt','$text')";

   $results=mysqli_query($connectAssert,$query);

   if(move_uploaded_file($_FILES['image']['tmp_name'], $dir))
   {
    echo "your file is uploade ";
   }
   else
   {
    echo "your file is corrupted like you";
   }
}
?>

<head>
<title>uploading</title>
</head>
<body>
	<div id="content">
     <form method="POST" enctype="multipart/form-data">
     	<input type="hidden" name="size" value="1000000">
     	<div>
         <input type="file" name="image">

     	</div>
     	<div>
         <textarea name="text" cols="40" rows="4" placeholder="add some new text about cars"></textarea>
         	
         
     	</div>
     	<div>
         <input type="submit" name="sending" value="submit"/>
     	</div>
     	

     </form>   
 

	</div>

</body>