<form id="age-calulation-form" action="index.php?action=calculate" method="post">
    <fieldset>
      <legend>Your information</legend>

      <div>
        <label for="name">Name:</label>
        <input name="name" type=""
            placeholder="Your name!" required="" autofocus="" />
      </div>

      <div>
        <label for="age">Year of birth:</label>
            <input name="age" type="string"
               placeholder="Year of birth" required="" />
      </div>

      <div>
        <input name="calulate" type="submit" value="Go, calculate my age!" />
      </div>
    </fieldset>
</form>