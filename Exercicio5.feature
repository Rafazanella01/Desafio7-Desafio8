Funcionalidade: Operações Matemáticas

  Cenário: Soma correta
    Dado que eu tenho uma instância da MinhaClasseAvancado
    Quando eu executo o método soma com os valores 5 e 5
    Então o resultado deve ser 10

  Cenário: Soma com argumentos inválidos
    Dado que eu tenho uma instância da MinhaClasseAvancado
    Quando eu executo o método soma com os valores "rafa" e 5
    Então uma exceção InvalidArgumentException deve ser lançada

  Cenário: Soma com números decimais
    Dado que eu tenho uma instância da MinhaClasseAvancado
    Quando eu executo o método soma com os valores 1.5 e 1.5
    Então o resultado deve ser 3

  Cenário: Soma de zero
    Dado que eu tenho uma instância da MinhaClasseAvancado
    Quando eu executo o método soma com os valores 1.5 e 0
    Então o resultado deve ser 1.5

  Cenário: Subtração correta
    Dado que eu tenho uma instância da MinhaClasseAvancado
    Quando eu executo o método subtracao com os valores 5 e 5
    Então o resultado deve ser 0

  Cenário: Subtração com argumentos inválidos
    Dado que eu tenho uma instância da MinhaClasseAvancado
    Quando eu executo o método subtracao com os valores "rafa" e 5
    Então uma exceção InvalidArgumentException deve ser lançada

  Cenário: Subtração de números decimais
    Dado que eu tenho uma instância da MinhaClasseAvancado
    Quando eu executo o método subtracao com os valores 1.5 e 1.5
    Então o resultado deve ser 0

  Cenário: Subtração de zero
    Dado que eu tenho uma instância da MinhaClasseAvancado
    Quando eu executo o método subtracao com os valores 1.5 e 0
    Então o resultado deve ser 1.5
