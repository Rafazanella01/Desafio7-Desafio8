    Funcionalidade: Teste da Calculadora Financeira

    Cenário: Verificação de calculo com o metodo dos juros simples
    Dado que é instanciado o metodo da Calculadora Financeira
    Quando For passado os valores de Capital = 10.000, Taxa = 12% e Tempo = 4.7 Anos
    Então o resultado deve ser igual a 5640

    Cenário: Verificação do calculo de juros compostos
    Dado que crio uma instancia do metodo calcularJurosCompostos
    Quando inserir os valores de Capital = 5000, Taxa = 10% e Tempo = 1 ano
    Então o resultado deve ser igual a 500

    Cenário: Cálculo de Amortização SAC
    Dado que eu tenho uma Calculadora Financeira
    Quando eu calcular amortização com um capital de 10000, uma taxa de 5, um tempo de 2 e um tipo de amortização SAC
    Então eu devo obter um array contendo o total de juros pagos e o valor das parcelas de amortização

    Cenário: Cálculo de Amortização Price
    Dado que eu tenho uma Calculadora Financeira
    Quando eu calcular amortização com um capital de 20000, uma taxa de 7, um tempo de 3.5 e um tipo de amortização Price
    Então eu devo obter um array contendo o total de juros pagos e o valor das parcelas de amortização

    Exemplos:
      | capital | taxa | tempo | tipo    | total_juros | parcela_amortizacao |
      | 10000   | 5    | 2     | 'SAC'   | 1500        | [500, 500, 500, 500] |
      | 20000   | 7    | 3.5   | 'Price' | 3500        | [1200, 1100, 800, 400] |