// const signup = document.querySelector('input[type="submit"]');
// var status;
// signup.addEventListener('click',()=> {
//     const formData = new FormData(document.querySelector('form'));
    
//     fetch('http://localhost:8080/Model.php',{
//          method: 'POST',
//          body: formData,
//          mode: 'cors',
//          cache: 'default'

//     })
//     .then(res => {
//          status = res.status;
//          return res.text();
//     })

//     .then(data=>{
//         alert(data);
//         if(status == 200)
//         {
//             location.href="BOTONES.html";
//         }
//     })

//     .catch(err=>{alert(err)})

// })

alert("hola");

function validate(val) {
    v1 = document.getElementById("nombre");
    v2 = document.getElementById("nombre2");
    v3 = document.getElementById("apat");
    v4 = document.getElementById("amat");
    v5 = document.getElementById("email");
    v6 = document.getElementById("usuario");
    v7 = document.getElementById("contra");
    
    
    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;
    flag5 = true;
    flag6 = true;
    flag7 = true;

    if(val>=1 || val==0) {
        if(v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        }
        else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }

    if(val>=2 || val==0) {
        if(v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        }
        else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if(val>=3 || val==0) {
        if(v3.value == "") {
            v3.style.borderColor = "red";
            flag3 = false;
        }
        else {
            v3.style.borderColor = "green";
            flag3 = true;
        }
    }
    if(val>=4 || val==0) {
        if(v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        }
        else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }
    if(val>=5 || val==0) {
        if(v5.value == "") {
            v5.style.borderColor = "red";
            flag5 = false;
        }
        else {
            v5.style.borderColor = "green";
            flag5 = true;
        }
    }
    if(val>=6 || val==0) {
        if(v6.value == "") {
            v6.style.borderColor = "red";
            flag6 = false;
        }
        else {
            v6.style.borderColor = "green";
            flag6 = true;
        }
    }

    if(val>=7 || val==0) {
        if(v7.value == "") {
            v7.style.borderColor = "red";
            flag7 = false;
        }
        else {
            v7.style.borderColor = "green";
            flag7 = true;
        }
    }

    flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6 && flag7;

    return flag;
}






function alerta(){
    
    alert("Su cuenta a sido Registrada !");
    }


    // function readURL(input) {
    //     var url = input.value;
    //     var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    //     if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
    //         var reader = new FileReader();
        
    //         reader.onload = function (e) {
    //             $('#usuario-foto').attr('src', e.target.result);
    //         }
    //         reader.readAsDataURL(input.files[0]);
    //     }
    //     else{
    //          $('#usuario-foto').attr('src', '/IMG/Imagen1.jpg');
    //       }
    //     }
    
