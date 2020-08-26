<?PHP 
    //check if id exists in URL
    if(isset($_GET['id'])) {
        //Database Connection
    	$host = "localhost";
    	$username = "id12681546_doapplication";
    	$password = "password1";
    	$dbname="id12681546_doapplication";
    	$con = mysqli_connect($host,$username,$password,$dbname);
    	
    	$student_id = $_GET['id'];
    	//echo $student_id;
    	
    	$sql = "SELECT * FROM `Student` WHERE `student_id`='$student_id'";
    	$result = $con->query($sql);
    
        if ($result->num_rows > 0) {
            $student = mysqli_fetch_assoc($result);
            echo json_encode($student);
        } else {
            echo json_encode(
                ["error" => "Invaild student ID."]    
            );
        }
    	mysqli_close($con);
    } else {
        echo json_encode(
            ["error" => "Error: No studend ID."]    
        );
    }
    
?>