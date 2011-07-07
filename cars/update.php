<?php
$control_var=$_GET['p'];

//Defining variables sent-------------------------------------------------------
//------------------------------------------------------------------------------
$reg_no=$_REQUEST['reg_no'];
$c_make=$_REQUEST['c_make'];
$c_model=$_REQUEST['c_model'];
$c_year=$_REQUEST['c_year'];
$eng_no=$_REQUEST['eng_no'];
$frame_no=$_REQUEST['frame_no'];
$c_color=$_REQUEST['c_color'];
$eng_vol=$_REQUEST['eng_vol'];
$c_owner=$_REQUEST['c_owner'];
$own_num=$_REQUEST['own_num'];
$c_other=$_REQUEST['c_other'];


//Connect to database----------------------------------------------------------
//-----------------------------------------------------------------------------
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
//escape string----------------------------------------------------------------
//-----------------------------------------------------------------------------
$reg_no=mysql_real_escape_string($reg_no);
$c_make=mysql_real_escape_string($c_make);
$c_model=mysql_real_escape_string($c_model);
$c_year=mysql_real_escape_string($c_year);
$eng_no=mysql_real_escape_string($eng_no);
$frame_no=mysql_real_escape_string($frame_no);
$c_color=mysql_real_escape_string($c_color);
$eng_vol=mysql_real_escape_string($eng_vol);
$c_owner=mysql_real_escape_string($c_owner);
$own_num=mysql_real_escape_string($own_num);
$c_other=mysql_real_escape_string($c_other);
//Define update string---------------------------------------------------------
//-----------------------------------------------------------------------------

$update="UPDATE cars_info SET reg_no='".$reg_no."',
    c_make='".$c_make."',
    c_model='".$c_model."',
    c_year='".$c_year."',
    eng_no='".$eng_no."',
    frame_no='".$frame_no."',
    c_color='".$c_color."',
    eng_vol='".$eng_vol."',
    c_owner='".$c_owner."',
    own_num='".$own_num."',
    c_other='".$c_other."' WHERE reg_no='".$p."';"; 





$rez = mysql_query($update);
echo "<br/>String: ".$update;
echo "<br/>Result: ".mysql_error();
//Car Table--------------------------------------------------------------------
//-----------------------------------------------------------------------------

include('car_table.php');

?>
