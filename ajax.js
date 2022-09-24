

// insert section starts here

$(".btn").click(function(){
      var name=$('#name').val();
      var address=$('#address').val();
      var number=$('#number').val();
      var email=$('#email').val();
    
   $.ajax({
      method:'POST',
      url:'insert.php',
      data:{name:name,address:address,number:number,email:email},
      success:function(data){
         read()
      }
   });
});
 // insert section ends here


 // reading data section starts here
   
function read(){
    
   var read="";
   $.ajax({
      url:'read.php',
      method:'POST',
      data:{read:read},
      success:function(data){

         $('.tbody').html(data);

      }

   });


}



 // readiing data section  ends here