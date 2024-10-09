# Use a imagem base do Ubuntu 24.04
FROM ubuntu:24.04

# Definir variáveis de ambiente para evitar prompts durante a instalação
ENV DEBIAN_FRONTEND=noninteractive

# Atualizar o sistema e instalar dependências essenciais
RUN apt-get update && apt-get install -y --no-install-recommends \
    apache2 \
    software-properties-common \
    curl \
    ca-certificates \
    lsb-release \
    gnupg2 \
    && apt-get clean

# Adicionar o repositório do PHP 8.3 e instalar PHP com as extensões necessárias
RUN add-apt-repository ppa:ondrej/php -y && \
    apt-get update && apt-get install -y \
    php8.3 \
    php8.3-fpm \
    php8.3-pgsql \
    php8.3-gd \
    php8.3-zip \
    php8.3-curl \
    php8.3-mbstring \
    php8.3-xml \
    && apt-get clean

# Instalar dependências adicionais
RUN apt-get install -y --no-install-recommends \
    postgresql-client \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    && apt-get clean

# Definir o ServerName no Apache para evitar avisos
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copiar os arquivos do aplicativo
COPY ./public-html /var/www/html/

# Copiar a configuração do Apache
COPY ./httpd.conf /etc/apache2/sites-available/000-default.conf

# Habilitar módulos necessários
RUN a2enmod proxy
RUN a2enmod proxy_fcgi

# Habilitar o módulo PHP no Apache  
RUN a2enconf php8.3-fpm

# Ajustar permissões
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 777 /var/www/html

# Expor a porta 10000
EXPOSE 10000

# Iniciar o Apache
CMD ["apache2-foreground"]

