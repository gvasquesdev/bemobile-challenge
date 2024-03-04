Documentação da API Bemobile-Challenge

Requisitos
PHP >= 7.4
Composer
MySQL ou outro banco de dados compatível com Laravel
Postman (opcional, para testar as rotas da API)
Instalação e execução do projeto
Clonar o repositório:

bash
Copy code
git clone https://github.com/seu-usuario/seu-repositorio.git
Acessar o diretório do projeto:

bash
Copy code
cd seu-repositorio
Instalar as dependências via Composer:

Copy code
composer install
Configurar o arquivo .env:

Renomeie o arquivo .env.example para .env
Configure o acesso ao banco de dados no arquivo .env
Gerar a chave da aplicação:

vbnet
Copy code
php artisan key:generate
Executar as migrações do banco de dados:

Copy code
php artisan migrate
Executar o servidor local:

Copy code
php artisan serve
A API estará disponível em http://localhost:8000.

Detalhamento das Rotas
A seguir, detalharemos as rotas disponíveis na API:

Autenticação
POST /api/signup: Cadastrar um novo usuário na aplicação.
POST /api/login: Autenticar um usuário e gerar um token JWT.
POST /api/auth/logout: Encerrar a sessão do usuário.
POST /api/auth/refresh: Atualizar o token JWT.
Clientes (Customers)
GET /api/customers: Listar todos os clientes cadastrados.
GET /api/customers/{id}: Exibir detalhes de um cliente específico.
POST /api/customers: Adicionar um novo cliente.
PUT /api/customers/{id}: Atualizar os detalhes de um cliente existente.
DELETE /api/customers/{id}: Excluir um cliente.
Produtos (Products)
GET /api/products: Listar todos os produtos cadastrados.
GET /api/products/{id}: Exibir detalhes de um produto específico.
POST /api/products: Adicionar um novo produto.
PUT /api/products/{id}: Atualizar os detalhes de um produto existente.
DELETE /api/products/{id}: Excluir um produto.
Vendas (Sales)
POST /api/sales: Registrar uma nova venda de um produto a um cliente.
