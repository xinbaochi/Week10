<?php

$i=count($_FILES["upload"]["name"]);

for ($j=0; $j < $i; $j++) 
{ 
	if(isset($_FILES["upload"]["name"]))
	{
		echo "檔案名稱：".$_FILES["upload"]["name"][$j]."<br>";				//檔案名字
		echo "暫存位置：".$_FILES["upload"]["tmp_name"][$j]."<br>";			//上傳檔案後的暫存資料夾位置
		echo "檔案大小：".$_FILES["upload"]["size"][$j]."<br>";				//檔案大小
		echo "檔案類型：".$_FILES["upload"]["type"][$j]."<br>";				//檔案類型
		echo "<br>";

		$a=pathinfo($_FILES["upload"]["name"][$j]);
		$t=time();

		copy($_FILES["upload"]["tmp_name"][$j],$t.".".$a["extension"]);
	}
	else
	{
		echo "檔案上傳失敗";
	}
}

?>