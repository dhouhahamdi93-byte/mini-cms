
# Session 11 - Défi

## Vérifications

- [x] `/mes-articles` affiche uniquement les articles de l'utilisateur connecté.
- [x] Les brouillons de l'utilisateur sont également affichés.
- [x] Les articles sont triés du plus récent au plus ancien.
- [x] La pagination affiche 4 articles par page.
- [x] Un visiteur non connecté est redirigé vers la page de connexion.
- [x] Le lien « Mes articles » apparaît uniquement lorsque l'utilisateur est connecté.
- [x] La case « Se souvenir de moi » est disponible sur la page de connexion.
- [x] Les deux nouveaux tests passent.

## Questions

### 1. Pourquoi partir de `$request->user()->posts()` plutôt que de `Post::where('user_id', $request->user()->id)` ?

La relation `posts()` permet de récupérer directement les articles appartenant à l'utilisateur connecté. Elle rend le code plus simple, lisible et maintenable.

### 2. Pourquoi la case `remember` ne doit-elle pas être dans le tableau passé à `Auth::attempt()` ?

Parce que Laravel utilise les éléments du tableau comme des identifiants de connexion à vérifier dans la base de données. `remember` est une option de connexion persistante et doit être passé comme deuxième argument de `Auth::attempt()`.

## Tests

Commande exécutée :

`php artisan test --filter=AuthorizationTest`

Résultat : 10 tests réussis.
