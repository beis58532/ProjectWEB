<?php
if(isset($_POST["submit"])){
    //Grabbing the data
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $pwdRepeat=$_POST["pwdRepeat"];
    $email=$_POST["email"];

    //Instantiate SignupContr class
    include "../classes/dbh-classes.php";
    include "../classes/signup-classes.php";
    include "../classes/signup-contr-classes.php";
    $signup=new SignupContr($uid, $pwd, $pwdRepeat, $email);


    //Runnging error handelers and user signup
    $signup->signupUser();

    //Going back to the front page
    header("location: ../index.php?error=none");
}