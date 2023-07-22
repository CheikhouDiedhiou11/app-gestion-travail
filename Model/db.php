<?php
function getconnexion()
{
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $dbname = 'job';
    $con = mysqli_connect($host, $user, $pwd, $dbname);
    return $con;
}
function executeSQL($sql)
{
    $exe = mysqli_query(getconnexion(), $sql);
    return $exe;
}
