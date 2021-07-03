let corredores = [];
let flag = true;
// auxilia para a posicao final dos corredores
let tempos = [];
// auxilia na posicao final
let posicao_aux;


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
    document.getElementById("posicao").innerText = `Posições`;
    let maior_tempo;
    for (index = 0; index < corredores.length; index++) {

        
       
        if(tempos.length!=0){
            
            maior_tempo = tempos.reduce(function (a, b) {
                return Math.max(a, b);
            });
            
            const index_tempos = tempos.indexOf(maior_tempo);
            
            if (index_tempos > -1) {
                
                
                tempos.splice(index_tempos, 1);
            }
        }

        for (index_aux = 0; index_aux < 6; index_aux++) {
             corredor = corredores[index_aux];
             
             
             
            if (maior_tempo == corredor.tempo) {
               console.log(posicao_aux);
                document.getElementById(corredor.posicao).innerText = posicao_aux;
            }
        }
        posicao_aux--;
    }   
    
}

function iniciarCorrida() {

    flag = true;
    posicao_aux = 6;
    document.getElementById("posicao").innerText = ``;
    document.getElementById("resultado").innerText = ``;
    for (let index = 1; index <= 6; index++) {
        const element = `result${index}`;
        const element_position = `posicao${index}`;
        document.getElementById(element).innerText = ``;
        document.getElementById(element_position).innerText=``;

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
            let tempo = "tempo" + index;
            let posicao = "posicao" + index;
            let competidor = new Competidor(document.getElementById(id).id,
                parseInt(document.getElementById(tempo).value),
                document.getElementById(posicao).id);

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


    if (!flag) {
        clearInterval(id);
        posicao_final();
    }
}
