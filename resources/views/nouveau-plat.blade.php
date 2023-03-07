<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/plats">
    <div>
        <label for="nom">Nom du plat :</label>
        <input type="text" name="nom" id="nom">
    </div>
    <div>
        <label for="ingredients">Ingrédients nécessaires :</label>
        <textarea name="ingredients" id="ingredients"></textarea>
    </div>
    <div>
        <label for="instructions">Instructions de préparation :</label>
        <textarea name="instructions" id="instructions"></textarea>
    </div>
    <div>
        <label for="temps_cuisson">Temps de cuisson :</label>
        <input type="text" name="temps_cuisson" id="temps_cuisson">
    </div>
    <div>
        <label for="niveau_difficulte">Niveau de difficulté :</label>
        <select name="niveau_difficulte" id="niveau_difficulte">
            <option value="facile">Facile</option>
            <option value="moyen">Moyen</option>
            <option value="difficile">Difficile</option>
        </select>
    </div>
    <div>
        <label for="cout">Coût :</label>
        <input type="text" name="cout" id="cout">
    </div>
    <div>
        <label for="nombre_portions">Nombre de portions :</label>
        <input type="text" name="nombre_portions" id="nombre_portions">
    </div>
    <div>
        <button type="submit">Créer le plat</button>
    </div>
</form>

</body>
</html>