<?php
include('db.php');
			$query="SELECT * FROM chat ORDER BY id DESC ";
			$result=mysqli_query($con,$query);
			while($row = mysqli_fetch_assoc($result)) 
		{
		?>
		<div id="chat_data">
			<span style="color:green;"><?php echo $row["name"] ;?></span> :
			<span style="color:brown;"><?php echo $row["message"] ;?></span>
			<span style="float:right;"><?php echo formatDate($row["date"]) ;?></span>
		</div>
		<?php } ?>