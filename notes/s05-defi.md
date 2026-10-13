latestPosts contient au plus 3 articles : oui
Seuls les articles publiés sont transmis à la vue : oui
home.blade.php utilise x-post-card et @forelse : oui
Le nouveau test passe et php artisan test est vert : oui

Pourquoi get() et pas paginate(3) sur la page d'accueil ?
Parce que l'accueil montre seulement les 3 derniers articles, sans pages. paginate() sert pour une liste complète avec navigation entre pages, comme /posts.