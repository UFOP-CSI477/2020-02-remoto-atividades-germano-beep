

function seleciona(input) {
    document.getElementById("tela").value += input.value;
}

function calcular() {
    let operecao = document.getElementById("tela").value;
    let auxiliarNum = "";
    let resultado = 0;
    let listOp = [];
    let listNum = [];
    let op;

    for (let index = 0; index < operecao.length; index++) {

        const element = operecao[index];
        // n tá adicionando o último número

        if (!isNaN(element)) {
            auxiliarNum += element;

        } else {

            listNum.push((parseFloat(auxiliarNum)));
            auxiliarNum = "";
            op = element;
            listOp.push(op);
        }
    }

    listNum.push(parseFloat(auxiliarNum));

    console.log(listNum);
    console.log(listOp);

    // tem que haver no mínimo dois num para uma operação
    num1 = listNum.shift();
    num2 = listNum.shift();
    op = listOp.shift();

    if (op == "+") {
        resultado = num1+num2;
    }
    if (op == "-") {
        resultado = num1-num2;
    }
    if (op == "*") {
        resultado = num1*num2;
    }
    if (op == "/") {
        resultado = num1/num2;
    }

    for (let index = 0; index < listNum.length;index++) {
        num = listNum[index];
        op = listOp[index]

        if (op == "+") {
            resultado +=num;
        }
        if (op == "-") {
            resultado -=num;
        }
        if (op == "*") {
            resultado *=num;
        }
        if (op == "/") {
            resultado /=num;
        }
    
    }

    document.getElementById("tela").value = `${resultado}`;
}