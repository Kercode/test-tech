# Test technique

Notre équipe de football vient de finir sa *Saison*, le *Score* de chaque match ressemble à ceci `hero:adversaire`.
Le *Score* est enregistré dans un tableau:

Example: ["1:2", "2:3", ...]

Afin de remporter ce challenge, vous allez devoir faire un script qui permet d'utiliser le fichier `data.json` pour générer un fichier `output.json`comme dans l'example.

## Règles

- [ ] Si le score de hero > celui d'adversaire - +3 points
- [ ] Si le score de hero = celui d'adversaire - +1 points
- [ ] Si le score de hero < celui d'adversaire - 0 points

- [ ] Une saison comporte forcément 10 matches
- [ ] 0 <= score hero <= 4
- [ ] 0 <= score adversaire <= 4

Votre code devra être impérativement couvert par des tests unitaires.

Bonne chance