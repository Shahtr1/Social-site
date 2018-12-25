<?php  
include("../../config/config.php");
include("../classes/User.php");
include("../classes/Post.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Post($con, $_REQUEST['userLoggedIn']); //PHP $_REQUEST is used to collect data after submitting an HTML form.
$posts->loadProfilePosts($_REQUEST, $limit);
?>