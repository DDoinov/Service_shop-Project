<?php
header("Cache-Control: no-cache, must-revalidate"); 
$reg_no=$_REQUEST['p'];
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
$query="SELECT * FROM service_card WHERE reg_no LIKE '".$reg_no."' ;";
$result=mysql_query($query);
          
          
echo "<table>
        <tr bgcolor=#66cc00>
        <td>Action</td>
        <td>Car Reg. No</td>
        <td>Service began on:</td>
        <td>Service done on:</td>
        <td>Employee Name</td>
        <td>Parts Used</td>
        <td>Service Cost</td>
        <td>Service information</td>
         </tr>";
 while($rez_array=  mysql_fetch_array($result))
{
 echo" </tr>
     <td>
     <button 
     onClick=\"location='../S_cards/edit_card.php?p=$rez_array[card_index]'\">
     Edit</button>
     <button type=\"button\" value=\"Delete\"
     onClick=\"del_card($rez_array[card_index])\">Delete</button></td>
     </td>
     <td>$rez_array[reg_no]</td>
     <td>$rez_array[in_date]</td>
     <td>";
     if($rez_array['out_date']!='0000-00-00'){echo "$rez_array[out_date]";}
     else{echo "Service not finished!<br/>
         <button 
         onclick=\"card_finish('$rez_array[card_index]')\">
         Finish</button>";}
     echo "</td>
         <td>$rez_array[w_name]</td>
         <td><div id=\"parts\" style=\"width: 120px; height:80px; 
                    overflow-y: scroll\">";
         $part_query = "SELECT p_name FROM parts_info 
             WHERE part_index 
             IN (SELECT part_index FROM parts_in_cards 
             WHERE card_index=".$rez_array['card_index'].")";
        $parts_result=mysql_query($part_query);
 
           
      while($rez=mysql_fetch_array($parts_result))
      {
          echo "$rez[p_name]<br/>";
      }
            
                   
        
         
     echo   "</div></td>
         <td>$rez_array[s_cost]</td>
         <td>$rez_array[s_info]</td>
      
        <tr>  ";
}
        
        
  echo  "


        </table>    ";
?>
