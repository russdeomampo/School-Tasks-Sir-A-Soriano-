<?php
//This variable stores the hostname of mysql server.
$serverName = "localhost";

//This variable stores the username used to connect to the MySQL database.
$user = "root";

//This variable stores the pass used to connect to the MySQL database.
$pass = "";

//This variable stores the name of the database you want to connect to within the MySQL server.
$databaseName = "demodb";

//Establishing the connection between php and your database
$conn = new mysqli($serverName, $user, $pass, $databaseName);

//Checking the connection if it's successfully established or not
if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $birthday = $_POST['birthday'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    // Check if email already exists in the database
    $check_query = "SELECT * FROM dbtable WHERE Email = '$Email'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        // Email already exists, show alert
        echo "<script>alert('Error: Email already exists.');</script>";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO `dbtable`(`firstname`, `lastname`, `age`, `address`, `contact`, `birthday`,`Email`,`Password`) 
        VALUES ('$first_name','$last_name','$age','$address','$contact','$birthday','$Email','$Password')";

        $sql1 = "INSERT INTO `dbemailandpass`(`Email`,`Password`) 
        VALUES ('$Email','$Password')";

        $result = $conn->query($sql);
        
        $result1 = $conn->query($sql1);

        if (($result === TRUE) and ($result1 === TRUE)) {
            header("Location: userprofile.php?email=$Email");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="copy.css">
 
</head>
<body>
    <div class="container">
        <heawdwadader>PERSONAL INFORMATION</header>

        <form action="" method="POST">
        
            <div class="form first">
                <div class="name">
                    <span class="title">NAME</span>

                    
                    <div class="fields">
                        
                        <div class="input-field">
                            <label for ="student id">Student ID:</label><br>
                            <input id="id" type="text" placeholder="Student ID" name="id" value="Auto" readonly>
                        </div>
                        
                        <div class="input-field">
                            <label for ="first">first name:</label><br>
                            <input id="first" type="text" placeholder="first name" name = "firstname" required>
                        </div>

                        <div class="input-field">
                            <label for ="middle">last name:</label><br>
                            <input id="middle" type="text" placeholder="last name" name = "lastname" required>
                        </div>
                                            
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Other Information</span>

                    <div class="fields">
                       
                        <div class="input-field">
                             <label for="last">Age</label><br>
                             <input id="street" type="number" placeholder="Age" name = "age" required>
                        </div>           
                        <div class="input-field">
                            <label for="street"> Address:</label><br>
                            <input id="street" type="text" placeholder="Address"  name = "address" required>
                        </div>

                        <div class="input-field">
                            <label for="barangay">Contact Number:</label><br>
                            <input id="barangay" type="number" placeholder="Contact" name = "contact" required>
                        </div>

                        </div>
                    
                       <div class="details ID">
                       
                        <div class="fields">
                            <div class="input-field">
                                <label for="mother"> Birthday</label><br>
                                <input id="mother" type="Date" placeholder="Birthday" name = "birthday" required>
                            </div>
                            <div class="input-field">
                                <label for="father"> Email:</label><br>
                                <input id="father" type="text" placeholder="Email"  name = "Email"  required>
                            </div>
                            <div class="input-field">
                                <label for="guardian"> Password:</label><br>
                                <input id="guardian" type="text" placeholder=" Password" name = "Password"  required>
                            </div>
                    
                        </div>
                    </div>
                </div>

                      <div class="btn">
                      <input class="nextBtn" type="submit" name="submit" value="Register">
                       
                      <button class="Register"><a href="index.php">Cancel</a></button>';
</div>
             </div>
        </form>
            
        </body>

</html>

<?php
$conn->close();
?>
