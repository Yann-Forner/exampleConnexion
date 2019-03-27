<?php
/**
 * Created by PhpStorm.
 * User: Yann
 * Date: 27/03/2019
 * Time: 20:41
 */
session_start();
?>
<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
    <script>
     $(document).ready(function () {
         $("#myForm").submit(function (event){
             event.preventDefault();
             $.ajax({
                 url: $(this).attr("action"),
                 type: $(this).attr("method"),
                 dataType : "json",
                 data: $(this).serialize()
             }).done(function (data) {
                 alert(data.success);
                 location.href = "";
             });
             return false;
         });
     })
    </script>

</head>

<body>
    <form id="myForm" method="post" action="isLogin.php">
        <input name="pseudo">
        <input type="password" name="mdp">
        <button type="submit" >valider</button>
    </form>
</body>
</html>