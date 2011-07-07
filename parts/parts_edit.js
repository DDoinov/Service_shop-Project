function parts_edit(control_var, target_file)
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
  
 xmlhttp.open("GET",target_file+"?p="+control_var,true);
 xmlhttp.send();  
}
