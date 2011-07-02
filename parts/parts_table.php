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

echo "<table border=\"1\">
    <tr bgcolor=#66cc00>
    <td>Action</td>
    <td>Index</td>
    <td>Part</td>
    <td>Part Information</td>
    </tr>";

while($rez_array=mysql_fetch_array($result))
{
$p_name=$rez_array[p_name];
$p_other=$rez_array[p_other];
$replace_with=array(",","'",);
$replace_chars=array("%dot","%sq");
$p_other=str_replace($replace_chars, $replace_with, $p_other);
$p_other=addslashes($p_other);
   echo "<tr>
            <td><button type=\"button\" value=\"Edit\">Edit</button>
                <button type=\"button\" value=\"Delete\">Delete</button></td>
            <td>$rez_array[part_index]</td>    
            <td>$p_name</td>
            <td><textarea 
            rows=\"5\" cols=\"10\">$p_other</textarea></td>
        </tr>";
}
echo "</table>";
echo "<button type=\"button\" onClick=\"parts_request('new_part.php')\">
        New Part</button>";
?>
