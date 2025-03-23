echo '# 🏥 Health Care – Laravel & MongoDB

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

### 1️⃣ Cloner le projet  
\`\`\`sh
git clone https://github.com/votre-repo/health-care.git
cd health-care
\`\`\`

### 2️⃣ Installer les dépendances  
\`\`\`sh
composer install
npm install && npm run dev
\`\`\`

### 3️⃣ Configurer l’environnement  
Copier le fichier \`.env.example\` et le renommer en \`.env\` :  
\`\`\`sh
cp .env.example .env
\`\`\`
Dans \`.env\`, configurer la connexion MongoDB :  
\`\`\`env
DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=healthcare
DB_USERNAME=
DB_PASSWORD=
\`\`\`

### 4️⃣ Générer la clé de l'application  
\`\`\`sh
php artisan key:generate
\`\`\`

### 5️⃣ Démarrer le serveur  
\`\`\`sh
php artisan serve
\`\`\`
L'application sera accessible à **http://127.0.0.1:8000**  

---

## 📂 Structure du Projet  
\`\`\`
health-care/
│── app/
│   ├── Models/
│   │   ├── Patient.php   # Modèle Patient pour MongoDB
│   ├── Http/Controllers/
│   │   ├── PatientController.php   # Contrôleur pour gérer les patients
│── resources/views/patients/
│   ├── index.blade.php   # Interface avec tableau des patients
│── routes/
│   ├── web.php   # Routes pour CRUD patients
│── database/
│── public/
│── .env
│── README.md
\`\`\`

---

## 📌 Routes API  
| Méthode  | URL              | Action                 |
|----------|-----------------|------------------------|
| \`GET\`    | \`/patients\`      | Afficher tous les patients |
| \`POST\`   | \`/patients\`      | Ajouter un patient    |
| \`PUT\`    | \`/patients/{id}\` | Modifier un patient   |
| \`DELETE\` | \`/patients/{id}\` | Supprimer un patient  |

---

## 🎨 Technologies utilisées  
- **Laravel** – Framework backend  
- **MongoDB** – Base de données NoSQL  
- **TailwindCSS** – Design et mise en page  
- **Alpine.js** – Gestion des modals  

---

## 📌 Auteur  
👩‍💻 **Bendjeddou Nourhane** – *Frontend Developer*  
🔗 [LinkedIn](https://www.linkedin.com/in/votre-profil)  

---

💡 **Ce projet est open-source !** N’hésitez pas à l’améliorer et à proposer des idées. 🚀  
' > README.md
