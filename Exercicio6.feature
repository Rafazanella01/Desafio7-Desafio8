Funcionalidade: Testes da classe MyClass

  Cenário: Verificar se os métodos Imply e Rafael existem
    Dado que uma instância da classe MyClass é criada
    Quando os métodos Imply e Rafael são adicionados
    Então os métodos Imply e Rafael devem existir na instância

  Cenário: Verificar se os argumentos do construtor são definidos corretamente
    Dado que uma instância da classe MyClass é criada com argumentos de construtor
    Então o atributo 'nomeMock' deve ser igual ao argumento fornecido

  Cenário: Verificar se o nome da classe de mock é definido corretamente
    Dado que uma instância da classe MyClass é criada com um nome de classe de mock específico
    Então o nome da classe de mock deve ser igual ao nome fornecido

  Cenário: Verificar se o construtor original é desativado
    Dado que uma instância da classe MyClass é criada com o construtor original desativado
    Então o atributo 'nomeMock' deve ser nulo

  Cenário: Verificar se a clonagem original é desativada
    Dado que uma instância da classe MyClass é criada com a clonagem original desativada
    Quando a instância é clonada
    Então a instância clonada não deve ser a mesma que a original

  Cenário: Verificar se um método retorna um valor específico
    Dado que uma instância da classe MyClass é criada com o método 'metodoExemplo' definido para retornar um valor específico
    Quando o método 'metodoExemplo' é chamado
    Então o valor retornado deve ser o valor especificado

  Cenário: Verificar se um método retorna a própria instância
    Dado que uma instância da classe MyClass é criada
    Então chamar a instância deve retornar a própria instância

  Cenário: Verificar se o autoloader é desativado
    Dado que uma instância da classe MyClass é criada com o autoloader desativado
    Quando a classe é carregada
    Então nenhuma chamada ao autoloader deve ser feita
