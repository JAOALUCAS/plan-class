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

    const imgConf =  document.getElementById("conf");
    const imgSair = document.getElementById("sair");

    imgConf.addEventListener("mouseover", ()=>{

        imgConf.src = "assets/icons/engrenagem.jpg";

    });

    imgConf.addEventListener("mouseout",()=>{

        
        imgConf.src = "assets/icons/engrenagem-laranja.jpg";

    });

    imgSair.addEventListener("mouseover", ()=>{

        imgSair.src = "assets/icons/perfil.jpg";

    });

    imgSair.addEventListener("mouseout",()=>{

        
        imgSair.src = "assets/icons/perfil-laranja.jpg";

    });

});