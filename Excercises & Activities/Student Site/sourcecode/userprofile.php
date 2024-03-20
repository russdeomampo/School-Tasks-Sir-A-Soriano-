<?php
$serverName = "localhost";
$user = "root";
$pass = "";
$databaseName = "demodb";
$conn = new mysqli($serverName, $user, $pass, $databaseName);

if (isset($_GET['email'])) {
    $Email = $_GET['email'];
    $sql = "SELECT * FROM dbtable WHERE Email = '$Email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<div id = Studentinfo>";
            echo "<fieldset>";
            echo "<legend>Student Profile</legend>";
            echo "Student_ID: " . $row["demo_id"] . "<br><br>";
            echo "First Name: " . $row["firstname"] . "<br><br>";
            echo "Last Name: " . $row["lastname"] . "<br><br>";
            echo "Age: " . $row["age"] . "<br><br>";
            echo "Address: " . $row["address"] . "<br><br>";
            echo "Contact: " . $row["contact"] . "<br><br>";
            echo "Birthday: " . $row["birthday"] . "<br><br>";
            echo "Email: " . $row["Email"] . "<br><br><br>";
            echo '<button><a class="update" href="update.php?id=' . $row['demo_id'] . '">Update</a>&nbsp;</button>';
            echo '<button><a class="update" href="index.php?id=' . $row['demo_id'] . '">Logout</a>&nbsp;</button>';
            echo "</fieldset>";
            echo "</div";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "No email specified";
}
$conn->close();
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
            text-decoration: none;
            color: white;
            background-color: #007bff;
            margin-left: 10px;
        }
        button a {
            text-decoration: none;
            color: white;
            background-color: #007bff;

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
