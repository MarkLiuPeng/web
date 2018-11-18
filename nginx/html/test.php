<?php
$username=$_POST['username'];
$password=$_POST['password'];
echo $username."<br/>".$password."<br/>";
$con=mysql_connect("localhost","root","123");
if($con){
echo "<br/>sucessful!"."<br/>";
}
else{
echo  "<br/>falied".mysql_error();
}

/*
mysql_select_db("login");
mysql_query("set named utf8;");
$insert="insert into user(username,password)values("$username","$passwrod");
$update="update user set username='$username',password='$passwrod'where id=20";
$select='select * from user";
echo "<table width=600 align='center'
><tr><td>id</td><td>username</td><td>password</td></tr>";
while($row = mysql_fetch_row($res_select)){
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";}
echo "</table>";
*/
?>

