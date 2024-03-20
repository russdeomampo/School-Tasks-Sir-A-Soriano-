<?php
//This variable stores the hostname of mysql server.
$serverName = "localhost";

//This variable stores the username used to connect to the MySQL database.
$user = "root";

//This variable stores the pass used to connect to the MySQL database.
$pass = "";

//This variable stores the name of the database yo want to connect to within the MySQL server.
$databaseName = "demodb";

//Establishing the connection between php and your database
$conn = new mysqli($serverName, $user, $pass, $databaseName);

//Checking the connection if its successfully established or not
if ($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color:white;
            padding: 20px;
            background: url('back.jpg') no-repeat; 
            min-height:100vh;
            background-size: cover;
            background-position: center;
        }
        form {
            
            padding: 20px 20px 20px 20px;
            margin-left: 430px;
            width: 400px;
            background: rgba(255, 255, 255, .1);
            border:2px solid rgba(255, 255, 255, .2) ;
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            backdrop-filter: blur( 50px);
            border-radius:10px ;
            color: #fff;
        }
        h2 {
            color:white;
            text-align:center;
            margin-top:100px;
        }
        input[type=text], input[type=number], input[type=date], input[type=password] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 45%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            margin-left:10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        fieldset {
            border-color: #ddd;
            border-style: solid;
            border-width: 1px;
            border-radius: 4px;
        }
        legend {
            padding: 0.2em 0.5em;
            border:1px solid #ddd;
            color:white;
            text-align: left;
        }

        button a {
            text-decoration: none;
            color: white;
 
        }

        button {
           width: 45%;
           background-color: #4CAF50;
           color: white;
           padding: 14px 20px;
           border: none;
           border-radius: 4px;
           cursor: pointer;
         
         }

         .home{

height: 100vh;
display: flex;
align-items: center;
padding: 0;
}

.header{
position: fixed;
top: 0;
left: 0;
width: 85%;
padding: 20px 10%;
display: flex;
justify-content: space-between;
align-items: center;
z-index: 100;
border: 2px solid rgba(255, 255, 255, .2);
backdrop-filter: blur(10px);
box-shadow: 0 0 10px rgba(0, 0, 0, .2);
border-radius: 0%;
}

.logo{
font-size: 25px;
color: #fff;
text-decoration: none;
}
.navbar a{
font-size: 18px;
color: #fff;
text-decoration: none;
font-weight: 500;
margin-left: 35px;

}

.navbar a:hover,
.navbar a.active
{
color: #00abf0;
}
    </style>

</head>
<body>
<?php 

if (isset($_POST['update'])) {
    $id = $_POST['demo_id'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $birthday = $_POST['birthday'];
    $Email = $_POST['Email'];            
    $Password = $_POST['Password'];

    $sql = "UPDATE `dbtable` SET `firstname`='$first_name',`lastname`='$last_name',`age`='$age',`address`='$address',`contact`='$contact',`birthday`='$birthday',`Email`='$Email',`Password`='$Password' WHERE `demo_id`='$id'"; 

    $result = $conn->query($sql); 

    $sql1 = "UPDATE `dbemailandpass` SET `Email`='$Email',`Password`='$Password' WHERE `demo_id`='$id'"; 

    $result1 = $conn->query($sql1); 

    if (($result === TRUE) and ($result1 === TRUE)) {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];
    
            // Prepare and bind
            $stmt = $conn->prepare("SELECT * FROM  dbtable WHERE Email = ? AND Password = ?");
            $stmt->bind_param("ss", $Email, $Password);
    
            // Execute the statement
            $stmt->execute();
    
            // Store result
            $result = $stmt->get_result();
    
            if ($result->num_rows == 1) {
                // Login successful, redirect to another page
                $row = $result->fetch_assoc();
    
                // Store data in session or pass through URL parameter
                session_start();
                $_SESSION['user_data'] = $row;
    
                header("Location: studprofile.php"); // Change welcome.php to the page you want to redirect after login
                exit();
            }
        }

    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `dbtable` WHERE `demo_id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];

            $last_name = $row['lastname'];

            $age = $row['age'];
            
            $address = $row['address'];

            $contact  = $row['contact'];

            $birthday = $row['birthday'];

            $Email = $row['Email'];
            
            $Password = $row['Password'];

            $id = $row['demo_id'];

        } 

?>
        
        <header class="header">
        <a href="" class="logo">Student Site</a>

        <nav class="navbar">
            <a href="">Home</a>
            <a href="">Back</a>
           
        
        </nav>
        </header>

        <h2>Student Profile Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="firstname" value="<?php echo $first_name; ?>">

            <input type="hidden" name="demo_id" value="<?php echo $id; ?>">

            <br>

            Last name:<br>

            <input type="text" name="lastname" value="<?php echo $last_name; ?>">

            <br>

            Age:<br>

            <input type="number" name="age" value="<?php echo $age; ?>">

            <br>

            Address:<br>

            <input type="text" name="address" value="<?php echo $address; ?>">

            <br>
            Contact:<br>

            <input type="number" name="contact" value="<?php echo $contact; ?>">

            <br>

            Birthdate:<br>

            <input type="date" name="birthday" value="<?php echo $birthday;?>">

            <br>
            Email:<br>

            <input type="text" name="Email" value="<?php echo $Email;?>">
           <br>
            Pasword:<br>

            <input type="text" name="Password" value="<?php echo $Password;?>">
            
            <br><br>

            <input type="submit" value="Update" name="update">

            <button class="Register"><a href="studprofile.php">Cancel</a></button>';

          </fieldset>

        </form> 



</body>
</html>
<?php
} else { 

    header('Location: studprofile.php');

} 
}
?> 