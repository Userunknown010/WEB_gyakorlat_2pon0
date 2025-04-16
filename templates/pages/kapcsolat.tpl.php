<div class="kapcscontainer">
    <div class="card shadow-sm p-4">
    <h1>Kapcsolat</h1>
        <form name="kapcsolat" action="/logicals/kapcsolat.php" onsubmit="return ellenoriz();" method="post">
            <div class="form-group">
                <label for="nev">Név (minimum 5 karakter):</label>
                <input type="text" id="nev" name="nev" class="form-control" maxlength="40">
            </div>
            <div class="form-group">
                <label for="email">E-mail (kötelező):</label>
                <input type="email" id="email" name="email" class="form-control" maxlength="40">
            </div>
            <div class="form-group">
                <label for="szoveg">Üzenet (kötelező):</label>
                <textarea id="szoveg" name="szoveg" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group text-right">
                <button type="button" class="btn btn-outline-secondary" onclick="ellenoriz();">Ellenőriz</button>
                <input id="kuld" type="submit" value="Küld" class="btn btn-primary" disabled>
            </div>
        </form>
    </div>
</div>
    <script>
        window.onload = function() {
            var kuld = document.getElementById("kuld");
            if (kuld)
                kuld.disabled = true;
        };
        function ellenoriz() {
            var rendben = true;
            var fokusz = null;

            var szoveg = document.getElementById("szoveg");
            if (szoveg) {
                if (szoveg.value.length==0) {
                    rendben = false;
                    szoveg.style.background = '#f99';
                    fokusz = szoveg;
                } else 
                    szoveg.style.background = '#9f9';
            }

            var email = document.getElementById("email");
            if (email) {
                var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if (!checkPattern.test(email.value)) {
                    rendben = false;
                    email.style.background = '#f99';
                    fokusz = email;
                } else 
                    email.style.background = '#9f9';
            }

            var nev = document.getElementById("nev");
            if (nev) {
                if (nev.value.length<5) {
                    rendben = false;
                    nev.style.background = '#f99';
                    fokusz = nev;
                } else 
                    nev.style.background = '#9f9';
            }

            if (fokusz) 
                fokusz.focus();

            var kuld = document.getElementById("kuld");
            if (kuld) 
                kuld.disabled = !rendben;

            return rendben;
        }
    </script>