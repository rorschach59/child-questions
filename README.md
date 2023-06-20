<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a>

## Stack technique

- [Laravel](https://laravel.com/)
- [Laravel Livewire](https://laravel-livewire.com/)
- [Vite](https://vitejs.dev/)
- [TailwindCSS](https://tailwindcss.com/)
- [SQLite](https://www.sqlite.org/index.html)

## Le projet

Je souhaitais un projet pour tester Laravel Livewire.
Les enfants posent beaucoup de questions, pour lesquelles il n'est pas toujours evident de trouver des réponses.
L'idée est donc de répertorier les questions et réponses possibles.

## Ma version en production
[A venir]

## Pour lancer le projet en local

```bash
git clone git@github.com:rorschach59/child-questions.git
cd child-questions
cp .env.example .env
```

Modifie les infos de connexion à la base de données dans le .env, de mon côté j'ai choisi SQLite par simplicité.
Si c'est aussi ton cas, suis ces instructions :

Supprime les valeurs suivantes :

```bash
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Modifie :

```bash
DB_CONNECTION=sqlite
```

Termine l'installation avec les commandes suivantes :

```bash
touch database/database.sqlite

composer install
npm install

php artisan key:generate
php artisan migrate
```

Lance le projet :

```bash
npm run dev
php artisan serve
Go to http://127.0.0.1:8000
```

