$(document).ready(function(){

    function formValidation(event){
        var password = document.getElementById("password");
        var confirm = document.getElementById("confirmpassword");;
    
        if(password.value.trim().length > 0){
            if(password.value != confirm.value){    
                password.classList.add("is-invalid");
                confirm.classList.add("is-invalid");
                event.preventDefault()
            } else{
                password.classList.remove("is-invalid");
                confirm.classList.remove("is-invalid");    
            }
        }
    }

    function load_image(file,componentId){
        var reader = new FileReader();
        
        reader.onload = function(e) {
            var display = document.getElementById(componentId);
            display.src = e.target.result;
        }
    
        reader.readAsDataURL(file);
    }
    

    var fileSelector = document.getElementById("avatar");
    var form = document.querySelector(".needs-validation");
    
    fileSelector.addEventListener("change",function(){
        load_image(fileSelector.files[0],"avatardisplay");
    })

    form.addEventListener("submit",function(event){
        formValidation(event);
    })
});

