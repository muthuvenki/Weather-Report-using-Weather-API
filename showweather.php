<?php 

$zip=$_POST['zip']; 

function httpGet($url)
{
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}
 
$url = "http://muthu.pythonanywhere.com/Weather_Report?zip=".$zip; 

echo httpGet($url);

session_start();

$_SESSION['weatherJson'] = httpGet($url);

header("Location:weather_report.php");
?>