$(document).ready(function() {     
$('.cat').change(function(){  

   
if($('.cat').val() === 'certification')     
   {     
   $('.certification').show();      
   }     
else    
   {     
   $('.certification').hide();        
   }     

   

      
if($('.cat').val() === 'other')     
   {     
   $('.other').show();      
   }     
else    
   {     
   $('.other').hide();        
   }     



   if($('.cat').val() === 'free')     
   {     
   $('.free').hide();      
   }     
else    
   {     
   $('.free').hide();        
   }     

   
   
   });     
});     
