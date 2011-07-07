//Done Button------------------------------------------------------------------
//update the edited part in the database----------------------------------------
function part_update(control_var, target_file)
{
  
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
     document.getElementById("p_list").innerHTML=xmlhttp.responseText;
     }
   }
   
   // get variables from document
   try {var p_name=document.getElementById('p_name').value;} 
   catch(err){document.getElementById("p_list").innerHTML=err.description; }
   
   try {var p_other=document.getElementById('p_other').value;} 
   catch(err){document.getElementById("p_list").innerHTML=err.description; exit(); }
   
   
   xmlhttp.open("GET",target_file+"?p="+control_var+
                "&p_name="+p_name+
                "&p_other="+p_other 
                ,true);
   xmlhttp.send();
   
}




