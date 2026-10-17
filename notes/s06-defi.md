# Session 06 - Défi : publier et dépublier

La route posts.publication apparaît dans route:list avec le verbe PATCH : oui
Le bouton affiche « Publier » sur un brouillon et « Dépublier » sur un article publié : oui
published_at est rempli à la publication et vidé à la dépublication : oui
Le nouveau test passe et php artisan test est vert : oui

Pourquoi PATCH et pas PUT ni GET pour ce bouton ?

Le bouton ne modifie qu'un seul champ de l'article (is_published, avec published_at
qui suit). PATCH est le verbe prévu pour une modification partielle, alors que PUT
sert à remplacer la ressource entière : il faudrait renvoyer tous les champs
(titre, slug, extrait, contenu...) juste pour changer l'état de publication.

GET ne convient pas, car c'est un verbe "sûr" : il ne doit jamais modifier les
données. Un lien GET peut être ouvert par un robot d'indexation, préchargé par le
navigateur ou rejoué par erreur, et il publierait ou dépublierait des articles sans
action volontaire. De plus, un formulaire PATCH est protégé par le jeton CSRF
(@csrf), ce qui n'est pas le cas d'un simple lien.