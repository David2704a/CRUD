let listaElements = document.querySelectorAll('.lista__button--click');

listaElements.forEach(listaElements => {
	listaElements.addEventListener('click', ()=>{
		
		listaElements.classList.toggle('arrow');

		let height =0;
		let menu = listaElements.nextElementSibling;
		console.log()
		if(menu.clientHeight == 0){
			height=menu.scrollHeight;
		}
		menu.style.height = `${height}px`;
	})
});