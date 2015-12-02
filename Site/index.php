<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>
            Flicks and Chill-Home
        </title><!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="movies.php"><img alt="Brand" src="http://i.imgur.com/bmVEUnC.png" style="width: 200px; margin-top: -35px;"></a>
                </div><!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a href="movies.php">Movies</a>
                        </li>
                        <li>
                            <a href="suggestions.php">Suggestions</a>
                        </li>
                        <li>
                            <a href="help.php">Help</a>
                        </li>
                        <li>
                            <a href="about_us.php">About Us</a>
                        </li>
                    </ul>
                    <div class="navbar-form navbar-left" role="search">
                        <form  method="post" action="search.php?go"  id="searchform"> 
                            <input  type="text" name="name"> 
                            <input  type="submit" name="submit" value="Search"> 
                        </form> 
                    </div>
                    <div class="nav navbar-nav navbar-right" style="margin-left: 2em; padding-top: 9px">
                        <a href="login.php"><button class="btn btn-success" type="submit">Login Here</button></a> <a href="sign_up.php"><button class="btn btn-danger" type="submit">Sign Up Here</button></a>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="jumbotron">
            <div class="container" style="text-align: center">
                <h1>
                    Welcome to Flicks and Chill!
                </h1>
                <p>
                    This catalog has a list of some of the best movies out there.<br>
                    Press the button below to start exploring our selection!
                </p>
                <p>
                    <a class="btn btn-primary btn-lg" href="movies.php" role="button">Click Here</a>
                </p>
            </div>
        </div>
        <div class="container">

            <div class="row">

                    
                <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "flicks_and_chill";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM movies ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
            echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';  echo '<a class="thumbnail" href="movies.php">
                        <img width="160" height="220" class="img-responsive" src="' . $row[imageURL] .'" alt=""></a></div>';      
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</div></div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        </script> <!-- Include all compiled plugins (below), or include individual files as needed -->
         
        <script src="js/bootstrap.min.js">
        </script>
        <br><br>
            <p style=" bottom: 0; width:100%; text-align: center; font-size: 12px"><i>Website Powered by Netwerks </i>
            </p>
    </body>
</html>