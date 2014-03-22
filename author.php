<?php

class Author {

	protected $authorid;
	protected $firstname;
	protected $initials;
	protected $lastname;

	protected $dbhelper; //the dbhelper object
	protected $htmlhelper; //the htmlhelper object


		public function __construct($authorid = -1) {
			$this->authorid = $authorid;

			$this->dbhelper = new DBHelper($this);
			$this->htmlhelper = new HTMLHelper($this);
		}

		public function getAuthorID(){
			return $this->authorid;
		}

		public function getFirstname() {
			return $this->firstname;
		}

		public function getInitials(){
			return $this->initials;
		}

		public function getLastname(){
			return $this->lastname;
		}

	
		//SETTERS sets a piece of data to an object

		public function setAuthorID($authorid = -1) {
			$this->authorid = $authorid;
		}

		public function setFirstname($firstname = null) {
			$this->firstname = $firstname;
		}

		public function setInitials($initials = null){
			$this->initials = $initials;
		}

		public function setLastname($lastname = null){
			$this->lastname = $lastname;
		}


		////////////////////////////////////
		//  Access helper methods
		///////////////////////////////////

		public function loadFromDatabase() {
			$this->dbhelper->loadFromDatabase();	
		}

		public function saveToDatabase() {
			echo "Saving to database! \n";
			$this->dbhelper->saveToDatabase();
		}

		public function displayAsHTML() {
			$this->htmlhelper->displayAsHTML();
		}

		public function loadFromHTML() {
			$this->htmlhelper->loadFromHTML();
		}

	}






?>