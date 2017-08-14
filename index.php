<?php 
try
{
$conn = new PDO("mysql:host=localhost;dbname=company","root","tamboli9214
    ");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(Exception e)
{
    echo "Exception e"
}
$abc
