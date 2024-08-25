# Use a imagem oficial do PHP 8.3 com Apache
FROM php:8.3-apache

# Habilite o módulo mod_rewrite
RUN a2enmod rewrite

# Instale as extensões do PHP necessárias para o MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copie os arquivos do projeto para o diretório raiz do Apache
COPY . /var/www/html/

# Copie o arquivo de configuração customizado para o Apache
COPY servername.conf /etc/apache2/conf-available/servername.conf

# Habilite o arquivo de configuração
RUN a2enconf servername

# Conceda permissões ao diretório
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponha a porta 80 para acessar o servidor web
EXPOSE 80
