function limparSelect(campo) {
    while (campo.length > 1) {
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

function preencherSelectDados(data) {
    let dados = document.getElementById("dados");
    limparSelect(dados);

    for (let index in data) {


        const  {confirmed, recovered, deaths} = data[index];

        
       

        let div = document.createElement(`div`);

       

        div.innerHTML = `<h3 class = "text-primary fw-bold">DADOS DO PAÍS</h3>
        <label for="div1" class="text-warning fw-bold">CASOS CONFIRMADOS:</label>
        <div name = "div1">${confirmed}</div> 
        <label for="div1" class="text-success fw-bold">RECUPERADOS:</label>
        <div name = "div1">${recovered}</div> 
        <label for="div1" class="text-danger fw-bold"> MORTES:</label>
        <div name = "div1">${deaths}</div>  
       `;

        

        dados.appendChild(div);

        // dados.appendChild(option);
    }
}

function carregarPaises() {

    fetch("https://covid-api.mmediagroup.fr/v1/cases")
        .then(response => response.json())
        .then(data => preencherSelectPaises(data))
        .catch(error => console.error(error))

}

function carregarDados() {

    const paises = document.getElementById("paises");
    const paises_index = paises.selectedIndex;
    const paises_id = paises.options[paises_index].value;

    const dados = document.getElementById("dados");
    
    limparSelect(dados);

    if (paises_id == "") {
        return;
    }

    const url_dados = `https://covid-api.mmediagroup.fr/v1/cases?country=${paises_id}`;

    fetch(url_dados)
        .then(response => response.json())
        .then(data => preencherSelectDados(data))
        .catch(error => console.error(error))

}
