<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>
            Flicks and Chill-Movies
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
                    <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="#"><img alt="Brand" src="http://i.imgur.com/bmVEUnC.png" style="width: 200px; margin-top: -35px;"></a>
                </div><!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="active">
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
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input class="form-control" placeholder="Search" type="text">
                        </div><button class="btn btn-default" type="submit">Submit</button>
                    </form>
                    <div class="nav navbar-nav navbar-right" style="margin-left: 2em; padding-top: 9px">
                        <a href="login.php"><button class="btn btn-success" type="submit">Login Here</button></a> <a href="sign_up.php"><button class="btn btn-danger" type="submit">Sign Up Here</button></a>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

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



echo '<div class="container-fluid">
            <h2 style="float: left">
                Movie Database
            </h2><br>
            <div class="dropdown" style="float:right">
                <button aria-expanded="true" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1" type="button">Other Filters <span class="caret"></span></button>
                <ul aria-labelledby="dropdownMenu1" class="dropdown-menu">
                    <li>
                        <a href="yearDescending.php">Year Descending</a>
                    </li>
                    <li>
                        <a href="yearAscending.php">Year Ascending</a>
                    </li>
                    <li>
                        <a href="rating.php">Rating</a>
                    </li>
                    <li>
                        <a href="price.php">Price</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown" style="float:right">
                <button aria-expanded="true" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1" type="button"> Filter by Genre <span class="caret"></span></button>
                <ul aria-labelledby="dropdownMenu1" class="dropdown-menu">
                    <li>
                        <a href="action.php">Action</a>
                    </li>
                    <li>
                        <a href="comedy.php">Comedy</a>
                    </li>
                    <li>
                        <a href="horror.php">Horror</a>
                    </li>
                    <li>
                        <a href="war.php">War</a>
                    </li>
                </ul>
            </div>
        </div>';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo '<div class="well">' . '<div class="container-fluid">'; 
            echo '<img src="'.$row[imageURL].'" width="120" height="180" alt="';  echo '" style="float: left; width: 120px; height: 180px; margin-right: 20px;"/>';
            echo '<h3>' . $row[title] . '</h3>';
            echo '<h5> 
                    Rating: <span style="font-weight:normal;">' . $row[rating]. '/10</span><br>
                    Genre: <span style="font-weight:normal;">'. $row[genre]. '</span><br>
                    Year Released: <span style="font-weight:normal;">' . $row[year]. '</span><br>
                    Download Price: <span style="font-weight:normal;">$' . $row[price].'</span>
                </h5>';
            echo '<p>' .
                    $row[description]
                . '</p>';


        echo '</div>' . '</div>';
        
    }
} else {
    echo "0 results";
}

$conn->close();
?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        </script> <!-- Include all compiled plugins (below), or include individual files as needed -->
         
        <script src="js/bootstrap.min.js">
        </script>
            <br><br>
            <p style=" bottom: 0; width:100%; text-align: center; font-size: 12px"><i>Website Powered by Netwerks &copy;</i>
            </p>
    </body>
</html>