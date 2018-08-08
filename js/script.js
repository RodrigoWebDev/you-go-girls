(function(){
    //Adiciona animação ao passar o mouse nas imagens dos posts da pagina Home
    var img = document.querySelectorAll(".post img");
    for(let i = 0; i < img.length; i++){
        img[i].classList.add("hvr-bounce-to-top");
    }
    
    //Adiciona animação ao passar o mouse nos itens do menu de navegação
    var pageItens = document.querySelectorAll(".navbar-nav > li > a");
    for(let i = 0; i < pageItens.length; i++){
        pageItens[i].classList.add("hvr-bounce-to-top");
        pageItens[i].classList.add("hvr-bounce-to-top--pink");
    }
    
})()

jQuery(function(){
    jQuery("#menu-item-149").hover(function(){
       jQuery(this).find(".sub-menu").toggle(); 
    });
});