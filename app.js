const inserir = document.getElementById('#inserir')
const enviar = document.getElementById("#enviar")

enviar.addEventListener('click', notaAluno())

function notaAluno() {
    const buttonEnviar = document.getElementById("#enviar")
    buttonEnviar.document.style.display = "none"
}

function newAluno() {
    inserir.addEventListener('click', inserirAluno())
}

function inserirAluno() {

    const container = document.getElementsByClassName('.container')
    const newAluno = document.createElement('newAluno')
}

