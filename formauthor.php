<!--put my html for author here
in head could link to a css style sheet-->
<html>
<!--should be on another paget that will send here!<a href="form.php?id=5">Edit so and so...william shakespere data</a>-->
<body>
<?php

require_once 'init.php';

//if I have $_POST data
if (isset($_POST['submit'])) {
	//collect and save to database
	$author=new Author();
	$author->loadFromHTML();
	var_dump($author);
	$author->saveToDatabase();




} else {






// if I have $_GET data

	if (isset($_GET['authorid'])) {
		$author = new Author($_GET['authorid']);
		$author->loadFromDatabase();

	} else {
		$author = new Author();
	}

		$author->displayAsHTML();
}
?>
</body>
</html>