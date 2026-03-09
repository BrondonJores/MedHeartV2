# MedHeartV2

Application Laravel orientee sante, centree actuellement sur un flux de recuperation de compte utilisateur (principalement profil `patient`) avec interface web Blade et notifications SweetAlert.

## Sommaire

1. [Contexte](#contexte)
2. [Fonctionnalites actuelles](#fonctionnalites-actuelles)
3. [Stack technique](#stack-technique)
4. [Structure du projet](#structure-du-projet)
5. [Installation](#installation)
6. [Execution en local](#execution-en-local)
7. [Routes disponibles](#routes-disponibles)
8. [Modele de donnees](#modele-de-donnees)
9. [Tests](#tests)
10. [Points d-attention](#points-d-attention)
11. [Pistes d-amelioration](#pistes-d-amelioration)

## Contexte

`MedHeartV2` est une base Laravel 12 adaptée a un contexte hospitalier. Le code present cible surtout:

- la page de connexion (UI),
- la page de recuperation d identifiants,
- la verification de l existence d un patient via son matricule,
- l affichage de notifications utilisateur.

## Fonctionnalites actuelles

- Interface de connexion (`/`) avec selection de role.
- Formulaire de recuperation (`/recuperation`) avec validation serveur.
- Recherche de patient par `matricule`.
- Generation utilitaire de:
  - matricule (`Generator::genererMatricule`),
  - mot de passe (`Generator::genererPassword`),
  - login (`Generator::genererLogin`).
- Affichage des retours utilisateur via SweetAlert (`AlertHelper` + composants Blade).

## Stack technique

- Backend: PHP `^8.2`, Laravel `^12.0`
- Frontend: Blade, Vite, Tailwind CSS `^4`, JS natif
- UI feedback: SweetAlert2 (`sweetalert2`, `realrashid/sweet-alert`)
- Base de donnees: SQLite par defaut dans `.env.example` (MySQL possible)
- Tests: PHPUnit (tests de base Laravel)

## Structure du projet

```text
app/
  Helpers/
    AlertHelper.php
    Generator.php
  Http/
    Controllers/Recuperation_compte_controller.php
    Requests/RecuperationcompteRequest.php
  Models/
    Patients.php
    Medecins.php
    User.php
database/
  migrations/
resources/
  views/
    login.blade.php
    recuperation_compte.blade.php
    components/
routes/
  web.php
```

## Installation

### Prerequis

- PHP 8.2+
- Composer
- Node.js + npm
- Une base SQLite (ou MySQL si vous ajustez `.env`)

### Etapes

```bash
composer install
npm install
copy .env.example .env
php artisan key:generate
```

Si vous utilisez SQLite:

```bash
type nul > database\database.sqlite
```

Puis:

```bash
php artisan migrate
```

## Execution en local

Option 1 (tout en un via Composer):

```bash
composer run dev
```

Option 2 (separe):

```bash
php artisan serve
npm run dev
```

Application web: `http://127.0.0.1:8000`

## Routes disponibles

Definies dans `routes/web.php`:

- `GET /` -> vue `login`
- `GET /recuperation` -> formulaire de recuperation
- `POST /recuperation` -> traitement recuperation
- `GET /test` -> vue de test
- route resource `recuperation_compte_controller` (scaffold Laravel)

## Modele de donnees

Tables metier detectees:

- `patients`
  - `matricule` unique
  - `nom`, `prenom`, `age`, `sexe`, `adresse`, `telephone`, `email`
- `medecins`
  - `matricule` unique
  - champs identite + `id_specialite`, `id_service`
- `users` (Laravel standard)
  - `name`, `email`, `password`, etc.

## Tests

Commande:

```bash
php artisan test
```

Les tests actuels sont les tests d exemple Laravel (unit + feature de base).

## Points d-attention

Analyse du code actuel:

- Le flux principal est present, mais le `Recuperation_compte_controller` contient du code legacy/incomplet (variables non definies comme `$row3`, `$statement4`, fonctions non declarees).
- Le formulaire de connexion (`login.blade.php`) poste vers un chemin legacy (`/controllers/loginController.php`) qui ne fait pas partie des routes Laravel actuelles.
- Plusieurs textes FR affichent des problemes d encodage (ex: caracteres accentues mal interpretes).
- Des incoherences mineures existent dans les modeles (`matricle` vs `matricule`) et dans une regle de validation (`' max: 10'` avec espace).

Le README documente donc l etat reel du projet, sans masquer les points techniques a corriger.

## Pistes d-amelioration

1. Finaliser le service de creation/recreation de compte dans un service Laravel dedie.
2. Uniformiser les noms de colonnes/modeles (`matricule`) et corriger les regles de validation.
3. Remplacer les traces legacy SQL par Eloquent + transactions.
4. Corriger l encodage UTF-8 des vues/routes.
5. Ajouter des tests metier sur la recuperation de compte (cas nominal + erreurs).
