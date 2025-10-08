# 🚗 Sistema de Gerenciamento de Veículos (CRUD em PHP)

Este projeto é uma aplicação **web completa e funcional**, desenvolvida em **PHP, HTML e CSS**, com o objetivo de gerenciar um banco de dados de veículos utilizando o padrão **CRUD (Create, Read, Update, Delete)**.

O sistema foi criado para fins de **aprendizado acadêmico**, demonstrando de forma prática o funcionamento de uma aplicação PHP integrada ao banco de dados MySQL.

---

## 🧩 Tecnologias Utilizadas

- **PHP** – Linguagem responsável pela lógica do servidor e interação com o banco de dados.  
- **MySQL** – Sistema de gerenciamento de banco de dados relacional (armazenamento dos dados dos veículos).  
- **HTML5** – Estrutura e marcação das páginas da aplicação.  
- **CSS3** – Estilização das páginas, com foco em um design limpo e minimalista.  
- **XAMPP** – Ambiente local de desenvolvimento contendo Apache e MySQL.  

---

## ⚙️ Estrutura do Projeto

```
crud-veiculos/
│
├── conexao.php        # Arquivo responsável pela conexão com o banco de dados
├── index.php          # Página inicial – lista todos os veículos cadastrados
├── criar.php          # Formulário para cadastrar um novo veículo
├── editar.php         # Página para editar os dados de um veículo
└── deletar.php        # Script para exclusão de veículos do banco de dados
```

---

## 🗃️ Estrutura do Banco de Dados

O banco de dados foi criado no **phpMyAdmin** com o nome `veiculos`.  
A tabela principal também se chama `veiculos` e possui os seguintes campos:

| Campo | Tipo | Atributos | Descrição |
|-------|------|------------|------------|
| **id** | INT(11) | PRIMARY KEY, AUTO_INCREMENT | Identificador único do veículo |
| **modelo** | VARCHAR(100) | NOT NULL | Modelo do veículo |
| **placa** | VARCHAR(10) | NOT NULL | Placa do veículo |
| **cor** | VARCHAR(50) | NOT NULL | Cor do veículo |
| **estoque** | INT(11) | NOT NULL | Quantidade disponível |
| **ano** | YEAR(4) | NOT NULL | Ano de fabricação |

🧠 **Observação importante:**  
O campo `id` deve estar configurado como **AUTO_INCREMENT** para evitar erros de chave primária duplicada.

---

## 🚀 Funcionalidades do Sistema

| Função | Descrição |
|--------|------------|
| ➕ **Criar** | Cadastra novos veículos no banco de dados. |
| 👁️ **Ler** | Exibe todos os veículos cadastrados em uma tabela interativa. |
| ✏️ **Editar** | Permite atualizar as informações de um veículo existente. |
| 🗑️ **Excluir** | Remove um veículo permanentemente do sistema. |

---

## 🧱 Passo a Passo de Criação

### 1. Criação do Banco de Dados
- Acesse o **phpMyAdmin** (geralmente em `http://localhost/phpmyadmin`).
- Crie um banco de dados chamado **`veiculos`**.
- Em seguida, crie uma tabela também chamada `veiculos` com os campos descritos acima.

### 2. Conexão com o Banco de Dados
No arquivo `conexao.php`, foi criada uma conexão usando **MySQLi**, da seguinte forma:

```php
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "veiculos";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
```

---

### 3. Página Inicial – `index.php`
- Exibe todos os veículos cadastrados em uma **tabela HTML**.
- Inclui um botão “Adicionar Novo Veículo” que direciona para `criar.php`.
- Possui também botões **Editar** e **Excluir** ao lado de cada registro.

---

### 4. Página de Cadastro – `criar.php`
- Contém um formulário HTML para inserir os dados do veículo.
- Ao enviar o formulário, é executado um comando **INSERT INTO** no banco de dados.
- Caso o `id` não esteja configurado como AUTO_INCREMENT, pode ocorrer o erro:  
  *“Duplicate entry '0' for key 'PRIMARY’”*.

---

### 5. Página de Edição – `editar.php`
- Carrega os dados do veículo selecionado e os exibe em um formulário.
- Ao clicar em “Salvar”, o sistema executa um **UPDATE** no banco de dados.

---

### 6. Página de Exclusão – `deletar.php`
- Recebe o ID do veículo via URL (`?id=...`) e executa o comando **DELETE**.
- Após excluir, redireciona de volta para a `index.php`.

---

## 🎨 Layout e Estilo

O projeto possui um visual **minimalista e responsivo**, com:
- Layout centralizado e espaçado.
- Cores neutras (preto, branco e cinza claro).
- Botões arredondados e com efeitos ao passar o mouse.
- Tabela com linhas alternadas e realce em hover.
- Design compatível com dispositivos móveis.

---

## 📚 Conceitos e Boas Práticas Aplicadas

- CRUD completo utilizando **PHP + MySQLi**.  
- Separação de responsabilidades entre páginas.  
- Uso de formulários HTML com método **POST**.  
- Boas práticas básicas de **front-end** (HTML semântico e CSS limpo).  
- Conexão reutilizável via `conexao.php`.  
- Estrutura modular e fácil de expandir.

---

## 💻 Como Executar o Projeto

1. Instale o **XAMPP** (ou similar) e inicie o **Apache** e o **MySQL**.  
2. Copie a pasta `crud-veiculos` para o diretório `htdocs` (geralmente `C:\xampp\htdocs\`).  
3. Acesse o **phpMyAdmin** e importe/crie o banco `veiculos`.  
4. Verifique se o campo `id` da tabela está configurado como **AUTO_INCREMENT**.  
5. No navegador, acesse:  
   👉 [http://localhost/crud-veiculos/](http://localhost/crud-veiculos/)  
6. Pronto! Você poderá criar, visualizar, editar e excluir veículos.

---

## 👨‍💻 Autor

**João Victor Santos Souza**  
📍 Tocantins, Brasil  
💬 Desenvolvido para fins **acadêmicos e de aprendizado**.  
📅 Ano: 2025  

---

## 📝 Licença

Este projeto é de uso livre para fins educacionais.  
Sinta-se à vontade para estudar, modificar e melhorar o código.  
Distribuição comercial não autorizada.

---
