document.addEventListener("DOMContentLoaded",()=>{

    const overlay = document.getElementById("overlay");
    const divForm = document.getElementById("div-form");
    const adicionar = document.getElementById("adicionar");
    const fecharOverlay = document.getElementById("fechar-overlay");

    let estado = 1;
    adicionar.addEventListener("click",()=>{

        overlay.style.display = "block";
        divForm.style.display = "block";
        fecharOverlay.style.display = "block";

    });

    fecharOverlay.addEventListener("click",()=>{

        overlay.style.display = "none";
        divForm.style.display = "none";
        fecharOverlay.style.display = "none";

    });

    const conf = document.getElementById("conf");
    const sair = document.getElementById("sair");
    const imgConf =  document.getElementById("img-conf");
    const imgSair = document.getElementById("img-sair");

    conf.addEventListener("mouseover", ()=>{

        imgConf.src = "assets/icons/engrenagem.png";

    });

    conf.addEventListener("mouseout",()=>{

        
        imgConf.src = "assets/icons/engrenagem-laranja.png";

    });

    sair.addEventListener("mouseover", ()=>{

        imgSair.src = "assets/icons/perfil.png";

    });

    sair.addEventListener("mouseout",()=>{

        
        imgSair.src = "assets/icons/perfil-laranja.png";

    });

});