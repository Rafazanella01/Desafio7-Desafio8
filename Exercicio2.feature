Exercício 2:

Funcionalidade: Testar a Classe ShoppingList

Cenário: Adicionar Item Duplicado
Dado que tenho uma lista de compras vazia
Quando eu adicionar um item "Maçã" à lista de compras
E eu adicionar o mesmo item "Maçã" novamente à lista de compras
Então a lista de compras deve conter dois itens "Maçã"

Cenário: Tentativa de Remover Item Inexistente
Dado que tenho uma lista de compras com um item "Maçã"
Quando eu tentar remover um item que não existe da lista de compras
Então a lista de compras deve permanecer inalterada com o item "Maçã"

Cenário: Limpar Todos os Itens da Lista
Dado que tenho uma lista de compras com itens "Maçã" e "Banana"
Quando eu limpar todos os itens da lista de compras
Então a lista de compras deve estar vazia