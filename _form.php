<style>
form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 400px;
  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
  font: 1em sans-serif;

  /* Pour que tous les champs texte aient la même dimension */
  width: 300px;
  box-sizing: border-box;

  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}

textarea {
  /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
  vertical-align: top;

  /* Pour donner assez de place pour écrire du texte */
  height: 5em;
}

.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 90px; /* même taille que les étiquettes */
}

button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: .5em;
}
</style>

<form  action="./thanks.php"  method="post">

    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name" required>
    </div>

    <div>
      <label  for="courriel">Courriel :</label>
        <input type="email"  id="courriel"  name="user_email" required>
    </div>

    <div>
      <label  for="number">Number :</label>
        <input  type="num"  id="number"  name="user_num" required>
    </div>

    <div>
        <label for="mail-subject">Mail subject:</label>
            <select name="user_subject" id="theme-mail" required>
                <option value="">--Please choose a subject--</option>
                <option value="info">Info</option>
                <option value="problem">Problem</option>
                <option value="suggestion">Suggestion</option>
                <option value="candidate">Candidate</option>
            </select>
    </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required></textarea>
    </div>

    <div  class="button">
      <button  type="submit">Envoyer</button>
    </div>

  </form>
