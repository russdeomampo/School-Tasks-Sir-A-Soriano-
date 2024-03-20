<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

    <title>Student Site</title>
    <style>
 
    footer {
    text-align: center;
    padding: 20px 0;
    background-color: rgba(0, 0, 0, 0.2); /* Semi-transparent background */
    color: #fff; /* White text color */
    width: 100%;
    position: fixed; /* Make it stick at the bottom */
    bottom: 0;
    left: 0;
     }

    footer p {
    margin: 0;
    font-size: 16px;
    }
   </style>
</head>
<body>
    <header class="header">
        <a href="" class="logo">Student Site</a>

        <nav class="navbar">
            <a href="" class="active">home</a>
            <a href="">about</a>
            <a href="">services</a>
            <a href="">portfolio</a>
            <a href="">contact</a>
        
        </nav>
    
    </header>

    <div class="wrapper">
    <form action="" method="POST">
            <h1>Login </h1>
        
        <div class="input-box">
            <input type="text" placeholder="Username" name="Email" required>
            <i class='bx bxs-user'></i>
        </div>

         <div class="input-box">
            <input type="password" placeholder="password" name="Password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>

        
        <button type="submit" class="btn">Login </button>

        <div class="register-link">
             <p>don't have  an account 
             <a href="register.php">register</a></p>
        </div>

        </form>
   
        </div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> DCSA Caloocan</p>
</footer>

    <?php
    
    // Establish database connection
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "demodb"; // Change this to your actual database name
    $conn = new mysqli($serverName, $username, $password, $databaseName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and password from the form
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
        } else {
            // Login failed, redirect back to the login page with an error message
            $message = "Login failed!";
            echo "<script>alert('$message');</script>";
            exit();
        }
    }

    ?> 

</body>
</html>
