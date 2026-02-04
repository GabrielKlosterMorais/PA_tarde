const x = 10

const alunos = ["amigo1", "amigo2"]

console.log(alunos)

function somar(n1, n2){
    return n1 + n2
}

function bomDia(nome){
    return "Bom dia querido(a) amigo(a) " + nome

}

console.log(somar(2, 3))
console.log(bomDia("Atio"))



function somar(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1+n2)
}

function subtrair(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1-n2)
}

function multiplicar(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1*n2)
}

function dividir(){
    let n1 = Number(document.getElementById('n1').value)
    let n2 = Number(document.getElementById('n2').value)

    if(n1 == 0 || n2 == 0 ){
        alert("Operacao invalida")
    } else {
        let dividir = n1 / n1
        alert(dividir)
    }
}