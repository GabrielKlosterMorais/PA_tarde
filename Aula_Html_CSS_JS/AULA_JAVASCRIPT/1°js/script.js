
function somar(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

   let soma = valor_1 + valor_2

   alert(soma)
}

function subtrair(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let subtracao = valor_1 - valor_2

    alert(subtracao)
}

function multiplicacao(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let multiplicar = valor_1 * valor_2

    alert(multiplicar)
}

function divisao(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    if(valor_1 == 0 || valor_2 == 0 ){
        alert("Operacao invalida")
    } else {
        let dividir = valor_1 / valor_2
        alert(dividir)
    }
    
}

