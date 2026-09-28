# 🐘 Exercício Prático em PHP - Cadastro de Produtos com Validação 🛡️

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)]()
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)]()
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)]()
[![Status](https://img.shields.io/badge/Status-Concluído-brightgreen?style=for-the-badge)]()

Este repositório contém a solução desenvolvida para o **Desafio 2 (Alternativo)**, focado no cadastro de produtos em banco de dados MySQL com validação de dados em PHP, exibição de mensagens de retorno e interatividade via JavaScript.

---

## 🚀 Tecnologias Utilizadas

- **PHP** (Linguagem backend)
- **MySQL / MariaDB** (Banco de dados relacional)
- **HTML5** (Estruturação do formulário)
- **JavaScript** (Ocultação dinâmica de mensagens)

---

## 📋 Atividade Desenvolvida

### 🛒 1. Cadastro de Produtos com Validação (`desafio2.php`)
- **Descrição:** Uma página em PHP que disponibiliza um formulário para entrada de dados de produtos (nome e preço) e realiza a validação e inserção na tabela `produtos` do banco de dados `exercicio`.
- **Lógica aplicada:**
  - Criação da tabela `produtos` no MySQL com chave primária auto-incrementável (`id`), `nome` (`VARCHAR`) e `preco` (`DECIMAL`).
  - Captação dos dados via formulário HTML utilizando o método `POST`.
  - Conexão orientada a objetos com o banco de dados via extensão `mysqli`.
  - Validação dos dados em PHP verificando se o preço inserido é um valor positivo ($> 0$).
  - Caso os dados sejam válidos, realiza a instrução `INSERT INTO` no banco e exibe uma mensagem de sucesso na cor verde.
  - Caso o preço seja menor ou igual a zero, exibe uma mensagem de erro na cor vermelha.
  - Utilização de script **JavaScript** (`setTimeout`) para ocultar automaticamente a mensagem de retorno após 5 segundos.
- **Conceitos:** Formulários HTML (método `POST`), manipulação da superglobal `$_POST`, conexão MySQLi, execução de queries SQL (`INSERT`), condicionais (`if/else`), estilos CSS inline e manipulação do DOM via JS (`setTimeout`).

---

## 👤 Repositório desenvolvido por:

**Nome:** Vitor Rodrigues Santos  
**Turma:** 1ID-DS
