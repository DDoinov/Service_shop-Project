<?php
//Connect to mySQL-------------------------------------------------------------
//----------------------------------------------------------------------------
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
          $select_car="SELECT reg_no FROM cars_info";
          $select_part="SELECT * FROM parts_info ;";
          $rez_car=  mysql_query($select_car);
          $rez_part=  mysql_query($select_part);
          
          
          
          

//Table----------------------------------------------------------------------
//---------------------------------------------------------------------------

echo "<form name=\"new_part\" action=\"insert_card.php\" method=\"GET\">
    <table>
    <tr bgcolor=#66cc00>
        <td>Car Reg. No</td>
        <td>Service began on:</td>
        <td>Service done on:</td>
        <td>Employee Name</td>
        <td>Parts Available</td>
        <td>Service Cost</td>
        <td>Service information</td>
    
    </tr>
    <td><select name=\"reg_no\" >";
          while($rez_array= mysql_fetch_array($rez_car))
          {
              
    echo "<option 
              value=\"$rez_array[reg_no]\">".$rez_array['reg_no']."</option>";
              
          }
          echo "</select>
              </td>
              
              <td>
              <input name=\"in_date\" size=\"10\" value=".date("Y-m-d")." >
              </td>
              <td>
              YYYY-mm-dd<br/>
              <input name=\"out_date\" size=\"10\">
              </td>
              <td>
              <input name=\"w_name\">
              </td>
              <td><div style=\"width: 180px; height:120px; overflow-y: scroll\">
              ";
          while($rez_part_array= mysql_fetch_array($rez_part))
          {
              
    echo "<input type=\"checkbox\" name=\"parts[]\"
              value=\"$rez_part_array[part_index]\">"
              .$rez_part_array['p_name']."<br/>";
              
          }
          echo "</div>
              
              
              </td>
              <td>
              <input name=\"s_cost\" size=\"6\">\$
              </td>
              <td>
              <textarea name=\"s_info\" cols=\"15\" rows=\"5\"></textarea>
              </td>
    
    </tr>
    </table>
    <input type=\"submit\" name=\"submit\" value=\"Done\">
    
    </form>
    <button onClick=\"card_request('cards_table.php')\">Cancle</button>
        ";
?>
