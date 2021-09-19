<?php
	include("db/connection.php");
	
	$sql= "select * from student";
	
	$result=$db->query($sql);
		
?>
		
		<ul>
			<?php
				if($result->num_rows)
				{
						while($row=$result->fetch_assoc()){
							?>
							<li><?php echo $row['name'];?> </li>
							
							<?php
						}
				}
			?>
		</ul>
