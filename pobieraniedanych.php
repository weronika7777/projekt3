<?php

include 'poloczenie.php';

?>

<table class="table table-hover">

<?php 
$sql = "SELECT * FROM CRUDstudent";
$output = $poloczenie->query($sql);

while($row = $output->fetch()) {
	?>
	<tr>
		<td><?php echo $row[0]; ?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
	</tr>
<?php
}
?>
<table border="1">
