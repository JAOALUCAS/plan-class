document.addEventListener("DOMContentLoaded", () => {
    const overlay = document.getElementById("overlay");
    const divForm = document.getElementById("div-form");
    const adicionar = document.getElementById("adicionar");
    const fecharOverlay = document.getElementById("fechar-overlay");
    const editar = document.getElementById("div-form-editar");

    adicionar.addEventListener("click", () => {
        overlay.style.display = "block";
        divForm.style.display = "block";
        fecharOverlay.style.display = "block";
    });

    fecharOverlay.addEventListener("click", () => {
        overlay.style.display = "none";
        divForm.style.display = "none";
        editar.style.display = "none";
        fecharOverlay.style.display = "none";
    });

    const conf = document.getElementById("conf");
    const sair = document.getElementById("sair");
    const imgConf = document.getElementById("img-conf");
    const imgSair = document.getElementById("img-sair");

    conf.addEventListener("mouseover", () => {
        imgConf.src = "assets/icons/engrenagem.png";
    });

    conf.addEventListener("mouseout", () => {
        imgConf.src = "assets/icons/engrenagem-laranja.png";
    });

    sair.addEventListener("mouseover", () => {
        imgSair.src = "assets/icons/perfil.png";
    });

    sair.addEventListener("mouseout", () => {
        imgSair.src = "assets/icons/perfil-laranja.png";
    });

    const lapis = document.getElementsByClassName("lapis");
    const imgLapis = document.getElementsByClassName("img-lapis");

    Array.from(lapis).forEach((item, index) => {
        item.addEventListener("mouseover", () => {
            imgLapis[index].src = "assets/icons/lapis-laranja.png";
        });

        item.addEventListener("mouseout", () => {
            imgLapis[index].src = "assets/icons/lapis.png";
        });

        item.addEventListener("click", (event) => {
            overlay.style.display = "block";
            editar.style.display = "block";
            fecharOverlay.style.display = "block";

            const inputHidden = event.target.closest('tr').querySelector('.valor-php');
            const valorPHP = inputHidden.value;

            document.getElementById("input-editar-id").value = valorPHP;
        });

    });

    const lixo = document.getElementsByClassName("lixo");
    const imgLixo = document.getElementsByClassName("img-lixo");

    Array.from(lixo).forEach((item, index) => {
        item.addEventListener("mouseover", () => {
            imgLixo[index].src = "assets/icons/lixo-laranja.png";
        });

        item.addEventListener("mouseout", () => {
            imgLixo[index].src = "assets/icons/lixo.png";
        });
    });
});

