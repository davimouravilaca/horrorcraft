# Use uma imagem base Ubuntu
FROM ubuntu:latest

# Atualize os pacotes e instale o Apache, PHP, MySQL e outras dependências
RUN apt-get update && \
    DEBIAN_FRONTEND="noninteractive" apt-get install -y apache2 php8.1 php-mysql mysql-client mysql-server default-mysql-server && \
    rm -rf /var/lib/apt/lists/*

# Habilitar o módulo Apache necessário para o PHP
RUN a2enmod php8.1

# Copie os arquivos da sua aplicação para o diretório de trabalho no contêiner
COPY . /var/www/html/

# Defina o usuário e grupo corretos para o diretório
RUN chown -R www-data:www-data /var/www/html

# Esperar até que o serviço MySQL esteja pronto antes de iniciar o Apache
RUN echo "service mysql start" >> /usr/local/bin/docker-entrypoint.sh
RUN echo "apache2ctl -D FOREGROUND" >> /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Expor a porta 80 para acessar a aplicação web
EXPOSE 80

