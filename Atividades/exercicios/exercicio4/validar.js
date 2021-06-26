

function validar(campos) {
    let n = campos.value;

    if (n.length == 0) {
        window.alert(`Preencha os campos vazios!!`);
        campos.focus;
        return false;
    }

    return true;

}

function carregar_dados() {
    let nome = document.dados.nome;
    let sobrenome = document.dados.sobrenome;
    let email = document.dados.email;
    let telefone = document.dados.telefone;
    let nascimento = document.dados.nascimento;
    let cpf = document.dados.cpf;


    if (validar(nome) && validar(sobrenome)
        && validar(email) && validar(telefone)
        && validar(cpf) && validar(nascimento)
    ) {

        window.alert(
            `nome: ${nome.value},
        sobrenome: ${sobrenome.value},
        email: ${email.value},
        telefone: ${telefone.value},
        cpf: ${cpf.value},
        nascimento: ${nascimento.value}`
        );
    }
}