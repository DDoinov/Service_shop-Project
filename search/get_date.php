<?php

echo"<table>
    <tr>
    <td>
    <form name=\"MyForm\">
    <input type=\"radio\" name=\"Radio\" value=\"start\"
    checked=true>After:<br/>
    <input type=\"radio\" name=\"Radio\" value=\"finish\">Before:
    </form>
    </td>
        <td>
        Year: <br/>
    <input id=\"year\" value=\"".date('Y')."\"/ size=\"4\" maxlenght=\"4\">
        </td>
        <td>
        Month:<br/><select id=\"month\">";
for($i=1;$i<=12;$i++)
{echo "<option>";
    if($i<10){echo "0".$i;}
    else{echo $i ;}
    echo"</option>";}


 echo"</select>
        </td>
        <td>
        Day:<br/><select id=\"day\">";
for($i=1;$i<=31;$i++)
{echo "<option>";
    if($i<10){echo "0".$i;}
    else{echo $i ;}
    echo"</option>";}


 echo"</select>    
        </td>
        <td >Ready!<br/><button onClick=\"date_search()\">GO!</button></td>
    </tr>
    
    </table>
    
    ";
?>
