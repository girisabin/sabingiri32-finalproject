<?php 
$con=mysqli_connect("localhost","root","");

$db="create database cityguidedb";
$query=mysqli_query($con,$db);
mysqli_select_db($con,"cityguidedb");



$comment="create table comment(
id int PRIMARY KEY auto_increment,
name varchar(250),
email varchar(250),
comment varchar(250)
)";
$query2=mysqli_query($con,$comment);



$fileuploadtables="create table fileuploadtables(
id int PRIMARY KEY auto_increment,
username varchar(250),
password varchar(250),
fullname varchar(250),
imglink varchar(250)
)";
$query3=mysqli_query($con,$fileuploadtables);


$fileuploadtables1="create table fileuploadtable1(
id int PRIMARY KEY auto_increment,
username varchar(250),
password varchar(250),
fullname varchar(250),
imglink varchar(250)
)";
$query4=mysqli_query($con,$fileuploadtables1);

$places="create table places(
id int PRIMARY KEY auto_increment,
placename varchar(250),
cplacename varchar(250),
description varchar(250),
image varchar(250)
)";
$query5=mysqli_query($con,$places);

?>