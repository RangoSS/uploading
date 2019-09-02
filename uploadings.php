 <?php
include 'connection.php';

 ?>


 <?php

 $msg="";
if(isset($_POST['sending'])) 
{

	$image=$_FILES['image']['name'];
    $text=$_POST['text'];
	$target="images/" .basename($_FILES['image']['name']); //first we create images folder in the project 
	                                                       // goes to file and file name

   
$imagePath = "http://localhost/Uploading file/".$target;      //we save path of file in sql

    $insert="insert into driver(images,texts) values('$imagePath','$text')";
	$query=mysqli_query($connectAssert,$insert);

	if(move_uploaded_file($_FILES['image']['tmp_name'], $target))    //tmp is a temporarly folder that saves temporal files 
	{
		$msg="uploaded successfully";
	}
	else
	{
		$msg="there was an error uploading file";
	}


	// display all the uploaded files here
	$display="select images,texts from driver";
	$result=mysqli_query($connectAssert,$display);

//	whlie($row=mysqli_fetch_assoc($result))
	//{
          /*echo "<table>
               <tr>
               <th>IMAGES</th>
               </th>DESCRIPTION</th>
               </tr>
               <tr>
                  <td> $row[images]</td>
                  <td> $row[txts]</td>
                 
               </tr>

               </table>";*/
//	}

}

?>

<head>
<title>uploading</title>
</head>
<body>
	<div id="content">
     <form method="post" enctype="multipart/form-data">
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

	<div name="mugumo">
      
	</div>

</body>