<div class="logcontainer">
      <div class="logcontaineritems">
          <form action = "?oldal=belep" method = "post" id="log">
          <fieldset>
            <legend>Bejlentkezés</legend>
            <input id="beinp" type="text" name="felhasznalo" placeholder="felhasználó" required><br>
            <input id="beinp" type="password" name="jelszo" placeholder="jelszó" required><br>
            <input id="gombinp" type="submit" name="belepes" value="Belépés">
            <br>
          </fieldset>
        </form>
        <h3>Regisztrálja magát, ha még nem felhasználó!</h2>
        <form action = "?oldal=regisztral" method = "post" id="reg">
          <fieldset>
            <legend>Regisztráció</legend>
            <input id="beinp" type="text" name="vezeteknev" placeholder="vezetéknév" required><br>
            <input id="beinp" type="text" name="utonev" placeholder="utónév" required><br>
            <input id="beinp" type="text" name="felhasznalo" placeholder="felhasználói név" required><br>
            <input id="beinp" type="password" name="jelszo" placeholder="jelszó" required><br>
            <input id="gombinp" type="submit" name="regisztracio" value="Regisztráció">
            <br>
          </fieldset>
        </form>
      </div>
    </div>
