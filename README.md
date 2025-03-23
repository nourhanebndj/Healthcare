# 🏥 Health Care – Laravel & MongoDB

Une application web pour gérer les patients, développée avec **Laravel** et **MongoDB**.

---

## 📌 Fonctionnalités  
✅ Affichage de la liste des patients  
✅ Ajout d'un patient via un formulaire  
✅ Modification des informations d'un patient  
✅ Suppression d'un patient  
✅ Interface moderne avec **TailwindCSS** et **Alpine.js**  

---

## 🚀 Installation et Configuration  

### 1️⃣ Prérequis  
Avant de commencer, assurez-vous d’avoir installé :  
- **PHP (>=8.0)**  
- **Composer**  
- **Node.js & npm**  
- **MongoDB**  

### 2️⃣ Cloner le projet  
```sh
git clone https://github.com/votre-repo/health-care.git
cd health-care

3️⃣ Installer les dépendances

Dans le dossier du projet, exécutez les commandes suivantes :
➤ Installation des dépendances PHP avec Composer

composer install

Cela installera toutes les bibliothèques nécessaires à Laravel.
➤ Installation des dépendances JavaScript et CSS avec npm

npm install

Cela installera TailwindCSS, Alpine.js, et d'autres dépendances front-end.
➤ Compiler les assets (CSS et JS)

npm run dev

Cela générera les fichiers CSS et JavaScript pour le projet.
4️⃣ Configurer l’environnement

Copier le fichier .env.example et le renommer en .env :

cp .env.example .env

Dans .env, configurer la connexion MongoDB :

DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=healthcare
DB_USERNAME=
DB_PASSWORD=

5️⃣ Générer la clé de l'application

php artisan key:generate

6️⃣ Lancer le serveur MongoDB

Assurez-vous que MongoDB est bien en cours d’exécution :

mongod

7️⃣ Démarrer le serveur Laravel

php artisan serve

L'application sera accessible à http://127.0.0.1:8000
📌 Auteur

👩‍💻 Bendjeddou Nourhane – Frontend Developer
🔗 LinkedIn
