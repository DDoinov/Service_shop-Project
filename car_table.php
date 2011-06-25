<?php

@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
          $select="SELECT * FROM cars_info";
          $rez=  mysql_query($select);
          ;
          $rez_num=  mysql_num_rows($rez);
          echo '<br>Number of rows:'.$rez_num.'<br>';
          
          echo "<table border=\"1\">";
          echo "<tr bgcolor=#66cc00>
                <td>Action</td>
                <td>Reg. No</td>
                <td>car make</td>
                <td>Car model</td>
                <td>Car year</td>
                <td>Engine No</td>
                <td>Frame No</td>
                <td>Color</td>
                <td>Engine volume</td>
                <td>Owner name</td>
                <td>Contact number</td>
                <td>Other info</td>
              </tr>";
          
          while($rez_array= mysql_fetch_array($rez))
          {
              
     echo "<tr>
                <td><button  
                        onclick=\"del_car('$rez_array[reg_no]')\">Delete</button>
              
                    <button 
                        onclick=\"editcar('$rez_array[reg_no]')\">Edit</button>
              
                </td>
                <td>$rez_array[reg_no]</td>
                <td>$rez_array[c_make]</td>
              <td>$rez_array[c_model]</td>
              <td>$rez_array[c_year]</td>
              <td>$rez_array[eng_no]</td>
              <td>$rez_array[frame_no]</td>
              <td>$rez_array[c_color]</td>
              <td>$rez_array[eng_vol]</td>
              <td>$rez_array[c_owner]</td>
              <td>$rez_array[own_num]</td>
              <td>$rez_array[c_other]</td>
        

        </tr>";
              
          }
          echo "</table>";
          
?>
