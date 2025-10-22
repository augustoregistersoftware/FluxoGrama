# Imagem base com Apache + PHP 8.1
FROM php:8.1-apache

# Instala extensões PHP necessárias (ajuste conforme seu projeto)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia o código do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html

# Habilita o mod_rewrite para URLs amigáveis (muito usado no CI)
RUN a2enmod rewrite

# Configura o Apache para usar o .htaccess do CodeIgniter
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Define o diretório público (ajuste se necessário)
WORKDIR /var/www/html

# Expõe a porta padrão do Apache
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
