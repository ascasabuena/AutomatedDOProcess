<?PHP 
//getting data from html (all fields have to be filled up)
	$student_id = $_POST['student'];
	$detail = $_POST['details'];
	$officers = $_POST['officer'];
	$oic = '';
//getting the data from the checkbox. (can be multiple values)
	$violations = array($_POST['vio']);
	foreach($violations as $vios);
	$vio = implode(" - " , $vios);
	
//Database Connection
	$host = "localhost";
	$username = "id12681546_doapplication";
	$password = "password1";
	$dbname="id12681546_doapplication";
	$con = mysqli_connect($host,$username,$password,$dbname);

//getting the values from the guard list
	if($officers == "KIM"){
	    $oic.=$officers;
	}
	elseif($officers=="JIMENEZ"){
	    $oic.=$officers;
	}
	elseif($officers=="CASABUENA"){
	    $oic.=$officers;
	}
	elseif($officers=="PASAPORTE"){
	    $oic.=$officers;
	}
	elseif($officers == "SABROSO"){
	    $oic.=$officers;
	}
	
//inserting data to database using webhost
	$sql = "INSERT INTO `Violations`(`student_id`, `vio_num`, `details`,`vio_officer`) VALUES ('$student_id', '$vio', '$detail','$oic');";
//$sql .= "SELECT vio_date FROM `Violations`";
    
	if(mysqli_multi_query($con,$sql)){
		echo "<b>Recorded. You have 48 hours to go to the DO to explain yourself.</b>";
	}
	else{
		echo "You have entered an invalid ID number.";
	}
	unset($oic);
	unset($vio);
	mysqli_close($con);
?>