# Module Annuaire
Module Annuaire pour Drupal 9.4.7

# Fonctionnement du module
- Placé dans un bloc, qui peut être integré dans n’importe quelle page
- Possède son propre template en Bootstrap, doit donc être integré dans un thème Bootstrap
- Le bloc est le contôleur, qui fait appel au service
- Le service utilise le composant ldap de Symfony et retourne le résultat des requêtes
- Ce résultat est ensuite affiché dans le template

# Aperçu du module actuel
![Aperçu du module](<local/ecran4.png>)
