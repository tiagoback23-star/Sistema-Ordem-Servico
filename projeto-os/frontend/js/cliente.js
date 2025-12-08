async function cadastrarCliente() {
    const nome = document.getElementById("nome").value;
    const telefone = document.getElementById("telefone").value;

    const response = await fetch("../backend/api/cadastrar_cliente.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ nome, telefone })
    });

    const resultado = await response.json();
    alert(resultado.mensagem);
}

async function cadastrarUsuario() {
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;

    const response = await fetch("../backend/api/cadastrar_usuario.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ nome, email, senha })
    });

    const resultado = await response.json();
    alert(resultado.mensagem);
}
