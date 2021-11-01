<?php 
	$post_data = $_POST;
	$file = file_get_contents("../data/users.json");
	$users = json_decode($file, true);
	$users[$post_data['id']]['name'] = $post_data['name'];
	$users[$post_data['id']]['type'] = $post_data['type'];
	$users[$post_data['id']]['email'] = $post_data['email'];
	$classes = explode(',', $post_data['classes']);
	$users[$post_data['id']]['classes'] = $classes;

	$json_strings = json_encode($users);
	file_put_contents("../data/users.json",$json_strings);

	echo "edit success!";
?>

<button class="round-btn"><a href="users.php">BACK</a></button>