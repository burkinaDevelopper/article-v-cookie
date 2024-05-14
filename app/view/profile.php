<?php include_once('header.php') ?>

<div class="body-1">

  <header class="form-titles">
    <h1>Profile</h1>
  </header>

  <section class="container-1">

    <form action="#" class="form">

      <div class="column">
        <div class="input-box">
          <label>Nom</label>
          <input type="text" placeholder="username" value="<?= $user; ?>" />
        </div>
        <div class="input-box">
          <label>Nom du Utilisateur</label>
          <input type="text" placeholder="username" value="<?= $role ?>" />
        </div>
        <div class="input-box">
          <label>Mot de Passe</label>
          <input type="password" placeholder="Entrez votre mot de passe" value="<?= $role; ?>" required />
        </div>
        <div class="input-box">
          <button>Modifier</button>
        </div>

      </div>


      <div class="column">
        <div class="input-box">
          <label>Adresse</label>
          <input type="text" placeholder="Entrez votre Adresse" />
        </div>
        <div class="input-box">
          <label>Code Postal</label>
          <input type="number" placeholder="Entrez votre Code Postal" />
        </div>
      </div>

      <div class="column">
        <div class="input-box">
          <label>Ville</label>
          <input type="text" placeholder="Entrez votre Ville" />
        </div>
        <div class="input-box">
          <label>Pays</label>
          <div class="select-box">
            <select>
              <option selected>Belgique</option>
              <option>Maroc</option>
            </select>
          </div>
        </div>
      </div>

      <div class="column">

        <div class="input-box">
          <label>Date de naissance</label>
          <div class="date">

            <div class="sub-date">
              <label>Jour</label>
              <input type="number" placeholder="JJ" required />
            </div>

            <div class="sub-date">
              <label>Mois</label>
              <input type="number" placeholder="MM" required />

            </div>

            <div class="sub-date">
              <label>Année</label>
              <input type="number" placeholder="AAAA" required />
            </div>

          </div>
        </div>

        <div class="input-box">
          <label>Numéro de téléphone</label>
          <input type="text" placeholder="Entrez votre Numéro de téléphone" />
        </div>

      </div>

      <div class="gender-box">
        <h3>Genre</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" checked />
            <label for="check-male">Homme</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" />
            <label for="check-female">Femme</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-other" name="gender" />
            <label for="check-other">Autre</label>
          </div>
        </div>
      </div>

    </form>
  </section>
  <div class="buttons">
    <button>Valider</button>
    <button class="supp">Supprimer mon compte</button>
  </div>
</div>

<?php include_once('footer.php') ?>
<script src="../public/script/darkMode1.js"></script>
</body>

</html>