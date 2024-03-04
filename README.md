# Documentação da API Bemobile

## Requisitos

-   PHP >= 7.4
-   Composer
-   MySQL ou outro banco de dados compatível com Laravel
-   Postman (opcional, para testar as rotas da API)

## Instalação e execução do projeto

1. **Clonar o repositório:**
   git clone https://github.com/gvasquesdev/bemobile-challenge.git

2. **Acessar o diretório do projeto:**
   cd bemobile-challenge

3. **Acessar o diretório do projeto:**
   composer install

4. **Configurar o arquivo .env:**

-   Renomeie o arquivo `.env.example` para `.env`
-   Configure o acesso ao banco de dados no arquivo `.env`

5. **Gerar a chave da aplicação:**
   php artisan key:generate

6. **Executar as migrações do banco de dados:**
   php artisan migrate

7. **Executar o servidor local:**
   php artisan serve

A API estará disponível em `http://localhost:8000`.

## Detalhamento das Rotas

A seguir, detalharemos as rotas disponíveis na API:

### Autenticação

-   **POST /api/signup**: Cadastrar um novo usuário na aplicação.
-   **POST /api/login**: Autenticar um usuário e gerar um token JWT.
-   **POST /api/auth/logout**: Encerrar a sessão do usuário.
-   **POST /api/auth/refresh**: Atualizar o token JWT.

### Clientes (Customers)

-   **GET /api/customers**: Listar todos os clientes cadastrados.
-   **GET /api/customers/{id}**: Exibir detalhes de um cliente específico.
-   **POST /api/customers**: Adicionar um novo cliente.
-   **PUT /api/customers/{id}**: Atualizar os detalhes de um cliente existente.
-   **DELETE /api/customers/{id}**: Excluir um cliente.

### Produtos (Products)

-   **GET /api/products**: Listar todos os produtos cadastrados.
-   **GET /api/products/{id}**: Exibir detalhes de um produto específico.
-   **POST /api/products**: Adicionar um novo produto.
-   **PUT /api/products/{id}**: Atualizar os detalhes de um produto existente.
-   **DELETE /api/products/{id}**: Excluir um produto.

### Vendas (Sales)

-   **POST /api/sales**: Registrar uma nova venda de um produto a um cliente.
