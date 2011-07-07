function del_card(str)
{
    

$yes=window.confirm("Are You sure You want to delete this service card?")
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
     document.getElementById("rez").innerHTML=xmlhttp.responseText;
     }
   }
  
 xmlhttp.open("GET","../S_cards/del_card.php?p="+str,true);
 xmlhttp.send();  
}


