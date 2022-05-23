# Nov Hotel Api Backend
Code du Backend Symfony pour Le front Vue

# Installation

1. Clonez le dépot où vous voulez
2. Installez les dépendances : `composer install`
3. Acceder au fichier .env a la ligne 26 : `Remplacer l'username et le password Par vos accèss Mysql ou Mariadb`
4. Créer une base de données: `php bin/console d:d:c`
5. Jouez les migrations : `php bin/console make:migration` puis `php bin/console d:m:m`
6. Lancez le server : `symfony serve` ou `php -S localhost:8000 -t public`