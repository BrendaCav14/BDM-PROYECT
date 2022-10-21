registrar.addEventListener("click", () =>{
    fetch("registrar.php",{
        method: "POST",
        body: new FormData(formulario)
    }).then(response => response.text()).then(response => {
        console.log(response);
        if(response=="ok")
        {
            alert("Su cuenta a sido Registrada !");

        }
    })
})