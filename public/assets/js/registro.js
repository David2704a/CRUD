/*========================================
Slider
==========================================*/
if(document.querySelector('.contenedor-Slider')){

    let Index=1;
    let SelectedIndex=1;

    const Slides=document.querySelector('.Slider');
    const Slide=Slides.children;
    const SlidesTotal=Slides.childElementCount;

    const Dots=document.querySelector('.Dots');
    const ante=document.querySelector('.ante');
    const siguiente=document.querySelector('.siguiente');


    //se agrega los punto de acuerdo a la cantidad de slides
    for (let i = 0; i < SlidesTotal; i++) {
        Dots.innerHTML +='<span class="Dot"></span>';
    }
    
    // aqui se ejecuta la funcion
    mostrarSlider(Index);

    //hago que el slide sea automatico
    setInterval(()=>{
        mostrarSlider(Index=SelectedIndex);
    },5000); //están representados en milisegundos

    //funcion para mostrar el slider
    function mostrarSlider(num){
        if(SelectedIndex > SlidesTotal){
            SelectedIndex=1;
        }else{
            SelectedIndex++;
        }

        if(num > SlidesTotal){
            Index=1;
        }

        if(num<1){
            Index=SlidesTotal;
        }

        //se remueve la clase active de todos los slide
        for(let i=0; i<SlidesTotal;i++){
            Slide[i].classList.remove('Active');
        }

        //aqui remuevo la clase active de los puntos

        for (let x = 0; x < Dots.children.length; x++) {
            Dots.children[x].classList.remove('Active');
        }

        //muestro el slide
        Slide[Index-1].classList.add('Active');

        //agrego la clase active al punto donde se encuntra el slide
        Dots.children[Index-1].classList.add('Active');

        
    }

    //evento para los botones ante y siguiente
    siguiente.addEventListener('click',(e)=>{
        mostrarSlider(Index +=1);
        SelectedIndex=Index;
    });

    ante.addEventListener('click',(e)=>{
        mostrarSlider(Index +=-1);
        SelectedIndex=Index;
    });

    //puntos
    for (let y = 0; y < Dots.children.length; y++) {
        
        //por cada dot que ecuentre le agregamos el evento click y ejecutamo la funcion de slide
        Dots.children[y].addEventListener('click',()=>{
            mostrarSlider(Index=y+1);
            SelectedIndex=y+1;
        });
    }

}




// /*========================================
// Mostrar contraseña
// ==========================================*/
const mostrarClave=document.querySelectorAll('.mostrarClave');
const inputPass=document.querySelectorAll('.clave');

for (let i = 0; i < mostrarClave.length; i++) {
    
    mostrarClave[i].addEventListener('click',()=>{

        if(inputPass[i].type==="password"){

            //se cambia el tipo password a text
            inputPass[i].setAttribute('type','text');

            //se remueve la clase del icono
            mostrarClave[i].classList.remove('fa-eye');

            //se agrega el nuevo icono
            mostrarClave[i].classList.add('fa-eye-slash');

            //ee agrega la clase active
            mostrarClave[i].classList.add('active');

        }else{
            //si el tipo de input es text

            //se cambia el tipo text a password
            inputPass[i].setAttribute('type','password');

             //se remueve la clase del icono
             mostrarClave[i].classList.remove('fa-eye-slash');

             //se agrega el nuevo icono
             mostrarClave[i].classList.add('fa-eye');
 
             //se agrega la clase active
             mostrarClave[i].classList.remove('active');
 
        }

    });
}


/*========================================
Validacion de registro
==========================================*/

// let names,email,password,apellidos,genero,telefono,fecha,confirmation_password,cbx_notificaciones,cbx_terminos;

// if(document.getElementById('#btnRegistro')){

//     const btnRegistro=document.getElementById('#btnRegistro');

//     //evento click al boton registro
//     btnRegistro.addEventListener('click',(e)=>{

//         e.preventDefault();

//         const msError=document.querySelector('#formRegistro .error-text');
//         msError.innerHTML="";
//         msError.classList.remove('active');

//         names=formRegistro.names.value.trim();
//         apellidos=formRegistro.apellidos.value.trim();
//         email=formRegistro.email.value.trim();
//         telefono=formRegistro.telefono.value.trim();
//         genero=formRegistro.genero.value.trim();
//         fecha=formRegistro.fecha.value.trim();
//         password=formRegistro.password.value.trim();
//         password_confirmation=formRegistro.password_confirmation.value.trim();

//         cbx_notificaciones=formRegistro.cbx_notificaciones;
//         cbx_terminos=formRegistro.cbx_terminos;

//         //validacion para los campos cuando estan vacios
//         if(names=="" && email=="" && password=="" && apellidos=="" && telefono=="" && genero=="" && fecha=="" && password_confirmation==""){
            
//             //se muestra error en pantalla
//             mostrarError('Todos los campos son obligatorios',msError);
            
//             //se agrega la clase error a los input
//             //se pasa los datos array
//             inputError([formRegistro.names,formRegistro.email,formRegistro.password,formRegistro.confirmation_password, formRegistro.apellidos, formRegistro.genero, formRegistro.telefono, formRegistro.fecha]);
//             return false;

//         }else{
//             //se remueve esa clase con la siguente funcion
//             inputErrorRemove([formRegistro.names,formRegistro.email,formRegistro.password,formRegistro.confirmation_password, formRegistro.apellidos, formRegistro.genero, formRegistro.telefono, formRegistro.fecha]);
//         }


//         //validacion de cada input

//         //Validacion del nombre
//         if(names=="" || names==null){

//             mostrarError('Por favor ingrese su nombre',msError);
//             inputError([formRegistro.names]);
//             formRegistro.names.focus(); // fija el foco del cursor en el elemento indicado,
//             return false;
//         }else{
//             //se valida que ingrese un nombre y no numeros
//             if(!validarSoloLetras(names)){
//                 //si es diferente a true
//                 mostrarError('Ingrese un nombre válido, no se permiten caracteres especiales',msError);
//                 inputError([formRegistro.names]);
//                 formRegistro.names.focus();
//                 return false;
//             }
//         }


//           //Validacion del apellido
//           if(apellidos=="" || apellidos==null){

//             mostrarError('Por favor ingrese su apellido',msError);
//             inputError([formRegistro.apellidos]);
//             formRegistro.apellidos.focus(); // fija el foco del cursor en el elemento indicado,
//             return false;
//         }else{
//             //se valida que ingrese un nombre y no numeros
//             if(!validarSoloLetras(apellidos)){
//                 //si es diferente a true
//                 mostrarError('Ingrese un apellido válido, no se permiten caracteres especiales',msError);
//                 inputError([formRegistro.apellidos]);
//                 formRegistro.apellidos.focus();
//                 return false;
//             }
//         }
//         //validacion de correo
//         if(email==null || email==""){
//             mostrarError('Por favor ingrese su correo',msError);
//             inputError([formRegistro.email]);
//             formRegistro.email.focus();

//             return false;
//         }else{

//             if(!validarCorreo(email)){
//                 mostrarError('Por favor ingrese un correo válido',msError);
//                 inputError([formRegistro.email]);
//                 formRegistro.email.focus();
//                 return false;
//             }
//         }

//         //validacion de password
//         if(password=="" || password==null){
//             mostrarError('Por favor ingrese una contraseña',msError);
//             inputError([formRegistro.password]);
//             formRegistro.password.focus();
//             return false;
//         }else{

//             //validacion para que la contraseña tenga con minimos 5 cacteres
//             if(password.length <=4){
//                 mostrarError('Contraseña débil, min.5 carácteres',msError);
//                 inputError([formRegistro.password]);
//                 formRegistro.password.focus();
//                 return false;
//             }
//         }


//          //validacion de la confirmacion de contraseña
//          if(password_confirmation=="" || password_confirmation==null){
//             mostrarError('Por favor confime su contraseña',msError);
//             inputError([formRegistro.password_confirmation]);
//             formRegistro.password_confirmation.focus();
//             return false;
//         }else{

//             //validacion que la contraseña tenga con minimos 5 cacteres
//             if(password.length <=4){
//                 mostrarError('Confirmación de contraseña es distinta a su contraseña',msError);
//                 inputError([formRegistro.password_confirmation]);
//                 formRegistro.password_confirmation.focus();
//                 return false;
//             }
//         }


//         //validacion del telefono
//         if(telefono=="" || telefono==null){
//             mostrarError('Por favor ingrese un número',msError);
//             inputError([formRegistro.telefono]);
//             formRegistro.telefono.focus();
//             return false;
//         }else{

//             //se valida el número, falta lo de mandar mensaje
//             if(telefono.length <=4){
//                 mostrarError('Por favor ingrese un número válido',msError);
//                 inputError([formRegistro.telefono]);
//                 formRegistro.telefono.focus();
//                 return false;
//             }
//         }

//             ////Validacion del genero
//         if(genero=="" || genero==null){
//             mostrarError('Por favor ingrese un género',msError);
//             inputError([formRegistro.genero]);
//             formRegistro.genero.focus();
//             return false;
//         }else{

//             //validamos que la contraseña tenga con minimos 5 cacteres
//             if(genero.length <=4){
//                 mostrarError('Por favor ingrese un género válido',msError);
//                 inputError([formRegistro.genero]);
//                 formRegistro.genero.focus();
//                 return false;
//             }
//         }

//            ////Validacion de la fecha
//            if(fecha=="" || fecha==null){
//             mostrarError('Por favor ingrese una fecha',msError);
//             inputError([formRegistro.fecha]);
//             formRegistro.fecha.focus();
//             return false;
//         }else{

//             //validacion para que la fecha sea válida
//             if(fecha.length <=4){
//                 mostrarError('Por favor ingrese una fecha válida',msError);
//                 inputError([formRegistro.fecha]);
//                 formRegistro.fecha.focus();
//                 return false;
//             }
//         }


//         //validacion el cbx-terminos

//         if(cbx_terminos.checked==false){
//             mostrarError('Por favor aceptar Términos y condiciones',msError);
            
//             //se agrega un clase error a su elemento padre
//             formRegistro.cbx_terminos.parentNode.classList.add('cbx-error');
//             return false;
//         }else{
//             formRegistro.cbx_terminos.parentNode.classList.remove('cbx-error');
//         }

//         //despues de hacer las validaciones envio el formulario para luego recibirlos con php
//         formRegistro.submit();
//         return true;

//     });

//     formRegistro.cbx_terminos.addEventListener('change',(e)=>{
//         if(e.target.checked){
//             formRegistro.cbx_terminos.parentNode.classList.remove('cbx-error');
//         }
//     })


// }