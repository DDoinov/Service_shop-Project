<?php
//get variables------------------------------------------------------------
//-------------------------------------------------------------------------
$p_name=$_REQUEST['p_name'];
$p_other=$_REQUEST['p_other'];

//check is the variables are set-------------------------------------------
//only part name is needed-------------------------------------------------

if($p_name=='')
    {
    echo "Part name is empty";
    include ("new_part.php");
    }
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
$p_name=mysql_real_escape_string($p_name);
$p_other=mysql_real_escape_string($p_other);
$insert="INSERT parts_info SET p_name='".$p_name."',
    p_other='".$p_other."' ;"; 





$rez = mysql_query($insert);
echo "<br/>String: ".$insert;
echo "<br/>Result: ".mysql_error();



header("Location: parts.html");
}


    
?>
