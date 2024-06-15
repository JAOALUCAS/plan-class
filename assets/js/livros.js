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

});