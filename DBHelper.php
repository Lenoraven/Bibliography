<?php
//this can be broken down into a parent class!
class DBHelper {

	protected $conn; //database connection
	protected $author; //person object who owns this helper
	public function __construct($author){
		$this->conn = DBConn::GetConnection();
		$this->author = $author;
	}

	public function loadFromDatabase() {

			//use the DBConn to do this query:

			$query = "SELECT * FROM author WHERE authorid=" . $this->author->getAuthorID();

			//do the query, get a $result object
			//calling on the bucket to send it the query we just designed
			$result = $this->conn->query($query);
			
			//get one row from $result
			//test for only one row??????

			$row = $result->fetch_assoc();
			
			$this->author->setauthorid ( $row['authorid']);
			$this->author->setFirstname ( $row['firstname'] );
			$this->author->setInitials ( $row['initials'] );
			$this->author->setLastname ( $row['lastname'] );
			
	}

	
	public function saveToDatabase(){

		$authorid = (int) $authorid->getAuthorID();
		$firstname = "'".$this->conn->real_escape_string($this->author->getFirstname())."'";
		$initials = "'".$this->conn->real_escape_string($this->author->getInitials())."'";
		$lastname = "'".$this->conn->real_escape_string($this->author->getLastname())."'"; //real-escape gets rid of problematic characters and puts a slash in them

		if ($this->author->getAuthorID() == -1) {
			//insert quary
			$query = "INSERT INTO author VALUES(NULL, $firstname, $initals, $lastname)";
		} else {
			// update query b/c ID > 0
			$query = "UPDATE author SET firstname=$firstname, initials=$initials, lastname=$lastname WHERE authorid=$authorid";//check all id's for "authorid"
		}

		$this->conn->query($query);
	
	}

	 
}


?>