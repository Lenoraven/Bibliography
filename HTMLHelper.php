<?php

class HTMLHelper {

	protected $author;
	public function __construct($author) {
		$this->author = $author;
	}

	public function loadFromHTML() {
		$this->author->setAuthorID($_REQUEST['authorid']);
		$this->author->setFirstname($_REQUEST['firstname']);
		$this->author->setInitials($_REQUEST['initials']);
		$this->author->setLastname($_REQUEST['lastname']);
	}


	public function displayAsHTML() {


		$html = '<form action="'. $_SERVER['PHP_SELF'].'" method="post">' ."\n";
	

		$html .='<p> First Name: <input type="text" id="firstname" name="firstname" value"'. 
			$this->author->getFirstname() .'"/></p>'."\n";


		$html .='<p> Initials: <input type="text" id="initials" name="initials" value"'.
			$this->author->getInitials() .'"/></p>'."\n";

		$html .='<p> Last Name: <input type="text" id="lastname" name="lastname" value"'.
			$this->author->getLastname() .'"/></p>'."\n";


		$html .='<input type="hidden" id="authorid" name="authorid" value"'.
			$this->author->getAuthorID() .'" />'."\n";

		$html .='<input type="submit" name="submit" id="submit" value="Save to Database" />'."\n";


		$html .='</form>'."\n";

		echo $html;

	}

//NOTE TO SELF>>>>>NEED TO PUSH BETWEEN THE HUCO SERVER AND MY LOCAL DATABASE....
//THIS IS THAT WHOLE SOURCE THING STUFF THAT WE WERE SUPPOSED TO USE WITH WEATHERSCRAPER!!  FIGURE THIS OUT!!!!!
//probably want to put in a load from html method here!!!
}

?>