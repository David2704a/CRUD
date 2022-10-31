/*========================================
Slider
==========================================*/
if(document.querySelector('.contenedor-slider')){

    let index=1;
    let selectedIndex=1;

    const slides=document.querySelector('.slider');
    const slide=slides.children;
    const slidesTotal=slides.childElementCount;

    const dots=document.querySelector('.dots');
    const ante=document.querySelector('.ante');
    const siguiente=document.querySelector('.siguiente');


    //se agrega los punto de acuerdo a la cantidad de slides
    for (let i = 0; i < slidesTotal; i++) {
        dots.innerHTML +='<span class="dot"></span>';
    }
    
    // aqui se ejecuta la funcion
    mostrarSlider(index);

    //hago que el slide sea automatico
    setInterval(()=>{
        mostrarSlider(index=selectedIndex);
    },5000); //están representados en milisegundos

    //funcion para mostrar el slider
    function mostrarSlider(num){
        if(selectedIndex > slidesTotal){
            selectedIndex=1;
        }else{
            selectedIndex++;
        }

        if(num > slidesTotal){
            index=1;
        }

        if(num<1){
            index=slidesTotal;
        }

        //se remueve la clase active de todos los slide
        for(let i=0; i<slidesTotal;i++){
            slide[i].classList.remove('active');
        }

        //aqui remuevo la clase active de los puntos

        for (let x = 0; x < dots.children.length; x++) {
            dots.children[x].classList.remove('active');
        }

        //muestro el slide
        slide[index-1].classList.add('active');

        //agrego la clase active al punto donde se encuntra el slide
        dots.children[index-1].classList.add('active');

        
    }

    //evento para los botones ante y siguiente
    siguiente.addEventListener('click',(e)=>{
        mostrarSlider(index +=1);
        selectedIndex=index;
    });

    ante.addEventListener('click',(e)=>{
        mostrarSlider(index +=-1);
        selectedIndex=index;
    });

    //puntos
    for (let y = 0; y < dots.children.length; y++) {
        
        //por cada dot que ecuentre le agregamos el evento click y ejecutamo la funcion de slide
        dots.children[y].addEventListener('click',()=>{
            mostrarSlider(index=y+1);
            selectedIndex=y+1;
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
