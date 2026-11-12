# Session 08 - Défi

La route posts.tag utilise {tag:slug} : oui
La page d'un tag n'affiche ni brouillon ni article d'un autre tag : oui
Les tags des cartes sont des liens : oui
L'accueil n'affiche que les tags qui ont au moins un article publié : oui
Les trois nouveaux tests passent et php artisan test est vert : oui

Pourquoi filtrer les tags vides après get() plutôt que d'afficher (0) ?
Parce que withCount renvoie tous les tags, même ceux dont posts_count vaut 0 (ceux qui n'ont que des brouillons). Un tag « Nom (0) » mène à une page vide et n'apporte rien au visiteur. On filtre donc la collection avec filter() après get() pour ne garder que les tags qui ont au moins un article publié.

Combien de requêtes ajoute la liste des tags populaires, et pourquoi pas une par tag ?
Une seule requête. withCount ajoute un sous-select qui compte les articles publiés de chaque tag dans le même SELECT, et on lit ensuite posts_count sans requête supplémentaire. Une requête par tag serait un problème N+1 : avec N tags, on ferait N+1 requêtes, et le projet l'interdit d'ailleurs avec LazyLoadingViolationException.

Pourquoi aucune migration, aucun modèle et aucun test n'a changé ?
Eloquent et le constructeur de schéma traduisent les mêmes instructions pour chaque pilote : seule la connexion change dans .env. Cela marche parce que le code est portable : aucune requête SQL brute, des booléens comparés à true ou false, un ordre explicite sur chaque liste et des slugs comparés exactement.