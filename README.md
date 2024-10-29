<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Dragon Ball API

Uma API RESTful desenvolvida para gerenciar os atributos dos personagens do universo Dragon Ball. Esta API foi criada em PHP utilizando o framework Laravel e armazena os dados em um banco de dados PostgreSQL.

## Visão Geral

A API fornece acesso a informações detalhadas sobre os personagens, permitindo que os usuários consultem atributos. Ideal para desenvolvedores que desejam integrar dados do universo Dragon em suas aplicações.

## Funcionalidades

- **Consulta de Personagens**: A API permite que os usuários acessem informações sobre os personagens, incluindo seus atributos.
- **CRUD**: É possível criar, ler, atualizar e excluir dados dos personagens.

## Tecnologias

- **Backend**: PHP com Laravel
- **Banco de Dados**: PostgreSQL
- **Hospedagem**: [Fly.io](https://fly.io)

## Como Começar

### Pré-requisitos

- PHP (versão recomendada)
- Composer
- PostgreSQL

### Instalação

1. Clone o repositório:
 ```bash
 git clone https://github.com/seu-usuario/nome-do-repositorio.git
 cd nome-do-repositorio
 ```
2. Instale as dependências:
 ```bash
 composer install
 ```
3. Configure o arquivo `.env` com as credenciais do banco de dados PostgreSQL.
4. Execute as migrations para configurar o banco de dados:
 ```bash
 php artisan key:generate
 php artisan migrate
 ```
5. Inicie o servidor:
 ```bash
 php artisan serve
 ```

## Endpoints

| Método | Endpoint                | Descrição                     |
|--------|-------------------------|-------------------------------|
| GET    | /api/personagens        | Retorna todos os personagens  |
| POST   | /api/personagem        | Cria um novo personagem       |
| GET    | /api/personagem/{id}   | Retorna um personagem específico |
| PUT    | /api/personagem/{id}   | Atualiza um personagem específico |
| DELETE | /api/personagem/{id}   | Remove um personagem específico |

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests.

## MADE BY FELICIO

