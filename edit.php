<?php
include __DIR__ . '../functions.php';
$db = include __DIR__ . '../database/start.php';

$id = $_GET['id'];

$post = $db->getOne('posts', $id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Post</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form action="/update.php?id=<?php echo $post['id']; ?>" method="POST">
					<div class="form-group">
						<lable>Title</lable>
						<input type="text" name="title" class="form-control" value="<?php echo $post['title'];  ?>">
					</div>
					<div class="form-control">
						<button class="btn btn-success">Edit Post</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

