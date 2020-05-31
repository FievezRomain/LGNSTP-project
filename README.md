# Projet programmation web M1 MIAGE 2019-2020

# Cahier des charges

Le but de ce projet est de réaliser, en binôme ou en trinôme, le site web du mastère apprentissage.   
Ce site web sera l’occasion de présenter cette filière aux internautes et aux étudiants souhaitant faire un mastère.  
Pour ce faire, vous devez utiliser le html et css pour l’ergonomie de vos pages, le javascript et le php pour le traitement et contrôle des données et le mysql pour la création et la manipulation des bases de données.   
Vous êtes demandé de créer plusieurs pages web : 
1. Un onglet Accueil qui mène à une page où l’internaute trouve une présentation du mastère, les caractéristiques, les embauches et les avantages tout au long de ce parcours. Ainsi qu’un lien vers le site de Dauphine. 
2. Un onglet Matière qui mène à une page où l’internaute a la possibilité de consulter la table des différentes matières enseignées au cours de ce parcours. Pour chaque matière vous devez mettre une petite description de son contenu et le nombre d’heure. 
3. Un onglet Etudiants qui mène à une page où l’internaute peut retrouver la liste des étudiants inscrits ainsi que la spécialité de leur stage. La liste des étudiants est stockée dans une base de données MasterApp, sous la table Etudiant, la spécialité est stockée dans une table Stage.   
Si l’internaute souhaite avoir plus d’information sur un étudiant, en cliquant sur le nom de cet étudiant, il sera envoyé à une nouvelle page, celle de l’étudiant.   
Donc chaque étudiant doit avoir une page web personnalisée. Vous n’êtes pas demandé de faire des pages web pour tous les étudiants mais chacun doit faire sa propre page web.   
On doit retrouver sur cette page, une photo, les informations personnelles et professionnelles ainsi qu’un lien vers la société où il fait son stage d’apprentissage.   
Un cv en format PDF doit être ajouté et téléchargeable par l’internaute. 
4. Un onglet Candidater qui mène à une page où l’internaute doit remplir un formulaire 
afin de candidater au mastère. Le formulaire doit réunir toutes les informations du candidat ; Nom, prénom, adresse, date de naissance, parcours (en sélectionnant dans une liste déroulante son parcours), 
note en mathématique, note en informatique, note en anglais, la moyenne générale et une lettre de motivation. La lettre de motivation peut être écrite directement dans une zone de texte ou peut être télécharger à partir de son poste de travail.   
Pour valider les informations : 
    - L’âge de l’étudiant doit être entre 20 et 35
    - Le nom et prénom doivent être composés que par des lettres et de longueur entre 3 et 20
    - La note de mathématique doit être supérieure à 10 
    - La note d’informatique doit être supérieure à 15
    - La note en anglais doit être supérieure à 12
    - La moyenne générale doit être supérieure à 14
    - Tous les champs doivent être saisis  

Une fois tous les champs saisis correctement, une nouvelle page s’ouvre avec toutes les informations saisies, suivies de deux boutons Retour ou Sauvegarde.  Le bouton Retour permet de retourner au formulaire. Le bouton Sauvegarde permet de vérifier l’existence de ce candidat. 
- Si le candidat n’existe pas dans la base, il doit être ajouter avec un statut Candidat et le message ‘Candidature en cours de validation’ doit être affiché. 
- Si le candidat est déjà dans la base : 
- Si son statut est Inscrit un message d’erreur doit être affiché. 
- Si son statut est Candidat. 
    Un tableau s’affiche avec les anciennes informations existantes dans la base de données à gauche et les nouvelles informations saisies à droite. Trois boutons permettant soit d’annuler, soit de mettre à jour les informations, soit de supprimer la candidature.   
    Un message confirmera le choix de l’internaute.   
    La base de données MasterApp est composée de deux tables Etudiant et Stage. La table Etudiant contient les informations des étudiants : ID, Nom, prénom, adresse, date de naissance, parcours, les notes de mathématiques, informatique et anglais et la moyenne.   
    La table Stage contient plusieurs spécialités : IDSt, domaine. Un étudiant doit avoir une seule spécialité mais une spécialité peut être affectée à plusieurs étudiants.   

# L'équipe
L'équipe qui développera ce projet est composée de :  
- Yakine BENDIB
- Louis LEDOUX
- Romain FIEVEZ

# Les technologies

Pour réaliser ce projet, les langages JavaScript, SQL, HTML et CSS sont imposés. Nous allons donc utiliser le système de gestion de base de données MYSQL ainsi que la librairie Materialize pour le CSS du projet.  

# Deadline

Ce projet doit être terminé pour le 03/06/2020. Pour permettre cela, la gestion du projet sera réalisée de manière Agile avec la mise en place de Sprint.  
Malgré les conditions imposées par la situation de crise sanitaire liée au covid-19, l'équipe réalisera des daily meeting afin de veiller sur la productivité et le moral du groupe.
