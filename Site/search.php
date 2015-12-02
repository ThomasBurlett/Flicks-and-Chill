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
        <?php 
             if(isset($_POST['submit'])){ 
                 if(isset($_GET['go'])){ 
                        if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
                             $name=$_POST['name']; 
                             //connect  to the database 
                             $db=mysql_connect  ("localhost", "root",  "root") or die ('I cannot connect to the database  because: ' . mysql_error()); 
                             //-select  the database to use 
                             $mydb=mysql_select_db("flicks_and_chill"); 
                            //-query  the database table 
                            $sql="SELECT  title, imageURL, description, genre, year, rating, price FROM movies WHERE title LIKE '%" . $name .  "%' OR title LIKE '%" . $name ."%'"; 
                            //-run  the query against the mysql query function 
                            $result=mysql_query($sql); 
                            //-create  while loop and loop through result set 
                            while($row=mysql_fetch_array($result)){ 
                                   
                                //-display the result of the array 
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


                                    echo '</div>' . '</div>';
                            } 
                        } 
                        else{ 
                            echo  "<p>Please enter a search query</p>"; 
                        } 
                } 
            } 
          ?><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        </script> <!-- Include all compiled plugins (below), or include individual files as needed -->
         
        <script src="js/bootstrap.min.js">
        </script><br>
        <br>
        <p style=" bottom: 0; width:100%; text-align: center; font-size: 12px">
            <i>Website Powered by Netwerks</i>
        </p>
    </body>
</html>