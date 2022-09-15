




$(function(){
    
    var name,pass;

   $(".btnAction").on('click',function(){

    name= $(".usuario").val();
    pass = $(".contra").val();

    if(name.length==0 || pass.length==0){
        alert("Campos vacios");
    }
    else{
        alerta();
    }
   

   });

});



function alerta(){
    
    alert("Su cuenta a sido Registrada !");
    }