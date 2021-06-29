function Competidor(largada, nome, tempo) {
    this.largada = largada;
    this.nome = nome;
    this.tempo = tempo;
}

let competidor1 = new Competidor(document.getElementById("larg1").value,
    document.getElementById("compet1").value,
    parseInt(document.getElementById("tempo1").value));


let competidor2 = new Competidor(document.getElementById("larg2").value,
    document.getElementById("compet2").value,
    parseInt(document.getElementById("tempo2").value));


let competidor3 = new Competidor(document.getElementById("larg3").value,
    document.getElementById("compet3").value,
    parseInt(document.getElementById("tempo3").value));


let competidor4 = new Competidor(document.getElementById("larg4").value,
    document.getElementById("compet4").value,
    parseInt(document.getElementById("tempo4").value));


let competidor5 = new Competidor(document.getElementById("larg5").value,
    document.getElementById("compet5").value,
    parseInt(document.getElementById("tempo5").value));


let competidor6 = new Competidor(document.getElementById("larg6").value,
    document.getElementById("compet6").value,
    parseInt(document.getElementById("tempo6").value));

placing = 0;

function addResult() {
    let resultado = document.getElementById("rowHead");

    let th = document.createElement(`th`);

    th.innerHTML=`Resultado`;

    resultado.appendChild(th);
}



function iniciarCorrida() {


    id = setInterval(correr, 1000);
    console.log(competidor1)
}

function correr() {



    document.getElementById("tempo1").value--;


    if (document.getElementById("tempo1").value <= 0) {
        clearInterval(id);

        let row1 = document.getElementById("row1");

        let th = document.createElement(`th`);
        let th1 = document.createElement(`th`);

        addResult();
        th.innerHTML=`Winner!`;
        row1.appendChild(th);
      
    }

    document.getElementById("tempo2").value--;


    if (document.getElementById("tempo2").value <= 0) {
        clearInterval(id);
         clearInterval(id);

        let row1 = document.getElementById("row2");

        let th = document.createElement(`th`);

        addResult();
        th.innerHTML=`Winner!`;
        row1.appendChild(th);


    }

    document.getElementById("tempo3").value--;


    if (document.getElementById("tempo3").value <= 0) {
        clearInterval(id);
         clearInterval(id);

        let row1 = document.getElementById("row3");

        let th = document.createElement(`th`);

        addResult();
        th.innerHTML=`Winner!`;
        row1.appendChild(th);


    }

    document.getElementById("tempo4").value--;


    if (document.getElementById("tempo4").value <= 0) {
        clearInterval(id);
         clearInterval(id);

        let row1 = document.getElementById("row4");

        let th = document.createElement(`th`);

        addResult();
        th.innerHTML=`Winner!`;
        row1.appendChild(th);


    }

    document.getElementById("tempo5").value--;


    if (document.getElementById("tempo5").value <= 0) {
        clearInterval(id);
         clearInterval(id);

        let row1 = document.getElementById("row5");

        let th = document.createElement(`th`);

        addResult();
        th.innerHTML=`Winner!`;
        row1.appendChild(th);


    }

    document.getElementById("tempo6").value--;


    if (document.getElementById("tempo6").value <= 0) {
        clearInterval(id);
         clearInterval(id);

        let row1 = document.getElementById("row6");

        let th = document.createElement(`th`);

        addResult();
        th.innerHTML=`Winner!`;
        row1.appendChild(th);


    }
}