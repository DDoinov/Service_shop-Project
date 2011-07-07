<?php
echo "Deleting";
$index=$_REQUEST['p'];
//connect to mySQL------------------------------------------------------------
//----------------------------------------------------------------------------
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
//delete----------------------------------------------------------------------
//----------------------------------------------------------------------------
          
mysql_query("DELETE FROM parts_in_cards WHERE card_index=$index")
or die(mysql_error());
mysql_query("DELETE FROM service_card WHERE card_index=$index")
or die(mysql_error());
echo"<br/>Done!<br/>";
include 'cards_table.php';
?>
