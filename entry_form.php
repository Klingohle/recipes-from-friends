<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Form</title>
</head>
<body>
    <form action='save_entry.php' method='post'>
        <div>
            <label for='title'>Rezeptname</label>
            <input type='text' name='title' id='title' required>
        </div>
        <div>
            <label for='category'>Zu welcher Kategorie gehört das Rezept? Bitte eine auswählen</label><br>
                Vorspeise <input type="radio" name="category" id="category-starter" value="starter" />
                Hauptgericht <input type="radio" name="category" id="category-main" value="main" checked="checked" />
                Nachtisch<input type="radio" name="category" id="category-dessert" value="dessert" />
                Salat <input type="radio" name="category" id="category-salad" value="salad" />
                Suppe <input type="radio" name="category" id="category-soup" value="soup" />
                Brot <input type="radio" name="category" id="category-breads" value="breads" />
        </div>
        <div>
            <label for='ingredients'>Zutaten mit Mengenangaben</label>
            <textarea name='ingredients' id='ingredients' required></textarea>
        </div>
        <div>
            <label for='description'>Rezeptbeschreibung</label>
            <textarea name='description' id='description' required></textarea>
        </div>
        <div>
            <label for='drink'>Getränkeempfehlung - optional</label>
            <input type='text' name='drink' id='drink' >
        </div>
        <div>
            <label for='tips'>Tipps & Tricks - optional</label>
            <input type='tips' name='tips' id='tips'>
        </div>
        <div>
            <label for='author'>Dein Name</label>
            <input type='author' name='author' id='author' required>
        </div>
        <div>
            <input type='submit' value='Senden'>
        </div>
    </form>
</body>
</html>