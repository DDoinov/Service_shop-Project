<?php
//get variables------------------------------------------------------------
//-------------------------------------------------------------------------
$p_name=$_REQUEST['p_name'];
$p_other=$_REQUEST['p_other'];
$replace_chars=array(",","'",);
$replace_with=array("%dot","%sq");
$p_other=str_replace($replace_chars, $replace_with, $p_other);
$p_other=trim($p_other);
$p_other=stripslashes($p_other);

//check is the variables are set-------------------------------------------
//only part name is needed-------------------------------------------------

if($p_name==''){exit ();}
else
    {
//Connect to database----------------------------------------------------------
//-----------------------------------------------------------------------------
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
//Define update string---------------------------------------------------------
//-----------------------------------------------------------------------------

$insert="INSERT parts_info SET p_name='".$p_name."',
    p_other='".$p_other."' ;"; 





$rez = mysql_query($insert);
echo "<br/>String: ".$insert;
echo "<br/>Result: ".mysql_error();




}
header("Location: parts.html");

    
?>
