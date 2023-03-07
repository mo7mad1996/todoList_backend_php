<?php
	
	$DB_name = "my_database";
	
	$conn = mysqli_connect('localhost', 'root', '', $DB_name);
	
	if($conn) {

		// define tables array
		$tables = [
			'tasks' => [
				'category'		=> 'text',
				'isColored' 	=> 'int',
				'priority'		=> 'text',
				'title' 		=> 'text',
				'text'		 	=> 'text',
				'user_id'		=> 'int'
			],
			'users' => [
				'email'			=> 'text UNIQUE NOT NULL',
				'username' 		=> 'text',
				'password' 		=> 'text'
			]
		];

		// loop for tables array to create each table
		foreach($tables as $table_name => $colomns) {
			add_table($conn, $table_name, $colomns);
		}

	}
	
	function add_table($conn, $table_name, $colomns_array) {

		// add the id colomn
		$colomns = "`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY";

		// add the table colomns
		foreach($colomns_array as $name => $type) {

			$TYPE		= strtoupper($type); // convert type value to uppercase
			$colomns    .= ",`$name` $TYPE";

		}

		// create table...
		$sql = "CREATE TABLE IF NOT EXISTS `$table_name`($colomns)";
		$res = mysqli_query($conn, $sql);

	}




	
	
	// UPDATE `users` SET `name` = 'test1' WHERE `users`.`id` = 1;
	// UPDATE `users` SET `name` = 'kkk', `email` = 'kkk' WHERE `users`.`id` = 1;

