

function validar(campos) {
    let n = campos.value;

    if (n.length == 0) {
        window.alert(`Preencha os campos vazios!!`);
        campos.focus();
        return false;
    }

    return true;

}

function carregar_dados() {
    let nome = document.nome;
    let email = document.email;
    let endereco = document.endereco;
    let nascimento = document.data_nascimento;
    let cep = document.cep;
    let genre = document.select_genre;
 

    if (validar(nome) && validar(sobrenome)
        && validar(email) && validar(endereco)
        && validar(cep) && validar(nascimento)
        && validar(genre)
    ) {

        window.alert(
            `nome: ${nome.value},
        sobrenome: ${sobrenome.value},
        email: ${email.value},
        endereco: ${endereco.value},
        cep: ${cep.value},
        nascimento: ${nascimento.value}`
        );
    }
}