function limparSelect(campo) {
    while(campo.length>1){
        campo.remove(1);
    }
}


function preencherSelectPaises(data) {
    let paises = document.getElementById("paises");
    limparSelect(paises);

    for (let index in data) {

        
        const country = index;

        let option = document.createElement("option");
          
        option.value = country;

        option.innerHTML = country;

        paises.appendChild(option);
    }
}

function carregarPaises() {

    fetch("https://covid-api.mmediagroup.fr/v1/cases")
        .then(response => response.json())
        .then(data => preencherSelectPaises(data))
        .catch(error => console.error(error))

}