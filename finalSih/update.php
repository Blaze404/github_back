<?php


/*
$connection = ssh2_connect('devyani.local', 22);
ssh2_auth_password($connection, 'devya', 'Ishwari*3');

$stream = ssh2_exec($connection, 'ls');

echo $stream;*/
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('Net/SSH2.php');

$ssh = new Net_SSH2('saurabh.local');
if (!$ssh->login('saurabh', 'Saurabh')) {
    exit('Login Failed');
}

//echo $ssh->exec('cd ./Desktop');
///echo $ssh->exec('ls -l ./Desktop');
//echo $ssh->exec('./Documents/ubuntu/apache-hive-2.3.2-bin/bin/hive ./Desktop/temp.hql');
//echo $ssh->exec('./Desktop/sqoop');
//$ssh->exec('bash');
//echo $ssh->exec('source .bashrc');
echo $ssh->exec('$PATH');
//echo $ssh->exec("ls -l");
echo $ssh->exec("HADOOP_HOME=/home/saurabh/Documents/hadoop-main/hadoop-3.0.0/bin");
echo $ssh->exec('$HADOOP_HOME');
echo $ssh->exec('$HADOOP_HOME/hadoop fs -ls /');


?>
