# 🚀 Laravel Base Project (Livewire + Filament + Tailwind)

Este repositório é um **projeto base (template)** criado para servir como ponto de partida para novos projetos.

Ele já vem configurado com:

- Laravel
- Livewire
- Filament
- TailwindCSS
- Layout global (Navbar + Footer)
- Estrutura inicial pronta para desenvolvimento

A ideia é: sempre que precisar iniciar um novo projeto, basta **clonar este repositório** e começar a desenvolver.

## ✅ Requisitos

Antes de rodar o projeto, você precisa ter um ambiente de desenvolvimento configurado.

### 🖥️ Ambiente local

Recomenda-se usar um pacote como XAMPP, Laragon ou Docker, que já inclui:

- PHP 8.2+
- MySQL (ou MariaDB)
- Servidor web (Apache ou Nginx)

### 📦 Dependências obrigatórias

Além do ambiente local, você precisa ter instalado:

- Composer
- Node.js
- NPM
- Git

Você pode verificar se está tudo instalado com:

```bash
php -v
composer -V
node -v
npm -v
git -v
```

### 🗄️ Banco de Dados

- MySQL ou MariaDB
- Gerenciado via:
  - phpMyAdmin (XAMPP/Laragon)
  - MySQL Workbench
  - Outro gerenciador de sua preferência

## 📥 Instalação do Projeto

Clone o repositório:

```bash
git clone https://github.com/Kaique-GM/laravel-base-project.git
```

Entre na pasta do projeto:

```bash
cd nome-do-projeto
```

Instale as dependências do PHP:

```bash
composer install
```

Instale as dependências do Node:

```bash
npm install
```

## ⚙️ Configuração do arquivo ```.env```

Crie o arquivo ```.env``` baseado no ```.env.example```:

```bash
cp .env.example .env
```

Agora gere a chave da aplicação:

```bash
php artisan key:generate
```

## 🗄️ Configurar Banco de Dados

No arquivo ```.env```, configure as credenciais do banco:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=root
DB_PASSWORD=
```

Depois rode as migrations:

```bash
php artisan migrate
```

## 📂 Storage (Upload de arquivos)

Caso o projeto utilize uploads, crie o link simbólico do storage:

```bash
php artisan storage:link
```

## 🛡️ Acesso ao painel administrativo

Crie um usuário administrador para acessar o painel:

```bash
php artisan make:filament-user
```
Durante a criação, informe os dados solicitados:

- Nome
- E-mail
- Senha


## ▶️ Rodando o projeto

Rodar servidor Laravel:

```bash
php artisan serve
```

Rodar o Vite:

```bash
npm run dev
```

Após iniciar o projeto, acesse:

### Aplicação

```bash
http://127.0.0.1:8000
```

### Painel administrativo

```bash
http://127.0.0.1:8000/admin
```

## 🏗️ Build para produção

Para gerar os arquivos finais do frontend:

```bash
npm run build
```

## 📌 Estrutura base

O projeto já vem com:

- Layout global em: ```resources/views/layouts/app.blade.php```

- Componentes Livewire globais:

  - Navbar: ```app/Livewire/Components/Navbar.php```

  - Footer: ```app/Livewire/Components/Footer.php```

- Página inicial:
  - Home: ```app/Livewire/Home.php```
  
## 💡 Como usar este projeto como template

Para criar um novo projeto usando este como base:

 1. Clone o repositório
 2. Renomeie o projeto/pasta se quiser
 3. Apague o histórico git antigo:

```bash
rm -rf .git
```

 1. Crie um novo repositório e inicie o git:

```bash
git init
git add .
git commit -m "Initial commit"
```

## 📌 Tecnologias usadas

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-4E56A6?style=for-the-badge&logo=livewire&logoColor=white)
![Tailwind_CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)

## 📄 Licença

Este projeto é livre para uso como base em projetos pessoais e profissionais.
