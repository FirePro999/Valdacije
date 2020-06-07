<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$comment=$_POST["comment"];
$website=$_POST["website"];
?>

<h2>PHP Valadacije Primer</h2>
<form action="htmlprez.html" method="post">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Yeh Name is " . $name . "<br>";
echo "<br>";
echo "I like your e mail  it is " . $email . "<br>" ;
echo "<br>";
echo "I hate your website but it is " . $website . "<br>";
echo "<br>";
echo "Your comment was " . $comment . "<br>";
echo "<br>";
echo "Your gender shoud be attack heli but it is " . $gender . "<br>";
?>

</body>
</html>