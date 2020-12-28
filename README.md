# php-simple-exercise-1

The purpose of this exercise is to develop a simple system applying some object orientation concepts and with some unit test cases.

## What to do?

- Fork this repository
- Create at least two concrete entities classes from the type Commodity
- For each type of Commodity class:
  - The factory class must have a method to create the object (a interface is good here)
- The factory method which creates the Commodity, must have:
  - Have the Commodity Type parameter
  - Have the Commodity quantity
  - This method must call the method from the factory to create the Commodity instance
    - This method must print in console the following message: "Creating the 'Commodity X'..."
- Create at least one Abstract class
- Create at least two Interfaces (one of these interfaces may be the one who will be used in the factory class)
- Create at least three Unit Tests
- Create at least one Enum
- Documentate all the code in English
- Write instructions in README about how to use the software
- Commit

## O que fazer?

- Realizar o fork desse repositório
- Criar no mínimo duas classes concretas e específicas do tipo Commodity
- Para cada classe de tipo de Commodity:
  - A fábrica deve ter um método para criar um objeto (uma interface seria boa aqui)
- O método da fábrica que cria as Commodities deve ter:
    - Um parâmetro com o tipo de Commodity que será criada
    - Um parâmetro com a quantidade dessa Commodity que será criada
    - Esse método deve chamar o método de cada fábrica específica que vai criar a instância do objeto de Commodity
      - O método de cada fábrica deve imprimir uma mensagem no console: "Fabricando a "Commodity X" ...."
- Criar pelo menos uma classe abstrata
- Criar pelo menos uma Interface (uma dessas interfaces pode ser a que será utilizada em todas as fábricas de instâncias de objetos)
- Criar pelo menos três Testes Unitários
- Criar pelo menos um Enumerado
- Documentar todo o código em inglês
- Colocar instruções no README de como utilizar o software
- Realizar o commit
