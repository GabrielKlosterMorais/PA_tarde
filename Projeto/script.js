function cadrastrar(){
    const usuario = document.getElementById('nome_completo').value
    const senha = document.getElementById('senha').value
    const confirmar_senha = document.getElementById('confirmar_senha').value

    if(usuario && senha === confirmar_senha){
        localStorage.setItem(usuario, senha)
        return alert(`Usuario ${usuario} cadrastrado com sucesso`)
    }
    else{
        return alert("Usuario e/ou senha incorretos")
    }
}

function login(){
    const usuario = document.getElementById('usuario').value
    const senha  = document.getElementById('senha').value

    let usuarioExistente = localStorage.getItem(usuario)

    if(!usuarioExistente){
        return alert("usuario não existene! ! !")
    }

    if(usuario && senha === usuarioExistente){
        localStorage.setItem(usuario,senha)
        alert(`Usuario ${usuario} logado com sucesso!`)
        window.location.href = "./home.html"

    }
    else{
        return alert("Usuario e/ou senha incorretos")
    }

}