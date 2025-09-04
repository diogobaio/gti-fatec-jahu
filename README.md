# Guia Básico de Git e GitHub no ambiente Windows 🪟

Este é um guia simples para começar a usar **Git** e **GitHub**, até a etapa de envio (`push`), atualização (`pull`) e clonagem (`clone`) de arquivos e seus respectivas pastas.

## 📌 Pré-requisitos

* Git instalado em seu computador → [Download](https://git-scm.com/downloads)
* Conta no GitHub
* Editor de código recomendado: [VS Code](https://code.visualstudio.com/)

---

## ⚙️ Configuração inicial

Após instalar o Git, abra o Git Bash configure seu nome e e-mail (apenas na primeira vez):

```bash
git config --global user.name "seu nome"
git config --global user.email "seuemail@example.com"
```

---

## 📂 Criar e inicializar repositório

1. Crie uma pasta para o projeto.
2. Abra o terminal na pasta e execute:

```bash
git init
```

Isso cria um repositório Git local.

---

## 📄 Adicionar e confirmar arquivos

Verificar status:

```bash
git status
```

Adicionar todos os arquivos:

```bash
git add .
```

Confirmar (commit):

```bash
git commit -m "Primeiro commit"
```

---

## 🌍 Conectar ao GitHub

Crie um repositório no GitHub e copie o link HTTPS.
Depois, conecte o repositório local ao remoto:

```bash
git remote add origin https://github.com/usuario/repositorio.git
git branch -M main
git push -u origin main
```

---

## 🔄 Atualizar o repositório

Se fizer mudanças em arquivos:

```bash
git add .
git commit -m "Atualização feita"
git push
```

Se quiser baixar alterações do GitHub:

```bash
git pull
```

---

## 📥 Clonar um repositório

Se você quiser baixar um repositório do GitHub para o seu computador:

1. No GitHub, abra o repositório desejado.
2. Clique no botão verde **Code** e copie o link HTTPS.
3. No terminal, execute:

```bash
git clone https://github.com/usuario/repositorio.git
```

Isso criará uma cópia completa do repositório em uma nova pasta local.

---

## 💡 Dicas úteis no VS Code

* `code .` → abre a pasta atual no **Visual Studio Code**
* `explorer .` → abre a pasta atual no **Explorador de Arquivos** do sistema

Esses comandos ajudam a navegar rapidamente no projeto sem precisar abrir manualmente.

---

## ✅ Conclusão

Com esses comandos você já pode:

* Criar e gerenciar versões do seu projeto
* Enviar para o GitHub (`push`)
* Atualizar com alterações do repositório remoto (`pull`)
* Baixar repositórios existentes (`clone`)

---