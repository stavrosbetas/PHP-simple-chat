<?php include 'database.php';?>

<?php
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Shout It!</title>
	<link rel="stylesheet" text="text/css" href="css/style.css">
  </head>
  <body>
	<div id="container">	
		<header><h1>Shout It</h1></header>
		<div id="shouts">
			<ul>
			<?php while($row = (mysqli_fetch_assoc($shouts))) :?>
				<li id="shout"><span><?php echo $row['time'] ;?> - </span><strong><?php echo $row['user']?>  : </strong> <?php echo $row['message']; ?></li>
			<?php endwhile ;?>
			</ul>
		</div>
		<div id="input">
		
		<?php if(isset($_GET['error'])) :?>
			<div class="error"><?php echo $_GET['error'] ;?></div>
		<?php endif?>
			<form method="post" action="process.php">
				<input type="text" name="user" placeholder="Enter your name">
				<input type="text" name="message" placeholder="Write your message">
				<br />
				<input class="shout-btn" type="submit" name="submit" value="shout it out">
			</form>
		</div>
	</div>
  </body>
</html>
