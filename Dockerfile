# Define a imagem base
FROM php:7.4-apache

# Define o diretório de trabalho dentro do contêiner
WORKDIR /var/www/html

# Habilita o módulo Apache mod_rewrite
RUN a2enmod rewrite

# Copia o código fonte para o diretório de trabalho
COPY . .

# Instala as dependências do PHP
RUN docker-php-ext-install pdo pdo_mysql

# Define as permissões para o diretório de logs e cache (pode variar de acordo com a sua configuração)
RUN chown -R www-data:www-data logs tmp

# Expõe a porta padrão do Apache
EXPOSE 80

# Define o comando de inicialização do Apache
CMD ["apache2-foreground"]
