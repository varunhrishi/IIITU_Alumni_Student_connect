<?php 
include 'db_connect.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport", content="width=device-width, initial-scale=1.0"> 
        <title>Connect Here</title>
        <link rel="stylesheet" href="CSS.css">
        <style>
            body {
                background-color: white;
                border-radius: 50px;
                padding: 5%;
            }
            form {
               
                
                background-color: darkgreen;
                border-radius: 30px;
                padding: 3% 5%;
                margin: 0 auto;
                box-shadow: 10px 10px 10px teal;
            }
            label{
                background-color: darkgoldenrod;
            }
            input, select{
                width: 250px;
                height: 30px;
                margin-bottom: .5em;
            
                border-radius: 5px;
            }
            button{
                width: 200px;
                height: 40px;
                margin-top: .2em;
                margin-bottom: .2em;
                border-radius: 5px;
                margin-left:18%;
                background-color: thistle;
            }
            button:hover{
                background-color:green;
                transition:.4s ease;
            }
            .script{
                width: 300px;
                font-family: Arial, Helvetica, sans-serif;
                color: darkgray;
            }
            .outer{
                display: block;
            }
            .inner{
                display: flex;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <form action="submitdetails.php" method="POST" class="form">
            
                <div class="outer">
                    <div class="inner">
                        <div class="script">Create an unique username:</div>
                        <input type="text" name="name" placeholder="blabbermouth" required autofocus>
                        </div>
                        <br><br>
                     <div class="inner">
                        <div class="script">Create user password:</div>
                        <input type="password" name="pword" placeholder="blabbe@rmouth" required>
                    </div>
                    <br><br>
                    <div class="inner">
                        <div class="script">Confirm password:</div>
                        <input type="password" name="confirmpword" placeholder="blabbe@rmouth" required>
                    </div>
                    <br><br>
                    <button>Proceed</button>
                </div>
                <br><br>
            </form>
        </div>
    </body>
</html>
<?php 


if(isset($_POST['pword']) && isset($_POST['pword']) && isset($_POST['confirmpword'])) {
    if($_POST['pword']!=$_POST['confirmpword']){
        echo "Passwords don't fucking match man!";
    } else{
        $_SESSION['Uname']= $_POST['uname']; $Uname= $_SESSION['Uname'];
        $_SESSION['pwd']= $_POST['pword']; $pwd= $_SESSION['pwd'];
        $query= "INSERT INTO userdata (username, password) VALUES ('$Uname', '$pwd')";
        mysqli_query($db, $query);
    }

}