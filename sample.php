<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "@root123";
    $dbname = "passcollector";

    //$firstname= $_POST['FirstName'];
    //$lastname= $_POST['LastName'];
    $email= $_POST['Email'];
    $pasword = $_POST['Pasword'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        $pasword = md5($pasword);
        $sql = "SELECT * FROM userinfo WHERE email='$email' AND passwd='$pasword'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1){
            echo "You are logged in";
            //include 'C://Users/slimd/Desktop/first_website/main-page.html';
            include("main-page.html");
            //header("Location: main-page.html");
            
            
        } else{
            echo "Sorry, your password or email is not correct or maybe your dumbass don't have an account with us!";
        }

    $conn->close();
    
    ?>
    <script>
         const email = document.getElementById("emailInput").value;
    
    if(email === "zadhs2009@gmail.com"){
        window.open("main-page.html");
    }
    else{
        alert("Please enter the correct email address");
    }
    </script>

</body>
</html>