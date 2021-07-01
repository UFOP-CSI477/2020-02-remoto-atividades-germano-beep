function limpar_select(campo) {
    while(campo.length>1){
        campo.remove(1);
    }
}

function preencherSelectBancos1(data) {
    let bancos = document.getElementById("bancos1");
    limpar_select(bancos);

    for(let index in data){
        const {isbp, code, fullName} = data[index];
        let option = document.createElement("option");

        option.value = isbp;

        option.innerHTML = `${code}-${fullName}`;

        bancos.appendChild(option);
    }
}

function preencherSelectBancos2(data) {
    let bancos = document.getElementById("bancos2");
    limpar_select(bancos);

    for(let index in data){
        const {isbp, code, fullName} = data[index];
        let option = document.createElement("option");

        option.value = isbp;

        option.innerHTML = `${code}-${fullName}`;

        bancos.appendChild(option);
    }
}

function carregar_bancos1(){
    fetch("https://brasilapi.com.br/api/banks/v1")
    .then(response=>response.json())
    .then(data=> preencherSelectBancos1(data))
   

    .catch(error => console.error(error))
}

function carregar_bancos2(){
    fetch("https://brasilapi.com.br/api/banks/v1")
    .then(response=>response.json())
    .then(data=> preencherSelectBancos2(data))
   

    .catch(error => console.error(error))
}