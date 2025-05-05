<h1 align="center">
    <a href="#">🔗 Horrorcraft </a>
</h1>
<p align="center"> Web-site para compartilhamento contos de terror sendo feito com PHP puro e banco de dados MySQL. </p>

<img src="https://github.com/davimouravilaca/horrorcraft/assets/76662862/290bfb7f-541d-43a8-8299-4c0a8a61e944">

<div align="center">

   <img src="https://img.shields.io/badge/em-desenvolvimento-brightgreen.svg" alt="Em Desenvolvimento">

   <img src="https://img.shields.io/badge/desenvolvimento-cont%C3%ADnuo-orange.svg" alt="Desenvolvimento Contínuo">

   <img src="https://img.shields.io/badge/Open%20Source-Yes-green.svg" alt="Open Source">

   <img src="https://img.shields.io/badge/licen%C3%A7a-MIT-blue.svg" alt="Licença MIT" >


   
</div>

# Aviso: Em Desenvolvimento 🚧

Estou trabalhando ativamente em documentar e melhorar a organização das pastas e legibilidade do código para melhor experiencia de quem quiser contribuir com o desenvolvimento desse projeto.
Por enquanto, se você deseja contribuir de alguma forma, sinta-se livre para abrir uma issue. :D 
## Tecnologias Utilizadas 🛠️
<div >
<img width="50" src="https://github.com/marwin1991/profile-technology-icons/assets/76662862/dbbc299a-8356-45e4-9d2e-a6c21b4569cf" alt="php (elephpant)" title="php (elephpant)"/>
 <img width="50" src="https://user-images.githubusercontent.com/25181517/183896128-ec99105a-ec1a-4d85-b08b-1aa1620b2046.png" alt="MySQL" title="MySQL"/>
 <img width="50" src="https://user-images.githubusercontent.com/25181517/192158954-f88b5814-d510-4564-b285-dff7d6400dad.png" alt="HTML" title="HTML"/>
 <img width="50" src="https://user-images.githubusercontent.com/25181517/183898674-75a4a1b1-f960-4ea9-abcb-637170a00a75.png" alt="CSS" title="CSS"/>
<img width="50" src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/docker.png" alt="Docker" title="Docker"/>
<img width="45" src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/linux.png" alt="Linux" title="Linux"/>
<img width="45" src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/ubuntu.png" alt="Ubuntu" title="Ubuntu"/>
</div>

# Features 🧙🏼‍♂️
<div>
  <ul>
    <li>
      <h4>Login funcional com sistema de autenticação e cadastro de usuário.</h3>
      <img src="https://github.com/davimouravilaca/horrorcraft/assets/76662862/cfc5b3c7-b3c3-4918-a1f7-a4523c81ca14" alt="image" width="500">
    </li>
    <li>
      <h4>Feed Inicial com sistema de re-roll.</h3>
      <img src="https://github.com/davimouravilaca/horrorcraft/assets/76662862/9f9c891a-d66a-419b-8ca1-7b2766056057" alt="image" width="500">
    </li>
    <li>
      <h4>Listagem de histórias com paginação.</h3>
      <img src="https://github.com/davimouravilaca/horrorcraft/assets/76662862/97cc6ec0-6adf-4ab9-98ac-295221c06c78" alt="image" width="500">
    </li>
    <li>
      <h4>Sistema de upload de histórias para usuários autenticados.</h3>
      <img src= "https://github.com/davimouravilaca/horrorcraft/assets/76662862/a9b0f05c-ff9f-4176-a503-abc8e37914d6" width="500"> 
    </li>
    <li>
      <h4>Sistema básico de perfil com CRUD e logout.</h3>
      <img src="https://github.com/davimouravilaca/horrorcraft/assets/76662862/1a2c7443-6f9f-4ede-a082-8d8b429a5ef6" alt="image" width="500">
    </li>
  </ul>
</div>


## TODO 🌳

- Sanitizar inputs contra ataques de injeção SQL e Cross-Site Scripting (XSS). 
- Sistema de coleções, ilustrações etc.
- Sistema de tags, pesquisa, temas entre outros.

# Como Instalar 🚀

Como esta e uma aplicação full-stack que roda em servidor primeiramente é necessário atender alguns pré-requisitos como ter uma solução AMP (Apache, MySQL e PHP) instalada para simular um servidor local na sua máquina.

## Pré-requisitos

Antes de começar, certifique-se de ter os seguintes programas instalado em seu computador:

- [PHP](https://www.php.net/) - Versão 8.1.2 ou superior
- [MySQL](https://www.mysql.com/) - Versão 8.0.35 ou superior
- [Servidor Apache](https://httpd.apache.org/) - Versão 2.4.52 ou superior

Se você estiver usando Windows basta baixar o Xampp ou o Laragon: 

- [XAMPP](https://www.apachefriends.org/pt_br/download.html)
- [Laragon](https://laragon.org/download/index.html)

### Instalação no Linux (base Ubuntu):

```bash

    # Atualize os repositorios
    sudo apt update

    # Instale o PHP
    sudo apt install php8.1

    # Instale o MySQL
    sudo apt install mysql
    sudo apt install mysql-server
    sudo apt install php-mysql

    # Instale o servidor Apache
    sudo apt install apache2

    # Atualize se necessário:
    sudo apt update
    sudo apt upgrade
```
```bash

    # Verificar versoes instaladas
    php -v
    mysql --version
    apache2 -v

```

## Passos de Instalação

1. **Clone o repositório para a pasta do apache:**

    **Para Windows:**

    *XAMPP:*

    ```bash
    git clone https://github.com/davimouravilaca/horrorcraft.git C:\\xampp\\htdocs\\horrorcraft
    cd C:\\xampp\\htdocs\\horrorcraft
    ```
    
    *Laragon:*
   
     ```bash
    git clone https://github.com/davimouravilaca/horrorcraft.git C:\\laragon\\www\\horrorcraft
    cd C:\\laragon\\www\\horrorcraft
    ```

    **Para Linux:**

    ```bash
    git clone https://github.com/davimouravilaca/horrorcraft.git /var/www/html/horrorcraft
    cd /var/www/html/horrorcraft
    ```

1. **Configure o banco de Dados MySQL:**

    - Crie um banco de dados para o projeto.

    ```sql
    CREATE DATABASE historias;
    ```

    - Importe o esquema do banco de dados a partir do arquivo `database.sql`.

    ```bash
    mysql -u seu_usuario -p historias < /horrorcraft/main/database/database.sql
    ```

2. **Configuração do PHP:**

    - Edite o arquivo `conexão.php` e insira suas credenciais do banco de dados se necessário.

    A senha e usuário padrão são:
    - **Usuário:** `admin@example.com`
    - **Senha:** `senha123`    

3. **Execute o Servidor Web:**

    Inicie o servidor web para servir o projeto.

    ```bash
    sudo systemctl start apache2
    ```

4. **Acesse o Projeto:**

    Abra seu navegador e acesse [http://localhost/horrorcraft/main](http://localhost/horrorcraft/main).

5. **Pronto!**

    Se tudo houver corrido conforme planejado o sistema agora está instalado e em execução em seu ambiente local.

Explore as funcionalidades e contribua para o desenvolvimento! Quaisquer dúvidas pode abrir uma issue ou subir um PR. Contato:

💌 davimouravilaca@gmail.com
 

