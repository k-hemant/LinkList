<html>

<title>LinkList</title>

<link rel="stylesheet"  href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">



<center>


<div class="head1">
<h1>
<font class="title">

Link<font color="#2980b9">List</font>

</font>
</h1>
</div>


<br>

<br>

<br>

<br>
<br>
<br>

<h1>
<font class="mid-content">

Create Lists For <font color="#3498db">Articles</font> & <font color="#3498db">Blog</font>
<br>
for your Students

</font>
</h1>


<form method="POST">
<input type="text" class="input"  placeholder="Name" name="name"  required>
<P>
<input type="text" class="input"  placeholder="Title" name="title" required>
<P>
<input type="text" class="input"  placeholder="Description" name="description"  required>
<P>
<input type="url" class="input"  placeholder="Enter Link of Articles" name="link1"  required>
<P>
<input type="url" class="input"  placeholder="Enter Link of Articles" name="link2"  required>
<P>
<input type="url" class="input"  placeholder="Enter Link of Articles " name="link3"  required> 
<P>
<input type="url" class="input"  placeholder="Enter Link of Articles" name="link4"  required>
<P>
<input type="url" class="input"  placeholder="Enter Link of Articles " name="link5"   required>
<P>
<input type="url" class="input"  placeholder="Enter Link of Articles" name="link6"   required>
<P>
<input  class="but" type="submit" value="Create">

</form>

<br><br><br>

<?php

if(isset($_POST["name"])){

$date=date_default_timezone_set("Asia/Calcutta");
$date=date('l jS \of F Y h:i:s A');

$name=$_POST["name"];
$title=$_POST["title"];
$description=$_POST["description"];
$link1=$_POST["link1"];
$link2=$_POST["link2"];
$link3=$_POST["link3"];
$link4=$_POST["link4"];
$link5=$_POST["link5"];
$link6=$_POST["link6"];
$random = rand(1,999999);

$fname="$title$name.html";

$file = fopen($fname, "w")
 or die("Unable to open file!");
 
$content = "
<html>

<title></title>

<link rel='stylesheet'  href='style.css'>
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Urbanist:wght@500&display=swap' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap' rel='stylesheet'>


<center>

<div style='width:80%;'>

<br><br><br>

<img src='https://cdn.statically.io/avatar/shape=circle/$name' width='100px'>

<br><br>

<font class='by1'>
<B>By : </B>
<font style='color:#6c5ce7;'>
$name
</font>
</font>

<br><br>
<font class='title1'>
$title
</font>


<br>


<font class='desc'>
$description
</font>

<p></p>

<font class='date'>
<b>Created at : </b>

<font style='color:#c44569;'>
$date
</font>
</font>

<br><br>

<div class='link'>
<br>
<a style='	text-decoration:none;
	color:#2f3640;' href='$link1'>$link1</a>

<br><br>
</div>

<br><br>

<div class='link'>
<br>
<a style='	text-decoration:none;
	color:#2f3640;'  href='$link2'>$link2</a>

<br><br>
</div>

<br><br>

<div class='link'>
<br>
<a  style='	text-decoration:none;
	color:#2f3640;' href='$link3'>$link3</a>

<br><br>
</div>

<br><br>

<div class='link'>
<br>
<a  style='	text-decoration:none;
	color:#2f3640;' href='$link4'>$link4</a>

<br><br>
</div>

<br><br>

<div class='link'>
<br>
<a  style='	text-decoration:none;
	color:#2f3640;' href='$link5'>$link5</a>

<br><br>
</div>

<br><br>

<div class='link'>
<br>
<a  style='	text-decoration:none;
	color:#2f3640;'  href='$link6'>$link6</a>

<br><br>
</div>

<br>

<br><br><br>

<font class='footer'>

&copy Team Hierarchy
</font>





</div>

</center>


</html>




";

fwrite($file, $content);

fclose($file);


echo "
<P >
<font class='footer'>
Your Link Has been Created.
<br>
open <a class='footer' style='	text-decoration:none;
	color:#546de5;'  href='$fname'>here</a>
</font>

<P>";



	
}
else{
	
}


?>




<font class="footer">

&copy Team Hierarchy
</font>

</center>


</html>