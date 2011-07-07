<?php
header("Cache-Control: no-cache, must-revalidate"); 
$index=$_REQUEST['p'];
//Connect to mySQL-------------------------------------------------------------
//----------------------------------------------------------------------------
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
          $select_card="SELECT * FROM service_card 
                        WHERE card_index=".$index." ;";
          $select_part_unused="SELECT * FROM parts_info 
             WHERE part_index NOT
             IN (SELECT part_index FROM parts_in_cards 
             WHERE card_index=".$index.")";
          $select_part_used="SELECT * FROM parts_info 
             WHERE part_index
             IN (SELECT part_index FROM parts_in_cards 
             WHERE card_index=".$index.")";
          $rez_card= mysql_query($select_card) or die (mysql_error());
          $rez_upart= mysql_query($select_part_used);
          $rez_un_part=mysql_query($select_part_unused);
          
          
     $rez_array=mysql_fetch_array($rez_card);
          

//Table----------------------------------------------------------------------
//---------------------------------------------------------------------------

echo "<form name=\"new_part\" action=\"edit.php\" method=\"GET\">
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
     <input name=\"card_index\" type=\"hidden\" value=\"$rez_array[card_index]\">
    <td><input name=\"reg_no\" disabled=true
     size=\"10\" value=\"$rez_array[reg_no]\"></td>
              
              <td>
              <input name=\"in_date\" value=\"$rez_array[in_date]\" size=\"10\">
              </td>
              <td>
              dd-mm-YYYY<br/>
              <input name=\"out_date\" 
                    value=\"$rez_array[out_date]\" size=\"10\" >
              </td>
              <td>
              <input name=\"w_name\" value=\"$rez_array[w_name]\">
              </td>
              <td><div style=\"width: 180px; height:120px; overflow-y: scroll\">
              ";
          while($rez_upart_array= mysql_fetch_array($rez_upart))
          {
              
    echo "<input type=\"checkbox\" name=\"parts[]\"
              value=\"$rez_upart_array[part_index]\" checked=true>"
              .$rez_upart_array['p_name']."<br/>";
              
          }
          echo"==========<br/>";
          while($rez_un_part_array= mysql_fetch_array($rez_un_part))
          {
              
    echo "<input type=\"checkbox\" name=\"parts[]\"
              value=\"$rez_un_part_array[part_index]\" >"
              .$rez_un_part_array['p_name']."<br/>";
              
          }
          echo "</div>
              
              
              </td>
              <td>
              <input name=\"s_cost\" value=\"$rez_array[s_cost]\" size=\"6\">\$
              </td>
              <td>
              <textarea name=\"s_info\" 
                cols=\"15\" rows=\"5\">$rez_array[s_info]</textarea>
              </td>
    
    </tr>
    </table>
    <input type=\"submit\" name=\"submit\" value=\"Done\">
    
    </form>
    <button onClick=\"location='cards.html'\">Cancle</button>
        ";
?>
