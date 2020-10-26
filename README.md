# Model View Controller (MVC)

Ce dépôt à été créer pour mes auditeurs qui me demandaient comment mettre en place une ossature MVC. 

Historiquement, PHP est un langage _glue_, il peut être intégré avec le langage de balisage [HTML](https://fr.wikibooks.org/wiki/Le_langage_HTML "Le langage HTML"). L'avantage est cette simplicité de mise-en-oeuvre mais l'inconvénient est le mélange entre le traitement et l'affichage. Pour produire une application web claire et facile à entretenir, on peut séparer les différentes parties de l'application selon l'architecture [Modèle-Vue-Contrôleur](https://fr.wikipedia.org/wiki/Mod%C3%A8le-Vue-Contr%C3%B4leur "w:Modèle-Vue-Contrôleur") (ou MVC).
 1.  Modélisation (Modèle : Partie métier spécifique à l'application)
2.  Visualisation (Vue : Partie visuelle de l'application)
3.  Contrôles (Contrôleur : Partie de gestion des événements de l'application)

De cette façon on peut implémenter son application en sous composantes ce qui augmente légèrement l'analyse de l'application mais fera gagner beaucoup de temps de développement par la suite. Cette architecture est déjà couramment employée dans les applications locales et les applications web l'utilise de plus en plus.


## Préréquis

1. Bonne notion en algorithmique
2. bonne connaissance du PHP
3. Notion de la POO 
4. Notion de MySQL

### Logiciel

      SERVEUR LOCAL
Windows : Laragon(Conseillé) / WAMP
MAC: MAMP
Linux: LAMP

      Editeur
VSCode (utilisé ici), PHPStorm, Sublime Text, notePad++, Atom etc...


### Mise en Place du Fichier

Cloner ou Télécharger le dépôt par la suite créer dans votre base de données une nouvelle base du nom de "MVC", créez-y une table du nom  d' "articles" avec pour propriétés id, user_id, titre, slug, contenu, created_at, updated_at. Ou copier coller ce texte dans l'éditeur PHPMySQL de votre serveur local.

```sql
-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `users_id` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `users_id`, `titre`, `slug`, `contenu`, `created_at`, `updated_at`) VALUES
(1, 'vincent', 'titre_flash1', 'azerty', 'azertyuiop qsdfghjklm wxcvbn', '2019-11-01', '2019-11-02'),
(2, 'Anim ', 'Sunt ', 'ytreza', 'azertyuiop qsdfghjklm wxcvbn', '2019-11-03', '2019-11-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

```

Et voilà c'est bon vous pouvez commencer à travailler 👨🏾‍💻🍺.


![enter image description here](https://images.unsplash.com/photo-1572845213224-37f9327988bd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1700&q=80)
