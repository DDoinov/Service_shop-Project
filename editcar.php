<?php
$p=$_REQUEST['p'];
if (!$p){exit;}
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
          $select="SELECT * FROM cars_info";
          $rez=  mysql_query($select);
          ;
          $rez_num=  mysql_num_rows($rez);
          echo '<br>Number of rows:'.$rez_num.'<br>';
          
          echo "<table border=\"1\">";
          echo "<tr bgcolor=#66cc00>
                <td>Action</td>
                <td>Reg. No</td>
                <td>car make</td>
                <td>Car model</td>
                <td>Car year</td>
                <td>Engine No</td>
                <td>Frame No</td>
                <td>Color</td>
                <td>Engine volume</td>
                <td>Owner name</td>
                <td>Contact number</td>
                <td>Other info</td>
              </tr>";
          
          while($rez_array= mysql_fetch_array($rez))
          {
           if($p==$rez_array['reg_no'])
               {
               echo "<form name=\"EditForm\" action=\"response_normal.php\" 
                   method=\"post\" onsubmit=\"xmlhttpPost('update.php',
               'EditForm', 'c_list', 
               '<br>Please wait...updating<br>'); return false;\">;

               <tr>
                <td><input name=\"submit\" type=\"submit\" value=\"Done\">
              
                    
              
                </td>
                <td><input name=\"reg_no\" value=\"$rez_array[reg_no]\"
                        size=\"8\" maxlength=\"8\"></td>
                <td><input name=\"c_make\" value=\"$rez_array[c_make]\"
                        size=\"10\" maxlength=\"10\"></td>
              <td><input name=\"c_model\" value=\"$rez_array[c_model]\"
                        size=\"8\" maxlength=\"8\"></td>
              <td><input name=\"c_year\" value=\"$rez_array[c_year]\"
                        size=\"4\" maxlength=\"4\"></td>
              <td><input name=\"eng_no\" value=\"$rez_array[eng_no]\"
                        size=\"14\" maxlength=\"20\"></td>
              <td><input name=\"frame_no\" value=\"$rez_array[frame_no]\"
                        size=\"14\" maxlength=\"20\"></td>
              <td><input name=\"c_color\" valie=\"$rez_array[c_color]\"
                        size=\"8\" maxlength=\"8\"></td>
              <td><input name=\"eng_vol\" value=\"$rez_array[eng_vol]\"
                        size=\"4\" maxlength=\"4\"></td>
              <td><input name=\"c_owner\" value=\"$rez_array[c_owner]\"
                        size=\"10\" maxlength=\"30\"></td>
              <td><input name=\"own_num\" value=\"$rez_array[own_num]\"
                        size=\"8\" maxlength=\"10\"></td>
              <td><input name=\"c_other\" value=\"$rez_array[c_other]\"
                        size=\"10\" maxlength=\"254\"></td>
        

        </tr></form>";
               }
               else
                   {
    echo "<tr>
                <td><button  
                    onclick=\"deletecar('$rez_array[reg_no]')\">Delete</button>
              
                    <button 
                        onclick=\"editcar('$rez_array[reg_no]')\">Edit</button>
              
                </td>
                <td>$rez_array[reg_no]</td>
                <td>$rez_array[c_make]</td>
              <td>$rez_array[c_model]</td>
              <td>$rez_array[c_year]</td>
              <td>$rez_array[eng_no]</td>
              <td>$rez_array[frame_no]</td>
              <td>$rez_array[c_color]</td>
              <td>$rez_array[eng_vol]</td>
              <td>$rez_array[c_owner]</td>
              <td>$rez_array[own_num]</td>
              <td>$rez_array[c_other]</td>
        

        </tr>";
               }
          }
          echo "</table>";
          echo "edit table!";
          echo "<br>sent data was :".$p ;
?>
