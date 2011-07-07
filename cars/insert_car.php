<?php
$reg_no=$_REQUEST['reg_no'];
$c_make=$_REQUEST['c_make'];
$c_model=$_REQUEST['c_model'];
$c_year=$_REQUEST['c_year'];
$eng_no=$_REQUEST['eng_no'];
$frame_no=$_REQUEST['frame_no'];
$c_color=$_REQUEST['c_color'];
$eng_vol=$_REQUEST['eng_vol'];
$c_owner=$_REQUEST['c_owner'];
$own_num=$_REQUEST['own_num'];
$c_other=$_REQUEST['c_other'];

//check variables-------------------------------------------------------------
//----------------------------------------------------------------------------
if(strlen($reg_no)<6)
{
    echo'<p>Fields with \' * \' must be defined.</p><br/>';
    echo'<p>Registration number must be atleast 6 charecters.</p><br/>';
echo "<form name=\"new_car\" action=\"insert_car.php\" method=\"GET\">";
echo "<table border=\"1\">
    
<tr>
    <td bgcolor=#66cc00>Registration Number*</td>
    <td><input name=\"reg_no\" value=\"$reg_no\" size=\"6\" maxlength=\"10\">         
        
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car manufacturer</td>
    <td><input name=\"c_make\" value=\"$c_make\" size=\"6\" maxlength=\"20\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car model</td>
    <td><input name=\"c_model\" value=\"$c_model\" size=\"10\" maxlength=\"20\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car year</td>
    <td><input name=\"c_year\" value=\"$c_year\" size=\"5\" maxlength=\"5\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Engine number*</td>
    <td><input name=\"eng_no\" value=\"$eng_no\" size=\"14\" maxlength=\"20\">
       
       
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Frame number*</td>
    <td><input name=\"frame_no\" value=\"$frame_no\" size=\"14\" maxlength=\"20\">
      
     
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car color</td>
    <td><input name=\"c_color\" value=\"$c_color\" size=\"5\" maxlength=\"10\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Engine volume</td>
    <td><input name=\"eng_vol\" value=\"$eng_vol\" size=\"5\" maxlength=\"10\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Owner names*</td>
    <td><input name=\"c_owner\" value=\"$c_owner\" size=\"15\" maxlength=\"30\">
        
       
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Owner number*</td>
    <td><input name=\"own_num\" value=\"$own_num\" size=\"10\" maxlength=\"15\">
      
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Other information</td>
    <td><textarea name=\"c_other\" value=\"$c_other\" rows=\"5\" cols=\"30\" maxlength=\"300\"></textarea>
</td>
</tr>   ";

echo"<input name=\"submit\" type=\"submit\" value=\"Submit\">";

echo "</form>";
}
//check engine number----------------------------------------------------------
//-----------------------------------------------------------------------------
elseif(strlen($eng_no)<10)
{
    echo'<p>Fields with \' * \' must be defined.</p><br/>';
    echo'<p>Engine number must be atleast 10 charecters.</p><br/>';
echo "<form name=\"new_car\" action=\"insert_car.php\" method=\"GET\">";
echo "<table border=\"1\">
    
<tr>
    <td bgcolor=#66cc00>Registration Number*</td>
    <td><input name=\"reg_no\" value=\"$reg_no\" size=\"6\" maxlength=\"10\">         
        
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car manufacturer</td>
    <td><input name=\"c_make\" value=\"$c_make\" size=\"6\" maxlength=\"20\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car model</td>
    <td><input name=\"c_model\" value=\"$c_model\" size=\"10\" maxlength=\"20\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car year</td>
    <td><input name=\"c_year\" value=\"$c_year\" size=\"5\" maxlength=\"5\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Engine number*</td>
    <td><input name=\"eng_no\" value=\"$eng_no\" size=\"14\" maxlength=\"20\">
       
       
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Frame number*</td>
    <td><input name=\"frame_no\" value=\"$frame_no\" size=\"14\" maxlength=\"20\">
      
     
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car color</td>
    <td><input name=\"c_color\" value=\"$c_color\" size=\"5\" maxlength=\"10\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Engine volume</td>
    <td><input name=\"eng_vol\" value=\"$eng_vol\" size=\"5\" maxlength=\"10\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Owner names*</td>
    <td><input name=\"c_owner\" value=\"$c_owner\" size=\"15\" maxlength=\"30\">
        
       
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Owner number*</td>
    <td><input name=\"own_num\" value=\"$own_num\" size=\"10\" maxlength=\"15\">
      
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Other information</td>
    <td><textarea name=\"c_other\" value=\"$c_other\" rows=\"5\" cols=\"30\" maxlength=\"300\"></textarea>
</td>
</tr>   ";

echo"<input name=\"submit\" type=\"submit\" value=\"Submit\">";

echo "</form>";
}
//frame number check-----------------------------------------------------------
//-----------------------------------------------------------------------------
elseif(strlen($frame_no)<10)
{
    echo'<p>Fields with \' * \' must be defined.</p><br/>';
    echo'<p>Frame number must be atleast 10 charecters.</p><br/>';
echo "<form name=\"new_car\" action=\"insert_car.php\" method=\"GET\">";
echo "<table border=\"1\">
    
<tr>
    <td bgcolor=#66cc00>Registration Number*</td>
    <td><input name=\"reg_no\" value=\"$reg_no\" size=\"6\" maxlength=\"10\">         
        
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car manufacturer</td>
    <td><input name=\"c_make\" value=\"$c_make\" size=\"6\" maxlength=\"20\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car model</td>
    <td><input name=\"c_model\" value=\"$c_model\" size=\"10\" maxlength=\"20\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car year</td>
    <td><input name=\"c_year\" value=\"$c_year\" size=\"5\" maxlength=\"5\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Engine number*</td>
    <td><input name=\"eng_no\" value=\"$eng_no\" size=\"14\" maxlength=\"20\">
       
       
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Frame number*</td>
    <td><input name=\"frame_no\" value=\"$frame_no\" size=\"14\" maxlength=\"20\">
      
     
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car color</td>
    <td><input name=\"c_color\" value=\"$c_color\" size=\"5\" maxlength=\"10\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Engine volume</td>
    <td><input name=\"eng_vol\" value=\"$eng_vol\" size=\"5\" maxlength=\"10\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Owner names*</td>
    <td><input name=\"c_owner\" value=\"$c_owner\" size=\"15\" maxlength=\"30\">
        
       
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Owner number*</td>
    <td><input name=\"own_num\" value=\"$own_num\" size=\"10\" maxlength=\"15\">
      
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Other information</td>
    <td><textarea name=\"c_other\" value=\"$c_other\" rows=\"5\" cols=\"30\" maxlength=\"300\"></textarea>
</td>
</tr>   ";

echo"<input name=\"submit\" type=\"submit\" value=\"Submit\">";

echo "</form>";
}


else{
//Connect to database----------------------------------------------------------
//-----------------------------------------------------------------------------
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
//escape string----------------------------------------------------------------
//-----------------------------------------------------------------------------
$reg_no=mysql_real_escape_string($reg_no);
$c_make=mysql_real_escape_string($c_make);
$c_model=mysql_real_escape_string($c_model);
$c_year=mysql_real_escape_string($c_year);
$eng_no=mysql_real_escape_string($eng_no);
$frame_no=mysql_real_escape_string($frame_no);
$c_color=mysql_real_escape_string($c_color);
$eng_vol=mysql_real_escape_string($eng_vol);
$c_owner=mysql_real_escape_string($c_owner);
$own_num=mysql_real_escape_string($own_num);
$c_other=mysql_real_escape_string($c_other);
//Define update string---------------------------------------------------------
//-----------------------------------------------------------------------------

$insert="INSERT cars_info SET reg_no='".$reg_no."',
    c_make='".$c_make."',
    c_model='".$c_model."',
    c_year='".$c_year."',
    eng_no='".$eng_no."',
    frame_no='".$frame_no."',
    c_color='".$c_color."',
    eng_vol='".$eng_vol."',
    c_owner='".$c_owner."',
    own_num='".$own_num."',
    c_other='".$c_other."' ;"; 





$rez = mysql_query($insert);
echo "<br/>String: ".$insert;
echo "<br/>Result: ".mysql_error();
//Car Table--------------------------------------------------------------------
//-----------------------------------------------------------------------------



}
header("Location: cars.html");
?>
