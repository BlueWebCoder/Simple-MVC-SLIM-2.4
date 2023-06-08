# Utilisez l'image officielle PHP 7.4 avec Apache
FROM php:8.0-apache

# Installation des dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo_mysql zip

# Installation de Composer
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

# Copiez le fichier .htaccess vers le répertoire /var/www/html
COPY .htaccess /var/www/html/

# Répertoire de travail
WORKDIR /var/www/html

# Copie des fichiers de l'application
COPY . .

# Modification des droits pour les fichiers PHP
RUN chown -R www-data:www-data /var/www/html

# Exposition du port d'Apache
EXPOSE 80

# Commande par défaut pour exécuter Apache en arrière-plan
CMD ["apache2-foreground"]
