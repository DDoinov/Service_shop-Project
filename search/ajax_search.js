function async(target)
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
     document.getElementById(target).innerHTML=xmlhttp.responseText;
     }
   }   
}
//=============================================================================
//=============================================================================
function ajax_search(str)
{
  
 switch (str)
  {
   case "Car":
       
       async("choice");
       xmlhttp.open("GET","getcar.php",true);
       xmlhttp.send();
       break;
   case "Date":
       async("choice");
       xmlhttp.open("GET","get_date.php",true);
       xmlhttp.send();
       break;
   case "Unfinished":
       async("choice");
       xmlhttp.open("GET","show_date.php?date=0000-00-00&bef_aft=Unfinished",true);
       xmlhttp.send();
       break;
  }
}

function search_car(str)
{
    async("rez");
    xmlhttp.open("GET","show_car.php?p="+str,true);
    xmlhttp.send();
}
function date_search()
{
  
//radio button check---------------------------------------------------------
//---------------------------------------------------------------------------
for (var i=0; i < document.MyForm.Radio.length; i++)
   {
   if (document.MyForm.Radio[i].checked)
      {
      var bef_aft = document.MyForm.Radio[i].value;
      }
   }
//get date-------------------------------------------------------------------
//---------------------------------------------------------------------------
var year=document.getElementById("year").value;
var month=document.getElementById("month").value;
var day=document.getElementById("day").value;
//set date string------------------------------------------------------------
//---------------------------------------------------------------------------
var date=year+"-"+month+"-"+day;

//send request---------------------------------------------------------------
//---------------------------------------------------------------------------
    async("rez");
    xmlhttp.open("GET","show_date.php?date="+date+"&bef_aft="+bef_aft,true);
    xmlhttp.send();
}