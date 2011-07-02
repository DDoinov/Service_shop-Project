<?php
header("Cache-Control: no-cache, must-revalidate"); 
@ $db_connect=  mysql_pconnect('localhost', 'auto_service');
          if (!$db_connect){
              echo '<br> Error! could not connect to database!'.mysql_error();
          }
          else              echo '<br>Connected succesfuly!';
          $db=mysql_select_db('service_shop');
          
          $select="SELECT * FROM cars_info";
          $rez=  mysql_query($select);
          
          $rez_num=  mysql_num_rows($rez);
          
          
          echo "<table width=\"100%\" border=\"1\">";
          echo "<tr bgcolor=#66cc00>
                <td>Action</td>
                <td>Reg. No*</td>
                <td>car make</td>
                <td>Car model</td>
                <td>Car year</td>
                <td>Engine No*</td>
                <td>Frame No*</td>
                <td>Color</td>
                <td>Engine volume</td>
                <td>Owner name</td>
                <td>Contact number</td>
                <td>Other info</td>
              </tr>";
          
          while($car_array= mysql_fetch_array($rez))
          {
$reg_no=$car_array['reg_no'];
$c_make=$car_array['c_make'];
If($c_make==''){$c_make='No info';}
$c_model=$car_array['c_model'];
If($c_model==''){$c_model='No info';}
$c_year=$car_array['c_year'];
If($c_year==''){$c_year='No info';}
$eng_no=$car_array['eng_no'];
$frame_no=$car_array['frame_no'];
$c_color=$car_array['c_color'];
If($c_color==''){$c_color='No info';}
$eng_vol=$car_array['eng_vol'];
If($eng_vol==''){$eng_vol='No info';}
$c_owner=$car_array['c_owner'];
If($c_owner==''){$c_owner='No info';}
$own_num=$car_array['own_num'];
If($own_num==''){$own_num='No info';}
$c_other=$car_array['c_other'];
If($c_other==''){$c_other='No info';}
              
     echo "<tr>
               
                <td><button  
                        onclick=\"del_car('$car_array[reg_no]')\">Delete</button>
              
                    <button 
                        onclick=\"ajax_edit('$car_array[reg_no]','editcar.php')\">Edit</button>
              
                </td>
                <td>$reg_no</td>
                <td>$c_make</td>
              <td>$c_model</td>
              <td>$c_year</td>
              <td>$eng_no</td>
              <td>$frame_no</td>
              <td>$c_color</td>
              <td>$eng_vol</td>
              <td>$c_owner</td>
              <td>$own_num</td>
              <td><textarea name=\"c_other\" 
                    rows=\"5\" cols=\"10\">$c_other</textarea></td>
        

        </tr>";
              
          }
          echo "</table>";
  echo "<br/><button tybe=\"button\" value=\"New Car\" 
            onclick=\"ajax_request('insert_table.php')\">New Car</button>"        
?>
