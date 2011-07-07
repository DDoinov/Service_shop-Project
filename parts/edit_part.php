<?php
$p=$_REQUEST['p'];
header("Cache-Control: no-cache, must-revalidate"); 
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
//Define select string---------------------------------------------------------
//-----------------------------------------------------------------------------

$select="SELECT * FROM parts_info ;";
$result=mysql_query($select);
$row_num=  mysql_num_rows($result);
echo "Rows returned : ".$row_num;
//parts table------------------------------------------------------------------
//-----------------------------------------------------------------------------

echo "<table>
    <tr bgcolor=#66cc00>
    <td>Action</td>
    <td>Index</td>
    <td>Part</td>
    <td>Part Information</td>
    </tr>";

while($rez_array=mysql_fetch_array($result))
{
   if($rez_array['part_index']==$p)
   {
       echo "<tr>
       <td>
            <button type=\"button\" 
            onClick=\"part_update('$rez_array[part_index]','update_part.php')\">
            Done</button>
            <button type=\"button\"
            onclick=\"parts_request('parts_table.php')\">Cancle</button>
       </td>
       <td>$rez_array[part_index]</td>
       <td><input ID=\"p_name\"  
       maxlenght=\"20\" value=\"$rez_array[p_name]\"></td>
       <td><textarea ID=\"p_other\" rows=\"5\" 
                cols=\"20\" maxlenght=\"300\" >$rez_array[p_other]</textarea></td>
           </tr>";
   }
   else
   {
   echo "<tr>
            <td><button type=\"button\" value=\"Edit\" 
    onClick=\"parts_edit('$rez_array[part_index]','edit_part.php')\">Edit</button>
                <button type=\"button\" 
       onClick=\"delete_part($rez_array[part_index])\">Delete</button></td>
            <td>$rez_array[part_index]</td>    
            <td>$rez_array[p_name]</td>
            <td><textarea 
            rows=\"5\" cols=\"20\" disabled=true>$rez_array[p_other]</textarea>
            </td>
        </tr>";
   }
}
echo "</table>";
echo "<button type=\"button\" onClick=\"parts_request('new_part.php')\">
        New Part</button>";
?>
