

var precio = document.getElementById("precioprod");
var venderX = document.getElementById("venderX")
var cotizarX = document.getElementById("cotizarX")

function updateStatus() {
    if (venderX.checked) {
      precio.value = "";
    } else {
      precio.value = "0.00";

    }
  }
  
  venderX.addEventListener('change', updateStatus)
  cotizarX.addEventListener('change', updateStatus)



  function onlyNumberKey(evt) {
              
    // Only ASCII character in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}


  Agregaprod.addEventListener("click", () =>{
    
  var producto = document.getElementById("producto").value; 
  var descproducto = document.getElementById("descripcion").value; 
  var cant = document.getElementById("cant").value; 
  var precio = document.getElementById("precio").value; 
 
  if((producto == "") || (descproducto == "") || (cant == "") || (precio == "")){

      Swal.fire({
          icon: 'error',
          title: 'Campos vacios!',
          text: 'Porfavor llena todos los campos',
          timer: 5000 // es ms (mili-segundos)
        })
        return false;
  
  }

  if ($('#foto').get(0).files.length === 0 || $('#foto2').get(0).files.length === 0 || $('#foto3').get(0).files.length === 0 || $('#video').get(0).files.length === 0) {
  
    Swal.fire({
          icon: 'error',
          title: 'No selecciono archivo',
          text: 'Porfavor llenar todos los archivos necesarios para agregar el producto',
          timer: 5000 // es ms (mili-segundos)
        })
        return false;
  }



})
