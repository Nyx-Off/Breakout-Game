
# Breakout Game

![Game Screenshot](https://github.com/Nyx-Off/Breakout-Game/blob/main/screenshot.png)

## 🎮 Introduction
**Breakout Game** est une réinvention moderne du classique jeu d'arcade Breakout, développé en utilisant HTML, CSS, JavaScript, et PHP pour une gestion robuste des scores. Le joueur contrôle une raquette pour faire rebondir une balle et détruire des briques, tout en essayant d'obtenir le meilleur score possible.

## 🚀 Fonctionnalités
- **Interface Utilisateur Intuitive** : Jeu fluide et réactif directement dans le navigateur.
- **Sauvegarde et Récupération des Scores** : Les scores sont enregistrés dans une base de données via un backend PHP.
- **Responsive Design** : Jouable sur différents appareils, du bureau aux mobiles.
- **Difficulté Progressive** : Le jeu devient plus complexe à mesure que vous avancez.

## 🛠️ Installation

### Prérequis
- Serveur web avec PHP (Apache, Nginx)
- Base de données MySQL

### Étapes
1. **Cloner le dépôt** :
   ```bash
   git clone https://github.com/Nyx-Off/Breakout-Game.git
   cd Breakout-Game
   ```
2. **Configurer la base de données** :
   - Créez une base de données MySQL.
   - Exécutez la commande SQL suivante pour créer la table des scores :
   ```sql
   CREATE TABLE scores (
       id INT AUTO_INCREMENT PRIMARY KEY,
       player_name VARCHAR(50),
       score INT
   );
   ```
3. **Configurer les fichiers PHP** :
   - Modifiez `get_scores.php` et `save_score.php` pour se connecter à votre base de données.

4. **Lancer le jeu** :
   - Ouvrez `game.html` dans votre navigateur.

## 🕹️ Utilisation
- **Jouer au jeu** : Contrôlez la raquette avec votre souris ou clavier pour détruire toutes les briques et obtenir le score le plus élevé.
- **Scores** : Les scores sont automatiquement sauvegardés après chaque partie et peuvent être consultés à tout moment.

## 📁 Structure du Projet
- `game.html` : Structure HTML et logique de jeu en JavaScript.
- `style.css` : Styles CSS pour une interface moderne.
- `get_scores.php` : Récupération des scores depuis la base de données.
- `save_score.php` : Sauvegarde des scores dans la base de données.
- `db_connection.php` : Fichier de connexion à la base de données (à créer).

## 🧑‍💻 Contribuer
Les contributions sont les bienvenues ! Veuillez soumettre une pull request avec des explications détaillées des modifications.

## 📝 Licence
Ce projet est sous licence MIT. Consultez le fichier [LICENSE](LICENSE) pour plus d'informations.

## ✨ Auteurs
- **Nyx-Off** - Développeur principal

---

*Ce projet a été créé pour l'apprentissage et le plaisir. Profitez-en et n'hésitez pas à partager vos améliorations !*

