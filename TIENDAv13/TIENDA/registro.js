// var status;
// Reg.addEventListener("click", () =>{
    
//     fetch("registrar.php",{
//         method: "POST",
//         body: new FormData(formulario)
//     })

//     .then(response => response.text()).then(response => {

//         console.log(response);
       
//     })
// })

//     .then(res => {
//         status = res.status;
//         return res.text();
//    })

//    .then(data=>{
       
//        if(status == 200)
//        {
//         Swal.fire({
//             position: 'center',
//             icon: 'success',
//             title: 'Se a Registrado ! ',
//             showConfirmButton: false,
//             timer: 1500
//           })
//         location.href="InicioSesion.php";
//        }
//    })
 function readURL(input) {
        var url = input.value;
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var reader = new FileReader();
        
            reader.onload = function (e) {
                $('#avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        else{
             $('#avatar').attr('src', 'IMG/Imagen1.jpg');
          }
        }




    let timeout;
    let password = document.getElementById('PassEntry');
    let strengthBadge = document.getElementById('StrengthDisp');
    let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
    let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')



function StrengthChecker(PasswordParameter) {
    if(strongPassword.test(PasswordParameter)) {
        strengthBadge.style.backgroundColor = "green";
        strengthBadge.textContent = 'Strong';
    } else if(mediumPassword.test(PasswordParameter)) {
        strengthBadge.style.backgroundColor = 'blue';
        strengthBadge.textContent = 'Medium';
    } else {
        strengthBadge.style.backgroundColor = 'red';
        strengthBadge.textContent = 'Weak';
    }
}

// Adding an input event listener when a user types to the  password input 

password.addEventListener("input", () => {

    //The badge is hidden by default, so we show it

    strengthBadge.style.display= 'block'
    clearTimeout(timeout);

    //We then call the StrengChecker function as a callback then pass the typed password to it

    timeout = setTimeout(() => StrengthChecker(password.value), 500);

    //Incase a user clears the text, the badge is hidden again

    if(password.value.length !== 0){
        strengthBadge.style.display != 'block'
    } else{
        strengthBadge.style.display = 'none'
    }
});


function validation()
{
    var form = document.getElementById("formulario");
    var email = document.getElementById("email").value;
    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(email.match(pattern))
    {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML = "Email es Valido";
        text.style.color = "#00ff00";
    }
    else
    {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML = "Email Invalido";
        text.style.color = "#ff0000";
    }

    if(email == "")
    {
        form.classList.remove("valid");
        form.classList.remove("invalid");
        text.innerHTML = "";
     
    }
}




