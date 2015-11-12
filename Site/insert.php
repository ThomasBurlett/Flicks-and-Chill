<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "flicks_and_chill");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_POST['title']);
$imageURL = mysqli_real_escape_string($link, $_POST['imageURL']);
$price = mysqli_real_escape_string($link, $_POST['price']);
$rating = mysqli_real_escape_string($link, $_POST['rating']);
$genre = mysqli_real_escape_string($link, $_POST['genre']);
$year = mysqli_real_escape_string($link, $_POST['year']);
$description = mysqli_real_escape_string($link, $_POST['description']);
 
// attempt insert query execution
$sql = "INSERT INTO movies (title, imageURL, price, rating, genre, year, description) VALUES ('$title', '$imageURL' , '$price', '$rating' , '$genre' , '$year' , '$description')";
if(mysqli_query($link, $sql)){
    echo "Suggestion recorded succesfully.";
} else{
    echo "ERROR: Suggestion could not be sent. Please retry! $sql. " . mysqli_error($link);
}
 
echo '<br><a href="movies.php"><button class="btn btn-success" type="submit">Back to Movies</button></a>';
// close connection
mysqli_close($link);
?>