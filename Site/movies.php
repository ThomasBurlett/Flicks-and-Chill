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
                    <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="movies.php"><img alt="Brand" src="http://i.imgur.com/bmVEUnC.png" style="width: 200px; margin-top: -35px;"></a>
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
                <button aria-expanded="true" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1" type="button">Sort By <span class="caret"></span></button>
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
        </div>
        <br>
        <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title" style="text-align: center; color: #FF6F0D;">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><div class="container">
         
  <button type="button" class="btn btn-warning">Click Here to Comment</button>
</div></a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action ="comment_success.php">
                            <fieldset>
                                <legend class="text-center header">Leave your comment below!</legend>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center fa fa-envelope-o bigicon" style="font-style: italic"></span>
                                    <div class="col-md-6">
                                        <input class="form-control" id="title" name="title" placeholder="Movie Title" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center fa fa-pencil-square-o bigicon" style="font-style: italic"></span>
                                    <div class="col-md-6">
                                        <textarea class="form-control" id="comment" name="comment" placeholder="Comment here!" rows="5">
</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <input class="btn btn-primary btn-lg" type="submit">
                                    </div>
                                </div>
                            </fieldset>
                        </form> 
                </div>
            </div>
        </div>
        </div>';
$count = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $title = $row[title];
        echo '<div class="well">' . '<div class="container-fluid">'; 
            echo '<img src="'.$row[imageURL].'" width="120" height="180" alt="';  echo '" style="float: left; width: 120px; height: 180px; margin-right: 20px;"/>';
            echo '<h3>' . $row[title] . '</h3>';
            echo '<h5> 
                    Rating: <span style="font-weight:normal;">' . $row[rating]. '/10</span><br>
                    Genre: <span style="font-weight:normal;">'. $row[genre]. '</span><br>
                    Year Released: <span style="font-weight:normal;">' . $row[year]. '</span><br>
                    Download Price: <span style="font-weight:normal;">$' . $row[price].'</span><br>
                    Buy It On Amazon: <span style="font-weight:normal;"><a href=http://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=' . $row[title].'>http://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=' . $row[title] . '</a></span>
                </h5>';
            echo '<p>' .
                    $row[description]
                . '</p>';


        echo '<br><div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: white;" id="drop">
                <h4 class="panel-title" style="color: #00AEFF;">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $count . '">View Comments</a>
                </h4>
            </div>
            <div id="collapse' . $count . '" class="panel-collapse collapse">
                <div class="panel-body">';
$sql_comment = "SELECT * FROM comments ";
$result_comment = $conn->query($sql_comment);
                     if ($result_comment->num_rows > 0) {
    // output data of each row
    while($row1 = $result_comment->fetch_assoc()) {
        
        if($row1[title] == $row[title]) {
            echo '<div class="well">';
        echo "<b>Anonymous User:</b><br>" . $row1[comment] . "<br></div>";

    }

    }
}
            echo    '</div>
            </div>
        </div>
        </div>' . '</div>' . '</div>';
        $count = $count + 1;
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
            <p style=" bottom: 0; width:100%; text-align: center; font-size: 12px"><i>Website Powered by Netwerks </i>
            </p>
             <style>
    #drop [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "^"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }
    #drop [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>
    </body>
</html>