<?php

 @ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
          $select="SELECT reg_no FROM cars_info";
          $rez=  mysql_query($select);
          ;
          $rez_num=  mysql_num_rows($rez);
          echo '<br>Number of rows:'.$rez_num.'<br>';
          
          echo "<select>";
          while($rez_array= mysql_fetch_array($rez))
          {
              $i=0;
    echo "<option value=\"$i\">".$rez_array['reg_no']."</option>";
              $i++;
          }
          echo "</select>"


?>
