function show(page) {
    document.querySelectorAll('.page').forEach(p => p.classList.add('hidden'));
    document.getElementById(page).classList.remove('hidden');
}

/* Navegação */
document.getElementById("go-create").onclick = () => show("create-page");
document.getElementById("go-login").onclick = () => show("login-page");

/* Criar conta */
document.getElementById("btn-create").onclick = function () {
    let email = document.getElementById("create-email").value;
    let senha = document.getElementById("create-password").value;
    let confirmar = document.getElementById("confirm-password").value;

    if (email === "" || senha === "" || confirmar === "") {
        alert("Preencha todos os campos!");
        return;
    }

    if (senha !== confirmar) {
        alert("As senhas não coincidem!");
        return;
    }

    localStorage.setItem("email", email);
    localStorage.setItem("senha", senha);

    alert("Conta criada com sucesso!");
    show("login-page");
};

/* Login */
document.getElementById("btn-login").onclick = function () {
    let email = document.getElementById("login-email").value;
    let senha = document.getElementById("login-password").value;

    let savedEmail = localStorage.getItem("email");
    let savedSenha = localStorage.getItem("senha");

    if (email === savedEmail && senha === savedSenha) {
        show("menu-page");
    } else {
        alert("Email ou senha incorretos!");
    }
};

/* Logout */
document.getElementById("logout").onclick = () => show("login-page");
