<?php
include "conn.php";
if($_SERVER["REQUEST_METHOD"]=="POST") {
  $conference_day =$_POST["selectday"];
  $startup_name   =$_POST["name"];
  $technical_rate =$_POST["rate"];
  $team_work      =$_POST["team_work"];
  $flexability  =$_POST["flexability"];
  $time_management  =$_POST["time_management"];
  $commitment     =$_POST["commitment"];
  $respect  =$_POST["respect"];
  $problem_solving  =$_POST["problem_solving"];
  $rate_leader  =$_POST["rate_leader"];
  $rate_president  =$_POST["rate_president"];
  $tech_or_soft =$_POST["t_or_s"];

        $query = "INSERT INTO `startups` VALUES ('$conference_day','$startup_name','$technical_rate','$team_work','$flexability','$time_management','$commitment','$respect','$problem_solving','$rate_leader','$rate_president','$tech_or_soft')";

        if (mysqli_query($conn, $query)) {
            echo " added successfully!";
            // header("refresh:2,indexcards.php");
            header("location:../Conference/htmlPHP.php");
        } else {
            echo "error";
        }
}