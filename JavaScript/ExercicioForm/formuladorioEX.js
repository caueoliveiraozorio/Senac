const form = document.getElementById("form")
const senha = document.getElementById("senha")



function ShowError(input, mensagem) {
    const formControl = input.parentElement
    formControl.className = "form-control error"
    // formControl.classList.add("form-control error")
    const small = formControl.querySelector("small")
    small.innerHTML = mensagem
}
function ShowSucesso(input,) {
    const formControl = input.parentElement
    formControl.className = "form-control sucesso"
    // formControl.classList.add("form-control sucesso")

}


function checkRequired(listaInput) {
    let valido = true
    listaInput.forEach(function (input) {
        if (input.value == "") {
            ShowError(input,"Capom Obrigatorio")
            valido = false
            // ShowError(input,`Erro no seu ${input.id}`)
        }else {
            ShowSucesso(input)
        }
    })
    return valido
}

function checksize(input,max,min) {
    let valido = true
    if(input.value.length < min) {
        ShowError(input,`Tem que ter no minimo${min}`)
        valido = false
    }else if (input.value.length > max ) {
        ShowError(input, `Maior que ${max}`)
        valido = false
    }
    return valido
}


form.addEventListener("submit", function (event) {
    event.preventDefault()
    // nao atualizar a pagina preventDefaul

    let valido = checkRequired([senha])
    valido = checksize(senha,15,3)&& valido



    if(valido){
        const dados ={
            usuarioEmail: email.value,
            usuarioSenha: senha.value,
        }
        let x =(JSON.stringify(dados))
        console.log(x)
        console.log(JSON.parse(x))

        window.location.href ="formuladorioHOME.html"
    }
})
