window.alert("Esta página está em desenvolvimento!")
 var nome= window.prompt("Digite o seu nome: ")
 document.write(`Olá, ${nome}! Seu nome possui ${nome.length} letras.`)
var idade= Number.parseInt(window.prompt("Digite sua idade: "))
if (idade >= 18) {
    document.write("Você corresponde à maioridade")
} else {
    document.write("Você corresponde à menoridade")
}