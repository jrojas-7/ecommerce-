/* window.onload = function (){
    var form = document.getElementById('form-register');
    var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    var regexPassword = /^w{8,10}$/;
    console.log(form);

    form.onsubmit = function (evento){
        for (var elemento of form.elements)
        {
            if (elemento.type == 'hidden' || elemento.type == 'submit')
            {
                continue;
            }
            if (elemento.value.trim() == '' && elemento.type != 'file')
            {
                console.log(elemento.name + ' esta vacio');
                evento.preventDefault();
            } else {
                if (elemento.name == 'name' && elemento.value.trim().length < 2)
                {
                    console.log('Al menos dos letras');
                    evento.preventDefault();
                }
                if (elemento.name == 'email' && !regexEmail.test(elemento.value.trim()))
                {
                    console.log('Email invalido');
                    evento.preventDefault();
                }
                if (elemento.name == 'password')
                {
                    var password = elemento.value.trim();
                    if (!regexPassword.test(password))
                    {
                        console.log('Password invalido');
                        evento.preventDefault();
                    } 
                }
                if (elemento.name == 'password_confirmation' && password != elemento.value.trim())
                {
                    console.log('Las contraseñas no coinciden');
                    evento.preventDefault();
                }
                
            }
        }
    }
} */