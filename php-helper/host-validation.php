
<?php
	require_once("open-database.php");

	function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; } 
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}

	function update($current_user, $event_id, $db) {
		$sqlQuery = "SELECT * FROM `users` WHERE username ='$current_user';";
	    $result = mysqli_query($db, $sqlQuery);

	    //OBTAINING DATA FROM DATABASE
	    while ($recordArray = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	        $hosted_events = $recordArray['hosted_events'];
		}

		//Obtain all events info
    	$hosted_events = json_decode($hosted_events, true);
    	//Add the created event
    	array_push($hosted_events, $event_id);
    	$hosted_events = json_encode($hosted_events);

    	//Update user's events and points
    	$sqlQuery = "UPDATE users SET points = points + 3, hosted_events = '$hosted_events' WHERE username = '$current_user';";
    	$result = mysqli_query($db, $sqlQuery);

    	if (!$result) {
			echo mysqli_error($db);
		}
	}	

?>

<?php

	//If Submit Button is hit and an Image was chosen
	if(isset($_POST["submit"]) && isset($_FILES["fileToUpload"])){

		$image_name = time() . '_' . stripslashes($_FILES['fileToUpload']['name']);
		$privacy = trim($_POST["privacy"]);
		$event_name = trim($_POST["event-name"]);
		$location = trim($_POST["location"]);
		$start_date = trim($_POST["date-start"]);
		$start_time = trim($_POST["time-start"]);
		$end_date = trim($_POST["date-end"]);
		$end_time = trim($_POST["time-end"]);
		$size = trim($_POST["event-size"]);
		$description = trim($_POST["description"]);
		$tags = explode("," , trim($_POST["tags"]));
		$tags = json_encode($tags);

		$event_host = $_SESSION['usernameValue'];
		$event_id = $event_host."%".$event_name."%".$start_date;

		$users_going = json_encode([$event_host]);

		//print_r($_SESSION);
		/************************/
        /*  Image Processing     /
        /************************/
		$upload_dir = "../img/event_images";	// The directory for the images to be saved in
		$upload_path = $upload_dir."/";		// The path to where the image will be imap_savebody(imap_stream, file, msg_number)

		//Create the upload directory with the right permissions if it doesn't exist
		if(!is_dir($upload_dir)){
			mkdir($upload_dir, 0777);
			chmod($upload_dir, 0777);
		}

		move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $upload_path.$image_name);

		/************************/
        /*  Database Processing     /
        /************************/
        $conn = new mysqli($host, $user, $password,$database);

        //print_r($_SESSION);
        $sqlQuery = "INSERT INTO events(event_id, name, host, image, location, start_date, start_time, end_date, end_time, size, description, tags, users_going, privacy) VALUES (
        						'$event_id',
      							'$event_name',
        						'$event_host',
        						'$image_name',
        						'$location',
        						'$start_date',
        						'$start_time',
        						'$end_date',
        						'$end_time', 
        						'$size',
        						'$description',
        						'$tags',
        						'$users_going',
        						'$privacy'
       					 );";

		if ($conn->query($sqlQuery) === TRUE) {
		    update($event_host, $event_id, $db);
			
			echo "New record created successfully";
			header('Location: ../profile.php');

		} else {

			//Check if event Already Exists
			$str = $conn->error;
			if (strpos($str, 'Duplicate') !== false) {
				echo "Error: Event Already Exists.";
			}
		}
    }	
?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="/Happening/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/Happening/favicon.ico" type="image/x-icon">

        <title>Create an Event</title>
        <meta name="description" content="Happening App">
        <meta name="author" content="The Happening Team">

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/host.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="../js/host.js"></script>

    </head> 

    <body>
        
    	FOR DEBUGGING PURPOSES ONLY

        <div class="container main-content">
            <div class="row row-centered">
                <div class="col-sm-8 col-sm-offset-2">

                	Preview: <br>

	                <img src="<?php echo $upload_path.$image_name?>" style="max-width: 400px;"> <br>
	                <?php //echo $event_id."<br>" ?>
	                Privacy: 			<?php echo $privacy."<br>" ?>
					Name: 				<?php echo $event_name."<br>" ?>
					Location:			<?php echo $location."<br>" ?>
					Start: 				<?php echo $start_date." " ?>
										<?php echo $start_time."<br>" ?>
					End: 				<?php echo $end_date." " ?>
										<?php echo $end_time."<br>" ?>
					Expected Attendance:<?php echo $size."<br>" ?>
					Desctiption:		<?php echo $description."<br>" ?>
					Tags:				<?php echo $tags."<br>" ?>

                </div>
            </div>
        </div>
    </body>
</html> -->