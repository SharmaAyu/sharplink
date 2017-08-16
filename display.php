<?php
require 'dbconnect.php';
$sql = 'SELECT * 
		FROM billpayment';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<link rel="stylesheet" href="design.css">
</head>
<body>
	<h1>table</h1>
	<table class="data-table">
		<caption class="title">Sales Data of Electronic Division</caption>
		<thead>
			<tr>
				<th>username</th>
				<th>jan</th>
				<th>fab</th>
				<th>mar</th>
				<th>apr</th>
			</tr>
		</thead>
		<tbody>
		<?php
		//$no 	= 1;
		//$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td> <input type="radio" name="username">'.$row['username'].'</td>
                   <td> <input type="radio" name="jan">'.$row['jan'].'</td>
					<td> <input type="radio" name="fab">'.$row['fab'].  '</td>
					<td> <input type="radio" name="mar">'.$row['mar'].'</td>
                    <td> <input type="radio" name="apr">'.$row['apr'].'</td>
				</tr>';
		}?>
		</tbody>
		<!---<tfoot>
			<tr>
				<th colspan="4">TOTAL</th>
				<th><?//=number_format($total)?></th>
			</tr>
		</tfoot>--->
	</table>
    <input type="submit" name="submit" value="udate" />
    <?php
if (isset($_POST['submit'])) {
if(isset($_POST['jan']))
{
echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
}
?>
</body>
</html>