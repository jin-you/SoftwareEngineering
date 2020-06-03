<?php
	$result = mysqli_query($conn, $sql);
	
	while ($data = mysqli_fetch_assoc($result)){
		$item_num=$data['recipeID'];
		$item_subject=$data['title'];
		$item_image=$data['Image_copied'];
		$item_image="../data/".$item_image;
		
		$item_date=$data['uploadDate'];
		$item_date=substr($item_date, 0, 10);

		$item_id=$data['userID'];
		$item_score=$data['score'];
		$item_hit=$data['view_count'];	
		
		
		echo "<tr>";
		echo "<td><a href='../board/recipe_view.php?recipeID=$item_num'><img src='$item_image' width='250' height='250' class='img-responsive'></a></td>";
		echo "<td><a href='../board/recipe_view.php?recipeID=$item_num'>$item_subject</a></td>";
		echo "<td>$item_id</td>";
		echo "<td>$item_score</td>";
		echo "<td>$item_date</td>";
		echo "<td>$item_hit</td>";
		echo "</tr>";
	}
?>
