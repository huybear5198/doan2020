<?php 
class vipmember 
{
	function ketnoi()
	{
		$conn = mysqli_connect('localhost', 'root', '', 'thuthoi');
		if(!$conn)
		{
			echo"die roi";
		}
		else
		{
			return $conn;
		}
	}
	function resetlv()
	 {
	 	$id=1;
	 	$a='c';
	 	$link=$this->ketnoi();
	 	$sql='CREATE EVENT '.$a.'
			    ON SCHEDULE
			      EVERY 30 second
			        DO
			update test
			set hang=2 where id='.$id.' ';
		$result = mysqli_query($link, $sql);
		if (!$result){
		  die ('khong co ket qua');
		 }
		 else
		 {
		 	echo"ok conde";
		 }
	}


}

?>
 

