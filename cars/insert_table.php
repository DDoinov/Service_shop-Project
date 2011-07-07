<?php
echo'<p>Fields with \' * \' must be defined.</p><br/>';
echo "<form name=\"new_car\" action=\"insert_car.php\" method=\"GET\">";
echo "<table >
    
<tr>
    <td bgcolor=#66cc00>Registration Number*</td>
    <td><input name=\"reg_no\" size=\"6\" maxlength=\"10\">         
        
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car manufacturer</td>
    <td><input name=\"c_make\" size=\"6\" maxlength=\"20\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car model</td>
    <td><input name=\"c_model\" size=\"10\" maxlength=\"20\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car year</td>
    <td><input name=\"c_year\" size=\"5\" maxlength=\"5\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Engine number*</td>
    <td><input name=\"eng_no\" size=\"14\" maxlength=\"20\">
       
       
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Frame number*</td>
    <td><input name=\"frame_no\" size=\"14\" maxlength=\"20\">
      
     
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Car color</td>
    <td><input name=\"c_color\" size=\"5\" maxlength=\"10\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Engine volume</td>
    <td><input name=\"eng_vol\" size=\"5\" maxlength=\"10\"></td>
</tr>
<tr>
    <td bgcolor=#66cc00>Owner names</td>
    <td><input name=\"c_owner\" size=\"15\" maxlength=\"30\">
        
       
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Owner number</td>
    <td><input name=\"own_num\" size=\"10\" maxlength=\"15\">
      
    </td>
</tr>
<tr>
    <td bgcolor=#66cc00>Other information</td>
    <td><textarea name=\"c_other\" rows=\"5\" cols=\"30\" maxlength=\"300\"></textarea>
</td>
</tr>   ";

echo"<input name=\"submit\" type=\"submit\" value=\"Submit\">";

echo "</form>";
echo "<button onClick=\"ajax_request('car_table.php')'\">Cancle</button>";

?>
