<html>
    <body>

<br>
<?php
 date_default_timezone_set ('Africa/Nairobi');
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date(" G:i - d/m/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];

 echo "Your last visit was - ". $visit;
}
else
echo "This is your first Time visit to Tressure Capital Limited!";
?>
</body>
</html>