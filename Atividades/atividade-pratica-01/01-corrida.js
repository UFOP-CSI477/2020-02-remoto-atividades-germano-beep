let corredores = [];
let flag = true;
// auxilia para a posicao final dos corredores
let tempos = [];


function Competidor(id, tempo, posicao) {
    this.id = id;
    this.tempo = tempo;
    this.posicao = posicao;
}

function validar_campos(campo) {
    if (isNaN(campo.value) || campo.value.length == 0) {
        window.alert(`Preencha os campos corretamente`);
        campo.focus();
        return false;
    }
    return true;
}

placing = 0;

function posicao_final() {
    document.getElementById("posicao").innerText=`Posições`
    for (index = 6; index > 0; index--) {
        console.log(tempos);
        var maior_tempo = console.log(Math.max.apply(null, tempos));
        console.log(`eu estou aparecendo${maior_tempo}`);
        const index_tempos = tempos.indexOf(maior_tempo);
        if (index_tempos > -1) {
        console.log(`eu estou aparecendo`)

            tempos.splice(index_tempos, 1);
        }

        for (index_aux = 0; index_aux < corredores.length; index_aux++) {
            let corredor = corredores[index_aux];
            if(maior_tempo == corredor.tempo){
                console.log(`posicao${corredor.id}`);
                document.getElementById(`posicao${corredor.id}`).innerText=index_aux;
            }
        }
    }
}

function iniciarCorrida() {

    document.getElementById("posicao").innerText=``;
    document.getElementById("resultado").innerText = ``;
    for (let index = 1; index <= 6; index++) {
        const element = "result" + index;
        document.getElementById(element).innerText = ``;

    }

    if (validar_campos(document.getElementById("tempo1")) &&
        validar_campos(document.getElementById("tempo2")) &&
        validar_campos(document.getElementById("tempo3")) &&
        validar_campos(document.getElementById("tempo4")) &&
        validar_campos(document.getElementById("tempo5")) &&
        validar_campos(document.getElementById("tempo6"))
    ) {
        for (let index = 1; index <= 6; index++) {
            let id = index.toString();
            let tempo = "tempo" + id;
            let posicao = "posicao" + id;
            let competidor = new Competidor(document.getElementById(id).value,
                parseInt(document.getElementById(tempo).value),
                document.getElementById(posicao));

            tempos.push(parseInt(document.getElementById(tempo).value));
            corredores.push(competidor);
        }
        id = setInterval(correr, 1000);

    }

}


function correr() {





    if (document.getElementById("tempo1").value <= 0) {

        document.getElementById("resultado").innerText = `Resultado`;
        document.getElementById("result1").innerText = `Winner!!!`;
        flag = false;

    } else {

        document.getElementById("tempo1").value--;
    }



    if (document.getElementById("tempo2").value <= 0) {

        document.getElementById("resultado").innerText = `Resultado`;
        document.getElementById("result2").innerText = `Winner!!!`;
        flag = false;

    } else {
        document.getElementById("tempo2").value--;

    }



    if (document.getElementById("tempo3").value <= 0) {

        document.getElementById("resultado").innerText = `Resultado`;
        document.getElementById("result3").innerText = `Winner!!!`;
        flag = false;

    } else {

        document.getElementById("tempo3").value--;
    }



    if (document.getElementById("tempo4").value <= 0) {

        document.getElementById("resultado").innerText = `Resultado`;
        document.getElementById("result4").innerText = `Winner!!!`;
        flag = false;

    } else {

        document.getElementById("tempo4").value--;
    }



    if (document.getElementById("tempo5").value <= 0) {

        document.getElementById("resultado").innerText = `Resultado`;
        document.getElementById("result5").innerText = `Winner!!!`;
        flag = false;

    } else {

        document.getElementById("tempo5").value--;
    }



    if (document.getElementById("tempo6").value <= 0) {

        document.getElementById("resultado").innerText = `Resultado`;
        document.getElementById("result6").innerText = `Winner!!!`;
        flag = false;

    } else {

        document.getElementById("tempo6").value--;
    }


    if(!flag){
        clearInterval(id);
        posicao_final();
    }
}
    // let competidor1 = new Competidor(document.getElementById("1").value,
    //     parseInt(document.getElementById("tempo1").value),
    //     document.getElementById("posicao1"));


    // let competidor2 = new Competidor(document.getElementById("2").value,
    //     parseInt(document.getElementById("tempo2").value),
    //     document.getElementById("posicao2"));


    // let competidor3 = new Competidor(document.getElementById("3").value,
    //     parseInt(document.getElementById("tempo3").value),
    //     document.getElementById("posicao3"));


    // let competidor4 = new Competidor(document.getElementById("4").value,
    //     parseInt(document.getElementById("tempo4").value),
    //     document.getElementById("posicao4"));


    // let competidor5 = new Competidor(document.getElementById("5").value,
    //     parseInt(document.getElementById("tempo5").value),
    //     document.getElementById("posicao5"));


    // let competidor6 = new Competidor(document.getElementById("6").value,
    //     parseInt(document.getElementById("tempo6").value),
    //     document.getElementById("posicao6"));