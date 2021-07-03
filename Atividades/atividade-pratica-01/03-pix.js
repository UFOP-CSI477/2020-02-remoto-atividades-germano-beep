function validar_campos(campo) {
    if (campo.value.length == 0) {
        window.alert(`Preencha os campos corretamente`);
        campo.focus();
        return false;
    }
    return true;
}

// object transacao
function Transacao(tipo, valor) {
    this.tipo = tipo;
    this.valor = valor;
}

// armazena todas as transacoes
let lista_transacoes = [];
// confirmar cria um object tipo transacao

function confirmar() {

    if (validar_campos(document.getElementById("tipo_chave")) &&
        validar_campos(document.getElementById("valor_chave")) &&
        validar_campos(document.getElementById("tipo_operacao")) &&
        validar_campos(document.getElementById("valor"))&&
        validar_campos(document.getElementById("data")) &&
        validar_campos(document.getElementById("bancos1"))&&
        validar_campos(document.getElementById("bancos2"))
    ) {
        
        let transacao;
        let tipo = document.getElementById("tipo_operacao").value;
        let valor = document.getElementById("valor").value;
        if (tipo == "envio") {
            transacao = new Transacao(tipo, -valor);
        } else {
            transacao = new Transacao(tipo, +valor);
        }
        
        lista_transacoes.push(transacao);
        window.alert(`Transação concluída com sucesso`)
    }
}
    
    function relatorio_transacoes() {
        console.log(lista_transacoes);
        
    let envio = 0;
    let recebimento = 0;
    let saldo;

    for (let index = 0; index < lista_transacoes.length; index++) {
        const element = lista_transacoes[index];

        if (element.tipo == "envio") {
            envio += element.valor;
        } else {
            recebimento += element.valor;
        }
    }


    saldo = recebimento + envio;
    window.alert(`Envios: ${-envio}
        Recebimentos: ${recebimento}
        Saldo: ${saldo}`)
}

function limpar_select(campo) {
    while (campo.length > 1) {
        campo.remove(1);
    }
}

function preencherSelectBancos1(data) {
    let bancos = document.getElementById("bancos1");
    limpar_select(bancos);

    for (let index in data) {
        const { isbp, code, fullName } = data[index];
        let option = document.createElement("option");

        option.value = isbp;

        option.innerHTML = `${code}-${fullName}`;

        bancos.appendChild(option);
    }
}

function preencherSelectBancos2(data) {
    let bancos = document.getElementById("bancos2");
    limpar_select(bancos);

    for (let index in data) {
        const { isbp, code, fullName } = data[index];
        let option = document.createElement("option");

        option.value = isbp;

        option.innerHTML = `${code}-${fullName}`;

        bancos.appendChild(option);
    }
}

function carregar_bancos1() {
    fetch("https://brasilapi.com.br/api/banks/v1")
        .then(response => response.json())
        .then(data => preencherSelectBancos1(data))


        .catch(error => console.error(error))
}

function carregar_bancos2() {
    fetch("https://brasilapi.com.br/api/banks/v1")
        .then(response => response.json())
        .then(data => preencherSelectBancos2(data))


        .catch(error => console.error(error))
}