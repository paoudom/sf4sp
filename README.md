# SF4 STARTER PACK
## Installation

 Clonez ou télécharger le projet.
 Récupérez les dépendances avec composer : 

     composer install

 Créez un fichier .env.local avec vos configurations de bdd et mail.
 Pour créer la base de données vous pouvez utiliser la console ou en la créant directement avec mysql (attention au charset : utf8_general_ci   

     php bin/console doctrine:database:create


Une fois la base de données créée, il faut créer le schéma des tables

    php bin/console doctrine:schema:create

Il faudra ensuite ajouter l'utilisateur admin avec les fixtures : 

    php bin/console doctrine:fixtures:load

## Les bundles intégrés

 1. EasyAdminBundle: Administration du site
[https://symfony.com/doc/master/bundles/EasyAdminBundle/index.html](https://symfony.com/doc/master/bundles/EasyAdminBundle/index.html)
 2. knpPaginator: Pagination des requetes
[https://github.com/KnpLabs/KnpPaginatorBundle](https://github.com/KnpLabs/KnpPaginatorBundle)

 3. VichUploaderBundle : Gestion des uploads
[https://github.com/dustin10/VichUploaderBundle](https://github.com/dustin10/VichUploaderBundle)

 4. MobileDetect : Détection des mobiles
[https://github.com/suncat2000/MobileDetectBundle](https://github.com/suncat2000/MobileDetectBundle)

 5. Faker: Pour créer du faux contenu
[https://github.com/fzaninotto/Faker](https://github.com/fzaninotto/Faker)

 6. PhpParser: Permet de régler le problème de la barre 
[https://packagist.org/packages/nikic/php-parser](https://packagist.org/packages/nikic/php-parser)

## Premiers pas
Une fois le projet installé, vous pouvez commencer par personnaliser le contrôleur principel (MainController.php) pour créer vos actions.

Pour gérer vos entités avec EasyAdminBundle, il faut configurer le fichier easy_admin.yaml. Vous pouvez vous inspirer de la gestion des utilisateurs pour créer vos propres configuration.

Il existe deux fichiers base.html et mobile/base.html correspondant aux templates normaux et aux templates mobiles. Vous pouvez utiliser la redirection par template en ajoutant cette ligne dans vos templates: 

    {% extends is_mobile() ?  "mobile/base.html.twig"  :  "base.html.twig" %}
