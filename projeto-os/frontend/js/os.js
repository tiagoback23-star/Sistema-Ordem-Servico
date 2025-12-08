async function criarOS() {
    const id_cliente = document.getElementById("id_cliente").value;
    const defeito = document.getElementById("defeito").value;
    const status = document.getElementById("status").value;

    const response = await fetch("../backend/api/criar_os.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ id_cliente, defeito, status })
    });

    const resultado = await response.json();
    alert(resultado.mensagem);
}

async function listarOS() {
    const response = await fetch("../backend/api/listar_os.php");
    const ordens = await response.json();

    const lista = document.getElementById("listaOS");
    lista.innerHTML = "";
    ordens.forEach(os => {
        lista.innerHTML += `<li>ID: ${os.id_os} - Cliente: ${os.id_cliente} - Status: ${os.status}</li>`;
    });
}
