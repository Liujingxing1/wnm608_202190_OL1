<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'GET'){
		echo 'No';
	} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$file = file_get_contents("../data/users.json");
		$users = json_decode($file, true);
		$users[$_POST['id']]['name'] = $_POST['name'];
		$users[$_POST['id']]['type'] = $_POST['type'];
		$users[$_POST['id']]['email'] = $_POST['email'];
		$classes = explode(',', $_POST['classes']);
		$users[$_POST['id']]['classes'] = $classes;

		file_put_contents("../data/users.json", json_encode($users));
		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
	}
?>

<button class="round-btn"><a href="users.php">BACK</a></button>