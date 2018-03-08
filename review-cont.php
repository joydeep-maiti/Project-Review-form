<?php   
    include('conn.php');
    $stars = $_POST['stars'];
    $project = $_COOKIE['prjvalue'];
    $review = $_POST['review'];
    $name = $_POST['name'];
    $college = $_POST['college'];
    $email = $_POST['email'];

    $ins = "INSERT INTO rating SET stars = '$stars', project='$project', review='$review', name='$name', college='$college', email='$email'";
    $con->query($ins);

?>