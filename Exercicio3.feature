Exercício 3:


Funcionalidade: Testar se a classe StringManipulator lida corretamente com strings

Cenário: Capitalizar uma string vazia
Dado Que tenho uma string vazia
Quando Tentar utilizar o metodo para capitalizar
Então Deve ser retornado a própria string vazia

Cenário: Concatenar duas strings
Dado que tenho duas strings com um espaço em branco entre elas
Quando Utilizar o método concatenateStrings()
Então Ele deve Concatenar sem alterar ou remover os espaços entre as strings

Cenário: Fazer a contagem de vogais para diferentes entradas
Dado que fornecido uma string com vogais maiusculas e maiusculas
Quando o metodo countVowels() for utilizando
Então Deve ser retornado o número correto de vogais

#Cenário: Fazer a contagem de vogais com uma string sem vogais

Dado que fornecido uma string sem vogais
Quando chamar o metodo countVowels()
Então Irá ser retornado (0)

#Cenário: Fazer a contagem de vogais com uma string vazia

Dado que é fornecido uma string vazia
Quando chamar o metodo countVowels()
Então Irá ser retornado (0)