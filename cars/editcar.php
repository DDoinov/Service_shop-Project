<?php
header("Cache-Control: no-cache, must-revalidate"); 
$p=$_REQUEST['p'];
echo 'Control Variable is : '.$p;
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
          $select="SELECT * FROM cars_info";
          $edit_rez=  mysql_query($select);
          
          $rez_num=  mysql_num_rows($edit_rez);
          echo 'Fields with \"*\" must be defined';
          
          echo "<table >";
          echo "<tr bgcolor=#66cc00>
                <td>Action</td>
                <td>Reg. No*</td>
                <td>car make</td>
                <td>Car model</td>
                <td>Car year</td>
                <td>Engine No*</td>
                <td>Frame No*</td>
                <td>Color</td>
                <td>Engine volume</td>
                <td>Owner name</td>
                <td>Contact number</td>
                <td>Other info</td>
              </tr>";
          
          while($edit_array= mysql_fetch_array($edit_rez))
          {
           if($p==$edit_array['reg_no'])
               {
               echo "

               <tr>
                <td><input id=\"done_btn\" type=\"submit\" value=\"Done\"
                        onclick=\"ajax_update('$edit_array[reg_no]','update.php')\">
              
                    <button type=\"button\" 
                    onclick=\"ajax_request('car_table.php')\">Cancle</button>
              
                </td>
                <td><input ID=\"reg_no\" value=\"$edit_array[reg_no]\"
                        size=\"8\" maxlength=\"8\" 
                            onkeypress=\"chk_input('reg_no','edit')\"></td>
                <td><input ID=\"c_make\" value=\"$edit_array[c_make]\"
                        size=\"10\" maxlength=\"10\"></td>
              <td><input ID=\"c_model\" value=\"$edit_array[c_model]\"
                        size=\"8\" maxlength=\"8\"></td>
              <td><input ID=\"c_year\" value=\"$edit_array[c_year]\"
                        size=\"4\" maxlength=\"4\"></td>
              <td><input ID=\"eng_no\" value=\"$edit_array[eng_no]\"
                        size=\"14\" maxlength=\"20\"
                            onkeypress=\"chk_input('eng_no','edit')\"></td>
              <td><input ID=\"frame_no\" value=\"$edit_array[frame_no]\"
                        size=\"14\" maxlength=\"20\"
                                onkeypress=\"chk_input('frame_no','edit')\"></td>
              <td><input ID=\"c_color\" value=\"$edit_array[c_color]\"
                        size=\"8\" maxlength=\"8\"></td>
              <td><input ID=\"eng_vol\" value=\"$edit_array[eng_vol]\"
                        size=\"4\" maxlength=\"4\"></td>
              <td><input ID=\"c_owner\" value=\"$edit_array[c_owner]\"
                        size=\"10\" maxlength=\"30\"></td>
              <td><input ID=\"own_num\" value=\"$edit_array[own_num]\"
                        size=\"8\" maxlength=\"10\"></td>
              <td><input ID=\"c_other\" value=\"$edit_array[c_other]\"
                        size=\"10\" maxlength=\"254\"></td>
        

        </tr>";
               }
               else
                   {
    echo "<tr>
                <td><button  
                    onclick=\"delete_car('$edit_array[reg_no]')\">Delete</button>
              
                    <button 
                       onclick=\"ajax_edit('$edit_array[reg_no]','editcar.php')\">
                            Edit
                   </button>
              
                </td>
                <td>$edit_array[reg_no]</td>
                <td>$edit_array[c_make]</td>
              <td>$edit_array[c_model]</td>
              <td>$edit_array[c_year]</td>
              <td>$edit_array[eng_no]</td>
              <td>$edit_array[frame_no]</td>
              <td>$edit_array[c_color]</td>
              <td>$edit_array[eng_vol]</td>
              <td>$edit_array[c_owner]</td>
              <td>$edit_array[own_num]</td>
              <td>$edit_array[c_other]</td>
        

        </tr>";
               }
          }
          echo "</table>";
          echo "edit table!";
          echo "<br>sent data was :".$p ;
          echo "<br/><button type=\"button\" value=\"New Car\" 
            onclick=\"ajax_request('insert_table.php')\">New Car</button>"
?>
