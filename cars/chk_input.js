function chk_input(str,new_edit)
{
 document.getElementById('alert').innerHTML= 
        "Function is on!Control var is : "+str;
    
  
      
    switch(str)
    {
 //Registration number check---------------------------------------------------
 //----------------------------------------------------------------------------
        case 'reg_no':
         var reg_no=document.getElementById('reg_no').value;
         document.getElementById('alert').innerHTML= 
        "Reg No block is on reg no show as "+(reg_no.length+1)+" long";
         if((reg_no.length+1)<6)
   {
    document.getElementById('done_btn').disabled = true;
    document.getElementById('alert').innerHTML= 
        "Alert!Registration number must be atleast 6 charecters.";
   }
   else {
       document.getElementById('done_btn').disabled = false;
    document.getElementById('alert').innerHTML= "";
   }
        break;
 //Engine number check---------------------------------------------------------
 //----------------------------------------------------------------------------
        case 'eng_no':
            var eng_no=document.getElementById('eng_no').value;
            
            if((eng_no.length+1)<10)
   {
    document.getElementById('done_btn').disabled = true;
    document.getElementById('alert').innerHTML= 
        "Alert!Engine number must be atleast 10 charecters.";
   }
   else {
       document.getElementById('done_btn').disabled = false;
    document.getElementById('alert').innerHTML= "";
   }
        break;
//frame number check-----------------------------------------------------------
//-----------------------------------------------------------------------------
        case 'frame_no':
            var frame_no=document.getElementById('frame_no').value;  
   
            if((frame_no.length+1)<10)
   {
    document.getElementById('done_btn').disabled = true;
    document.getElementById('alert').innerHTML= 
        "Alert!Frame number must be atleast 10 charecters.";
   }
   else {
       document.getElementById('done_btn').disabled = false;
    document.getElementById('alert').innerHTML= "";
   }
        break;
 
//defaut----------------------------------------------------------------------
//----------------------------------------------------------------------------
        default:
        document.getElementById('alert').innerHTML= 
        "Error!Value of str is : "+str;    
   
    }
    

    
    
  
  
    
    
            
}

