<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h1>Stem</h1>
  <form action="score.php" method="POST">
    <div>
      <label for="vraag_1">Welk woord irriteert je het meest?</label>
      <select name="vraag_1" id="vraag_1" required>
        <!-- Default empty option -->
        <option value="" disabled selected>Selecteer een optie</option>
        <option value="-5">Windmolens</option>
        <option value="0">Kerncentrales</option>
        <option value="3">Olie & Benzine</option>
        <option value="-2">Stikstof</option>
      </select>
    </div>
    <div>
      <label for="vraag_2">Ben je het hiermee eens?</label>
      <!-- 
        5 radio buttons from totally agree to totally disagree
       -->
      <div>
        <input type="radio" name="vraag_2" value="5" />
        <label for="vraag_2_1">Helemaal mee eens</label>
      </div>
      <div>
        <input type="radio" name="vraag_2" value="3" />
        <label for="vraag_2_1">Beetje eens</label>
      </div>
      <div>
        <input type="radio" name="vraag_2" value="-2" />
        <label for="vraag_2_1">Beetje oneens</label>
      </div>
      <div>
        <input type="radio" name="vraag_2" value="-5" />
        <label for="vraag_2_1">Helemaal oneens</label>
      </div>
    </div>
    <input type="submit" value="Submit" />
  </form>
</body>

</html>