<?php

$connect = mysqli_connect('localhost', 'cms', 'Badrainbow45!?', 'cms');

if (mysqli_connect_error()){
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
