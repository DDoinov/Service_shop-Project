function delete_car(str)
{
$yes=window.confirm("Warning!Deleting this car information will \n\
                     delete all the car's service information too. ")
if(!$yes)
    {exit; }
    
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
  
 xmlhttp.open("GET","del_car.php?p="+str,true);
 xmlhttp.send();  
}


