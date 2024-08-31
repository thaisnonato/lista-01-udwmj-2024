function calcular(operacao) {
    const valor1 = parseFloat(document.getElementById('valor1').value);
    const valor2 = parseFloat(document.getElementById('valor2').value);
    let resultado;

    if (isNaN(valor1) || isNaN(valor2)) {
        resultado = 'Digite um número válido.';
    } else {
        switch (operacao) {
            case '+':
                resultado = valor1 + valor2;
                break;
            case '-':
                resultado = valor1 - valor2;
                break;
            case '*':
                resultado = valor1 * valor2;
                break;
            case '/':
                if (valor2 !== 0) {
                    resultado = valor1 / valor2;
                } else {
                    resultado = 'Erro: Divisão por zero!';
                }
                break;
            default:
                resultado = 'Operação inválida!';
        }
    }
    document.getElementById('resultado').innerText = `Resultado: ${resultado}`;
}