document.addEventListener("DOMContentLoaded", () => {

    const mudarButton = document.getElementById("mudar");
    const formLogin = document.getElementById("form-login");
    const formCadastro = document.getElementById("form-cadastro");
    const mudarH1 = document.getElementById("mudar-h1");
    const mudarP = document.getElementById("mudar-p");
    
    let estado = 1;
    mudarButton.addEventListener("click", () => {
        if (estado) {

            estado = 0;
            formLogin.style.display = "none";
            formCadastro.style.display = "flex";

            mudarH1.textContent = "Já possui uma conta?";
            mudarP.textContent = "Logue agora em nossa plataforma";
            mudarButton.textContent = "Logue Agora";

        } else {

            estado = 1;
            formCadastro.style.display = "none";
            formLogin.style.display = "flex";

            mudarH1.textContent = "Novo por Aqui?";
            mudarP.textContent = "Crie já sua conta em nossa plataforma!";
            mudarButton.textContent = "Cadastre-se";

        }
        
    });

});
