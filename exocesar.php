<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>César Cipher</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 50px;
            background-color: #f8f8f8;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
            display: inline-block;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result-container {
            margin-top: 20px;
        }

        h3 {
            color: #333;
        }

        p {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>

    <h2>César Cipher</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="expression">Expression :</label>
        <input type="text" name="expression" required>

        <label for="decalage">Décalage :</label>
        <input type="number" name="decalage" required>

        <label for="action">Action :</label>
        <select name="action" required>
            <option value="chiffrer">Chiffrer</option>
            <option value="dechiffrer">Déchiffrer</option>
        </select>

        <input type="submit" value="Appliquer">
    </form>

    <?php
    // Affiche les résultats s'il y en a
    if (isset($resultat)) {
        echo "<div class='result-container'>";
        echo "<h3>Résultat :</h3>";
        echo "<p>$resultat</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
