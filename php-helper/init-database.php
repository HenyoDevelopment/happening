<?php
	//Database Variable Initialization	
	$host = "localhost";
	$user = "bcuser";
	$password = "goodbyeWorld";
	$database = "Happening";
	$table1 = "users";
	$table2 = "events";
	
	// Create connection to root
	$conn = new mysqli($host,$user,$password);
	
	//Check if connection fails
	if ($conn->connect_error) {
  	  die("Connection failed: " . $conn->connect_error);
	} 
	
	//Check if database - "Happening" exists
	$sqlQuery = "SHOW DATABASES";
	$result = $conn->query($sqlQuery);
	$found = false;
	while ($recordArray = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		//"Happening" already exists
		if($recordArray['Database'] == $database) {
			$found = true;
			break;
		}
	}
	
	//create "Happening" Database if it does not exist
	if (!$found) {	
		
		//Create database
		$conn->query("CREATE DATABASE $database");	
		
		//Creater user
		$conn->query("CREATE USER '$user'@'$host' IDENTIFIED BY '$password'");
		
		//Grant user access to Database
		$conn->query( "GRANT ALL PRIVILEGES ON $database.* TO '$user'@'$host'");
		
		//CONNECT TO NEW DATABASE AND USER
		$conn = new mysqli($host, $user, $password, $database);	


		/////////////////////////////////////////////////
		//     CREATE TABLES IN HAPPENING DATABASE     //
		/////////////////////////////////////////////////

		//Create table for ALL events
		//Notes: Image is 16MB at most
		//Private is either 1 or 0; 0 is FALSE and 1 is TRUE
		//event_ID = host + event-name + start-date
		$conn->query("CREATE TABLE $table2(
						event_id varchar(100) primary key,
						name varchar(15), 
						host varchar(50),
						start_date date, 
						start_time time, 
						end_date date, 
						end_time time, 
						location varchar(100), 
						description varchar(500), 
						image varchar(250),
						tags varchar(1000),
						users_going varchar(1000) NOT NULL DEFAULT '[]',
						size varchar(10),
						privacy varchar(10)
						)");
		
		//Create table for users
		//Notes: 
		//Friends is a serialized array of usernames
		//My_events & liked_events is a serialized array of event names
		//profile_picture is 16MB at most
		//Private is either 1 or 0; 0 is FALSE and 1 is TRUE
		$conn->query("CREATE TABLE $table1(
						email varchar(50),
						username varchar(15), 
						password varchar(250),
						name varchar(50) NOT NULL,
						profile_picture varchar(250) NOT NULL,
						hosted_events varchar(1000) NOT NULL DEFAULT '[]',
						interested_events varchar(1000) NOT NULL DEFAULT '[]',
						going_events varchar(1000 )NOT NULL DEFAULT '[]',
						followers varchar(1000) NOT NULL DEFAULT '[]',
						following varchar(1000) NOT NULL DEFAULT '[]',
						points int NOT NULL DEFAULT 0,
						privacy varchar(10) NOT NULL DEFAULT 'public',
						description varchar(500) NOT NULL DEFAULT '',
						CONSTRAINT user_id PRIMARY KEY (email, username)
						)");
	}
	
	$conn->close();
?>