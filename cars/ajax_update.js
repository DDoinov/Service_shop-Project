//Done Button------------------------------------------------------------------
//update the edited car in the database----------------------------------------
function ajax_update(control_var, target_file)
{
  //document.getElementById("c_list").innerHTML="Function is on";
  if (window.XMLHttpRequest)
   {// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
   }
 else
   {// code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
 xmlhttp.onreadystatechange=function()
   {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
     {
     document.getElementById("c_list").innerHTML=xmlhttp.responseText;
     }
   }
   
   // get variables from document
   var reg_no=document.getElementById('reg_no').value;
   var c_make=document.getElementById('c_make').value;
   var c_model=document.getElementById('c_model').value;
   var c_year=document.getElementById('c_year').value;
   var eng_no=document.getElementById('eng_no').value;
   var frame_no=document.getElementById('frame_no').value;
   var c_color=document.getElementById('c_color').value;
   var eng_vol=document.getElementById('eng_vol').value;
   var c_owner=document.getElementById('c_owner').value;
   var own_num=document.getElementById('own_num').value;
   var c_other=document.getElementById('c_other').value;
   
   
   
   xmlhttp.open("GET",target_file+"?p="+control_var+
                "&reg_no="+reg_no+
                "&c_make="+c_make+
                "&c_model="+c_model+
                "&c_year="+c_year+
                "&eng_no="+eng_no+
                "&frame_no="+frame_no+
                "&c_color="+c_color+
                "&own_num="+own_num+
                "&c_owner="+c_owner+
                "&c_other="+c_other+
                "&eng_vol="+eng_vol
                
   
                ,true);
   xmlhttp.send();
   
}




