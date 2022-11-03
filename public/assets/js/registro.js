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
