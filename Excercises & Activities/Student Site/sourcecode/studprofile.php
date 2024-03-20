<?php
session_start();

// Check if user data is available in session
if(isset($_SESSION['user_data'])) {
    // Access the user data
    $userData = $_SESSION['user_data'];

    // Display the data
    echo "<div id = Studentinfo>";
    echo "<fieldset>";
    echo "<legend>Student Profile</legend>";
    echo "Student_ID: " . $userData['demo_id'] . "<br><br>";
    echo "Firstname: " . $userData['firstname'] . "<br><br>";
    echo "Lastname: " . $userData['lastname'] . "<br><br>";
    echo "Age: " . $userData['age'] . "<br><br>";
    echo "Address: " . $userData['address'] . "<br><br>";
    echo "Contact: " . $userData['contact'] . "<br><br>";
    echo "Birthday: " . $userData['birthday'] . "<br><br>";
    echo "Email: " . $userData['Email'] . "<br><br><br>";
    echo '<button class="login"><a class="btn btn-info" href="update.php?id=' . $userData['demo_id'] . '">Update</a>&nbsp;</button>';
    echo '<button class="Register"><a href="index.php">Logout</a></button>';
    echo "</fieldset>";
    echo "</div";
    // Display other data as needed
} else {
    // Redirect to login page if user data is not available
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Site</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height:100vh;
            background: url('back.jpg') no-repeat;
            background-size: cover;
            background-position: center;

        }
        fieldset {
            border-color: #ddd;
            border-style: solid;
            border-width: 1px;
            border-radius: 4px;
            padding:10px 10px 10px 10px;
        }
        legend {
            padding: 0.2em 0.5em;
            border:1px solid #ddd;
            color:white;
            text-align: left;
        }
        #Studentinfo{

            width: 250px;
            background: rgba(255, 255, 255, .1);
            border:2px solid rgba(255, 255, 255, .2) ;
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            backdrop-filter: blur( 50px);
            border-radius:10px  ;
            color: #fff;
            padding: 40px 35px 35px 40px;
            margin: 10px 10px 10px 10px;
            position: absolute;
            left: 38%;
            top: 17%;

        }
        .profile-info {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .button {
            margin-top: 20px;
        }
        button {
            padding: 10px;
            width:100px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .login a, .Register a {
            text-decoration: none;
            color: white;
        }
        .login {
            background-color: #007bff;
            margin-right: 10px;
        }
        .Register {
            background-color: #28a745;
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
       <header class="header">
        <a href="" class="logo">Student Site</a>

           <nav class="navbar">
            <a href="">Home</a>
            <a href="">Back</a>
           
        
        </nav>
    
        </header>

</body>

</html>
