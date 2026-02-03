<?php
   session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>นัทชา วรรณทัศ (นัทชา)</title>
</head>

<body>
<h1>a.php</h1>

<?php
   $_SESSION['name'] =  "นัทชา วรรณทัศ";
   $_SESSION['nickname'] =  "นัทชา ";
echo  @$_SESSION ['name'] ."<br>";
echo  @$_SESSION ['nickname'] ."<br>";
?>
</body>
</html>