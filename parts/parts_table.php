<?php
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

   echo "<tr>
            <td><button 
    onclick=\"parts_edit('$rez_array[part_index]','edit_part.php')\">Edit</button>
                <button type=\"button\" 
    onClick=\"delete_part($rez_array[part_index])\">Delete</button></td>
            <td>$rez_array[part_index]</td>    
            <td>$rez_array[p_name]</td>
            <td><textarea 
            rows=\"5\" cols=\"15\" disabled=true>$rez_array[p_other]</textarea>
            </td>
        </tr>";
}
echo "</table>";
echo "<button type=\"button\" onClick=\"parts_request('new_part.php')\">
        New Part</button>";
?>
