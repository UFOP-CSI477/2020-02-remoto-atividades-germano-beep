let list_carros = [];
let desempenho_total = 0;
let total_combustivel = 0;
let total_quilometros = 0;

function Carro(combustivel, quilometros) {
    this.combustivel = combustivel;
    this.quilometros = quilometros;
}

function validar_campos(campo) {
    if (isNaN(campo.value) || campo.value.length == 0) {
        window.alert(`Preencha os campos corretamente`);
        campo.focus();
        return false;
    }
    return true;
}

function cadastrar() {
    combustivel = document.getElementById("combustivel");
    quilometros = document.getElementById("quilometros");
    if (validar_campos(combustivel) && validar_campos(quilometros)) {

        let carro = new Carro(combustivel, quilometros);
        list_carros.push(carro);
        window.alert(`veículo registrado`);
      
        document.getElementById("mediah5").innerText = `Desempenho: ${parseFloat(quilometros.value / combustivel.value)}km/l`;

        total_combustivel += parseFloat(combustivel.value);
        total_quilometros += parseFloat(quilometros.value);
        desempenho_total += parseFloat(quilometros.value / combustivel.value);

    }
}

function finalizar_processo() {

    document.getElementById("mediah5").innerText = `Quantidade total de combustível utilizada: ${total_combustivel}L
    Quantidade total de quilometros rodados: ${total_quilometros}km
    Média de consumo de combustível: ${total_combustivel / list_carros.length}L
    Média de quilometros rodados: ${total_quilometros / list_carros.length}km
    Média desempenho: ${desempenho_total / list_carros.length} km/L`

}

function limpar() {
    document.getElementById("mediah5").innerText = ``;  
    
}