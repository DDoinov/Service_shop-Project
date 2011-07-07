<?php
$Index=$_REQUEST['p'];
//connect to mySQL------------------------------------------------------------
//----------------------------------------------------------------------------
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
//finish card query
mysql_query("UPDATE service_card SET out_date='".date("Y-m-d")."' 
    WHERE card_index=".$Index." ;")
          or die ("An arror occured!");
          
  include 'cards_table.php';
?>
