<?php
$link = mysqli_connect("localhost", "whalsrl5650", "whalsrl5650!", "whalsrl5650");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale=1">
    </head>
	
	<body>
		<div class="text-center">
				<h3>한식</h3><br>
		</div>
		<hr>
		
		<div class="container">
			<div>
					<table class="table table-striped">
						<thead>
						<tr>
							<th>레시피 이름</th>
							<th>작성자</th>
							<th>별점</th>
						</tr>
						</thead>
						<tbody>
						<?php
							
							$sql = "select title, writer, score whalsrl5650.Recipe where type="Korean";";
							
							$result = mysqli_query($link, $sql);							
		
							while ($row = mysqli_fetch_assoc($result)) {
								print "<tr>";
								foreach ($row as $key => $val){
									print "<td>" . $val . "</td>";
								}
								print "</tr>";
							}

						?>

						</tbody>
					</table>
					
					
			</div>
		</div>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	</body>
</html>

<?php
	mysqli_close($link);
?>
