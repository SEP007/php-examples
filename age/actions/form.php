<form id="age-calulation-form" action="index.php?action=calculate" method="post">
    <fieldset>
      <legend>Deine Daten</legend>

      <div>
        <label for="name">Name:</label>
        <input name="name" type=""
            placeholder="Dein Name!" required="" autofocus="" />
      </div>

      <div>
        <label for="Geburtsjahr">Geburtsjahr:</label>
            <input name="age" type="string"
               placeholder="Dein Geburstag" required="" />
      </div>

      <div>
        <input name="calulate" type="submit" value="Berechne mein Alter!" />
      </div>
    </fieldset>
</form>