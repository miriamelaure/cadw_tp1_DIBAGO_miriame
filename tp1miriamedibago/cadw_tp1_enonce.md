
# ![Logo de Laravel](https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg)Cadriciel Web 

# Travail pratique 1 (15%)

L’objectif de ce travail pratique est de créer un petit site web permettant de consulter une liste de films ainsi que les détails de chaque film. Les informations seront récupérées dans la BDD en utilisant les outils de Laravel.

- Ce travail peut être réalisé individuellement ou en équipe de 3 personnes maximum.

- Vous devrez créer un projet Laravel frais et dispo.

- Les informations à ajouter à la BDD sont présentes dans le fichier **films.csv**. 

- Un effort _minimal_ devra être apporter à la présentation visuelle pour obtenir le point à cet effet.

<br>

## Liste des routes et prérequis 
| Route | Description |
| --- | --- |
| / | Affiche la liste des **films**. Uniquement le « title » est affiché sous la forme d'un lien menant à la page des détails du film (route : /films/{id} ).
| /films/{id} | <ul><li>Affiche l’**ensemble des informations textuelles** du film correspondant à l’ID reçu dans la route.</li><li>Bouton de retour vers la **page d’accueil.**</li></ul>

La **BDD** devra être populée à partir du fichier CSV fourni. Une fois la structure de la table créée, vous pourrez importer le fichier CSV (en sautant la première ligne!) pour la populer: attention aux noms de colonnes à utiliser!

L'utilisation de _layout_ et _components_ dans les vues aura un impact sur les points liés à l'organisation et qualité du code.

<br>

## Exigences pour la remise

- Pour la remise, faites un _zip_ du dossier de votre projet Laravel complet nommé : **cadw_tp1_NOM_prenom_[NOM_prenom…].zip** 

- Vous devrez exporter votre BDD (table vide) et l'inclure dans l'archive.
	- La base de données DOIT être nommée: **cadw_tp1_[vos_initiales]**
	- Lors de l'importation, la création de la base de données DOIT se faire automatiquement (option CREATE DATABASE sélectionnée lors de l'exportation)

<br>

## Bonus
| Bonus | Description
| :---: | --- |
| +0.5 | Le fichier **films.csv** contient des URLs valides pointant vers des affiches de films (poster_path ou backdrop_path). Affichez ces images sur le site (dans la page appropriée). |
|  +1 | Ajoutez une route **/films/chercher** : cette page, similaire à la liste complète des films, affiche la liste de titres de films; toutefois, uniquement les titres contenant le texte passé en paramètre GET dans l’adresse sont affichés dans la vue. Bouton de retour à l'accueil |

<br>

## Critères d'évaluation

| Critère | Points |
| :--- | :---: |
| Structure et données de la BDD | 1 |
| **/films** <br>Affichage de la liste des films dans une vue | 3 |
| **/film/{id}**<br>Passage de paramètres et affichage des détails d'un film dans une vue| 5 |
| Nomenclature et conventions - PHP et Laravel (1)<br>Remise et organisation du projet (1)<br>Qualité du code et documentation (3) | 5 |
| Style visuel (CSS, SCSS, Bootstrap, Tailwind, etc.) | 1 |
| **BONUS** : utilisation et intégration des affiches de films| 0.5 |
| **BONUS** : /films/chercher?titre=| 1 |
| **Total** | **15** (+1.5) | 



## Mentions supplémentaires

- Si vous travaillez en équipe, tous les membres doivent s’impliquer à part égale : contactez-moi dans le cas de problématique.

- Vous pouvez utiliser [Bootstrap](https://getbootstrap.com/) ou [Tailwind](https://tailwindcss.com/docs/installation/play-cdn) dans le projet.

- Javascript ne peut pas être utilisé pour remplir les exigences demandées.

## Étapes de développement suggérées
<ol>
	<li>Optionnel : conception des vues de façon statique (avec données temporaires)</li>
	<li>Conception de la table de la BDD et ajout des données</li>
	<li>Intégration des routes demandées et contrôleur(s) approprié(s)</li>		
	<li>Récupération des données (à l’aide d'un modèle ou du Query Builder) et passage aux vues</li>
	<li>Dynamisation des vues avec les données reçues: l'utilisation d'un <em>layout</em> et de <em>components</em> est fortement encouragée</li>
	<li>Ajout du style visuel</li>
</ol>
