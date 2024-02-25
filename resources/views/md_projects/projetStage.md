---
title: Projet de stage à Delfingen
file_name: projetStage
img: /assets/delfingen.jpg
img_alt: image stage
description: |
  J'ai ajouté de nouvelles vues et j'ai aussi automatisé l'envoi de messages Pub/Sub.
tags:
  - Java Web
  - Pub/Sub
  - JRXML
  - Postgres
---

# Présentation du projet

Je devais ajouter l'ajout et la manipulation des codes GMAO sur l'application principale, sur chaque machines. Une fois avoir codé la possibilité d'affecter des codes GMAO sur les machines, j'ai pu travailler sur l'autmatisation des envois Pub/Sub en fonction de l'état des machines.

# Fonctionnalités

Je devais ajouter une vue dans chaque affichage des machines qui permettait de consulter et d'affecter des codes GMAO aux machines, j'avais besoin de cette fonctionnalité pour la suite. En plus de cette vue, dans le menu principal j'ai dû ajouter un lien/alerte, qui affichait le nombre de machines auquelles n'était assigné aucun code GMAO. Ce lien menait à la vue qui affichait la liste des machines que je filtrait dans le traitement d'affichage de la vue.
Une fois ces fonctionnalitées crées, j'ai pu travailler sur l'application mobile avec l'état des machines et les messages Pub/Sub. J'ai d'abord créé un message quand une machine était mise en panne en production pour ensuite envoyer une alerte à la maintenance. Après avoir fais la méthode de l'envoi de ce message, j'ai créé une méthode pour toutes les fins d'état de la machine, pour une autre application. Donc quand une machine était en état SETUP et passait à l'état IN PROGRESS, un message contenant l'ancien état de la machine s'envoyait, avec le temps qu'elle était restée dans cet état et d'autres informations.

# Points positifs de ce projet

Ce projet m'a permis d'apprendre le langage Java EE, il m'a aussi apporté des connaissances à propos des messageries asynchrones tel que Pub/Sub ou Kafka. Il m'a aussi apporté beaucoup d'autres compétences dans le développement, la gestion de projet et m'a fait connaitre le monde de l'industrie. Après ce stage, j'ai pu continuer deux mois en tant qu'intérimaire, ce qui m'a fait encore plus progressé car j'ai pu intervenir sur une plus grande partie des applications et participer à un plus gros projet. En effet, mon projet de stage était rattaché au projet principal et lors de mon intérim, j'ai agis au sein du projet principal.
