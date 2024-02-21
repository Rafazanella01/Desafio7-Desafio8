Exercício 4:

Funcionalidade: Testar a classe usando manipulação de listas

Cenário: Testar o metodo somarElementos(), verificando as diferentes possibilidades 

Dado que seja inserido uma lista vazia
Quando o metodo for chamado
Então deve ser retornado (0)

Dado que seja inserido na lista os números positivos [1,2,3]
Quando for chamado o metodo e passado os números
Então a soma deve retornar o valor (6)

Dado que seja inserido na lista os números negativos [-1,-2,-3]
Quando for chamado o metodo e passado os números
Então a soma deve retornar o valor (-6)

Dado que seja inserido na lista os números mistos [0,1,2,3,-4]
Quando for chamado o metodo e passado os números
Então a soma deve retornar o valor (2)

Cenário: Testar o metodo encontrarMaiorElemento(), verificando as diferentes possibilidades 

Dado que seja inserido uma lista vazia
Quando o metodo for chamado
Então deve ser retornado uma lista vazia

Dado que seja inserido apenas um unico elemento => [9]
Quando o metodo encontrarMaiorElemento() for chamado    
Então Irá retornar o único elemento que foi inserido na lista = (9)

Dado que seja inserido apenas elementos negativos [-8,-9,-10]
Quando o metodo encontrarMaiorElemento() for chamado
Então Irá retornar o o maior elemento que foi inserido na lista dos negativos = (-8)

Dado que seja inserido apenas elementos positivos [8,9,10]
Quando o metodo encontrarMaiorElemento() for chamado
Então Irá retornar o o maior elemento que foi inserido na lista dos positivos = (10)

Dado que seja inserido apenas elementos mistos(positivos, negativos e zero) [0,8,9,10,-9]
Quando o metodo encontrarMaiorElemento() for chamado
Então Irá retornar o o maior elemento que foi inserido na lista dos elementos mistos = (10)

Cenário: Testar o metodo encontrarMenorElemento(), verificando as diferentes possibilidades 

Dado que seja inserido uma lista vazia
Quando o metodo for chamado
Então deve ser retornado uma lista vazia

Dado que seja inserido apenas um unico elemento => [9]
Quando o metodo encontrarMenorElemento() for chamado    
Então Irá retornar o único elemento que foi inserido na lista = (9)

Dado que seja inserido apenas elementos negativos [-8,-9,-10]
Quando o metodo encontrarMenorElemento() for chamado
Então Irá retornar o o maior elemento que foi inserido na lista dos negativos = (-10)

Dado que seja inserido apenas elementos positivos [8,9,10]
Quando o metodo encontrarMenorElemento() for chamado
Então Irá retornar o o maior elemento que foi inserido na lista dos positivos = (8)

Dado que seja inserido apenas elementos mistos(positivos, negativos e zero) [0,8,9,10,-9]
Quando o metodo encontrarMenorElemento() for chamado
Então Irá retornar o o maior elemento que foi inserido na lista dos elementos mistos = (-9)

Cenário: Testar o metodo ordenarLista(), verificando as diferentes possibilidades 

Dado que seja inserido uma lista vazia
Quando o metodo for chamado e irá ordenar ela vazia
Então será verificado se o resultado ordenado é o mesmo que uma lista vazia

Dado que seja inserido apenas um unico elemento => [9]
Quando o metodo ordenarLista() for chamado    
Então Irá retornar a lista ordenada apenas com o valor esperado = [9]

Dado que seja inserido apenas elementos negativos em uma ordem que não seja crescente => [-9,-10,-8]
Quando o metodo ordenarLista() for chamado
Então Irá retornar a lista em ordem crescente = [-8,-9,-10]

Dado que seja inserido apenas elementos positivos em uma ordem que não seja crescente => [9,10,8]
Quando o metodo ordenarLista() for chamado
Então Irá retornar a lista em ordem crescente = [8,9,10]


Dado que seja inserido apenas elementos mistos(positivos, negativos e zero) em uma ordem aleatoria  [0,8,9,1,10,-9]
Quando o metodo ordenarLista() for chamado
Então Irá retornar a lista em ordem crescente = [-9,0,1,8,9,10]

Cenário: Testar o metodo filtrarNumerosPares(), verificando as diferentes possibilidades 

Dado que seja inserido uma lista vazia
Quando o metodo for chamado e irá filtrar com ela vazia
Então será verificado se o resultado ordenado é o mesmo que uma lista vazia

Dado que seja inserido apenas elementos pares => [2,4,8,16]
Quando o metodo filtrarNumerosPares() for chamado    
Então Irá retornar a lista filtrada somente com os numeros pares = [2,4,8,16]

Dado que seja inserido apenas elementos impares => [3,5,9,17]
Quando o metodo filtrarNumerosPares() for chamado    
Então A lista vai estar vazia, pois o fitro não adiciona numeros impares

Dado que seja inserido apenas elementos mistos => [0,2,-4,8,9,11,13,16]
Quando o metodo filtrarNumerosPares() for chamado
Então Irá retornar a lista filtrada = [0,2,-4,8,16]