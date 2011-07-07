<?php
//set variables----------------------------------------------------------------
//-----------------------------------------------------------------------------
$index=$_REQUEST['card_index'];
$in_date=$_REQUEST['in_date'];
$out_date=$_REQUEST['out_date'];
$w_name=$_REQUEST['w_name'];

if(isset($_REQUEST['parts'])){$parts=$_REQUEST['parts'];}

$s_cost=$_REQUEST['s_cost'];
$s_info=$_REQUEST['s_info'];

//print varialbe values --------------------------------------------------------
//-----------------------------------------------------------------------------
/*
echo "$reg_no<br/>";
echo "$in_date<br/>";
echo "$out_date<br/>";
echo "$w_name<br/>";
echo "$parts<br/>";
echo "$s_cost<br/>";
echo "$s_info<br/>";
*/

//connect to mySQL------------------------------------------------------------
//----------------------------------------------------------------------------
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
//escape string---------------------------------------------------------------
//----------------------------------------------------------------------------
$in_date=mysql_real_escape_string($in_date);
$out_date=mysql_real_escape_string($out_date);
$w_name=mysql_real_escape_string($w_name);
$s_cost=mysql_real_escape_string($s_cost);
$s_info=mysql_real_escape_string($s_info);
          
//insert new card info--------------------------------------------------------
//----------------------------------------------------------------------------

$update="UPDATE service_card SET in_date='".$in_date."',
                                 out_date='".$out_date."',
                                 w_name='".$w_name."',
                                 s_cost='".$s_cost."',
                                 s_info='".$s_info."'
                                     WHERE card_index=$index ;";
$result=mysql_query($update) or die(mysql_error());
//parts in cards---------------------------------------------------------------
//-----------------------------------------------------------------------------
mysql_query("DELETE FROM parts_in_cards WHERE card_index=$index")
or die(mysql_error());
if(isset($parts))
{
    
    
    foreach ($parts as $value) 
    {
        
        
        $insert_part="INSERT parts_in_cards SET card_index='".$index."',
                                                part_index='".$value."' ;";
        mysql_query($insert_part);
        
    }
    }      
    
    header("location: cards.html")
?>
