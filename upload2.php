<form action='upload3.php' method='post' enctype='multipart/form-data'>

<?php

$quantity=$_POST["number"];
for( $i = 1; $i <= $quantity; $i++ )
{
	echo "第".$i."個檔案"."<input type='file' name='upload[]'><br/>";
}
echo "<input type='submit'>";

?>

</form>
