## :bust_in_silhouette: Classes de usuário

**Cliente:** pessoas que navegam na loja, selecionam produtos e realizam compras. Podem criar contas e fazer login, realizar buscas por produtos, adicionar produtos ao carrinho e efetuar compras.

**Gerente de estoque:** funcionário que supervisiona o estoque da loja. É responsável por manter produtos e tipo de produtos.

**Administrador do sistema:** possui todas as permissões do cliente e do gerente de estoque. Além disso, pode definir promoções, manter usuários e gerenciar pedidos.

## :memo: Requisitos funcionais

**RF01:** [Administrador do sistema/ Gerenciar usuários] O sistema deve permitir a inclusão, alteração e remoção de usuários, com os seguintes atributos: nome, CPF, endereço, telefone, e-mail, senha e tipo de permissão.

**RF02:** [Administrador do sistema, Gerente de estoque/ Gerenciar estoque] O sistema deve permitir a inclusão, alteração e remoção de produtos no estoque, com os seguintes atributos: código, nome, preço, descrição e tipo.

**RF03:** [Administrador do sistema, Gerente de estoque/ Gerenciar tipo] O sistema deve permitir a inclusão, alteração e remoção de tipos de produto, com os seguintes atributos: nome, descrição e numerações.

**RF04:** [Cliente/ Realizar cadastro] O sistema deve permitir que o cliente crie uma conta a partir do fornecimento dos seguintes atributos: nome, CPF, endereço, telefone, email e senha.

**RF05:** [Administrador do sistema, Gerente de estoque, Cliente/ Fazer login] O sistema deve permitir que usuários efetuem login com suas respectivas credenciais (email e senha), para terem acesso às funcionalidades correspondentes ao seu tipo de usuário.

**RF06:** [Cliente/ Gerenciar carrinho] O sistema deve permitir que o cliente escolha produtos e mande-os ou retire-os do carrinho.

**RF07:** [Cliente/ Selecionar produtos para compra] O sistema deve permitir que o cliente escolha quais produtos do carrinho ele deseja prosseguir com a compra.

**RF08:** [Cliente/ Criar pedido de compra] O sistema deve permitir que o cliente crie um pedido de compra com os produtos selecionados a partir da utilização do RF08. Além disso, o sistema deve permitir que o cliente indique a quantidade de cada produto; o endereço de entrega; selecione a forma de pagamento; e informe os dados bancários.

**RF09:** [Administrador do sistema/ Gerenciar pedido de compra] O sistema deve permitir que o administrador do sistema altere o status dos pedidos de compra.

**RF10:** [Cliente/ Acompanhar pedido de compra] O sistema deve permitir que o cliente acompanhe o status dos pedidos de compras realizados.

## :construction: Andamento

**RF02:** [Administrador do sistema, Gerente de estoque/ Gerenciar estoque] [IMPLEMENTADA PARCIALMENTE]

**RF04:** [Cliente/ Realizar cadastro] [IMPLEMENTADA PARCIALMENTE]

**RF05:** [Administrador do sistema, Gerente de estoque, Cliente/ Fazer login] [IMPLEMENTADA PARCIALMENTE]

**RF08:** [Cliente/ Criar pedido de compra] [IMPLANTADA PARCIALMENTE] 

<sub>**Obs.:** Demais funcionalidades não foram implementadas</sub>
