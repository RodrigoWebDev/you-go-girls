(function(){
    //Adiciona animação ao passar o mouse nas imagens dos posts da pagina Home
    var img = document.querySelectorAll(".post img");
    for(let i = 0; i < img.length; i++){
        img[i].classList.add("hvr-bounce-to-top");
    }
    
    //Adiciona animação ao passar o mouse nos itens do menu de navegação
    var pageItens = document.querySelectorAll(".menu-item");
    for(let i = 0; i < pageItens.length; i++){
        pageItens[i].classList.add("hvr-bounce-to-top");
        pageItens[i].classList.add("hvr-bounce-to-top--pink");
    }
})()