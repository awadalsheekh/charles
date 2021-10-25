# charles cantin - Photographe

------------------

## Quelques étapes pour le déploiement de site en local et en ligne.

__Comment télécharger un projet git en local__

La commande __git clone__ est utilisée pour cloner un repository git distant dans un répertoire local.

`$ git clone` et puis coller le lien HTTPS ou SSH comme ceci (git@github.com:awadalsheekh/charles.git:monProjet)

Cela va créer un dossier appelé *monProjet* dans lequel sera téléchargé le contenu de repositry. 

## Pour le déploiement en ligne nous allons utiliser Heroku

1. Création un compte sur __heroku__ et puis suivez les instructions officielles d'heroku.

2. Via le terminal de *VSCode* ou outre nous allons tappyer les commandes suivante:

`$ git init` nous permet d'initialiser le dépôt git, cette commande utilisée pour créer un nouveau dépôt git.

`$ git add .` cette commande utilisée pour ajouter des fichiers à l'index.

`$ git commit -m` cette commande permet de valider les modifications apportées.

__Après ces étapes nous avons besoin de se connecter à notre serveur distant pour envoyer notre projet en ligne__ `$ heroku login` et puis valider *en appuyons sur n'importe quelle touche pour ouvrir le navigateur et vous connecter*.

Cette commande permet de se connecter au serveur d'heroku.

Après avoir se connecter nous allons créer notre application avec la commande suivante:

`$ heroku create nom-de-projet` 

Et puis la commande `$ git push heroku master` pour envoyer notre projet en ligne sur le serveur __d'heroku.__

*Et voilà le déploiement en ligne est terminé.*

