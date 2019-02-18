<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/6/19
 * Time: 9:22 AM
 */

include ('sasa.php');
echo "<br>";
//echo readfile("mimi.txt");

$myfile = fopen("mimi.txt", "r")
or die("Unable to open file!");
echo fread($myfile,filesize("mimi.txt"));
fclose($myfile);
?>