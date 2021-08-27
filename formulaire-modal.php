<?php require 'headerwelcomemodal.php'; ?>

<title>Formulaire de contact</title>
<body>                 
<section id="modal-contact" class="modal" role="dialog" aria-labelledby="modal-title">                       <!-- MODAL-CONTACT -->
        <div class="modal-wrapper js-modal-stop">
    <button class="js-modal-close">Fermer la boîte modale</button>   
    <section class="form-contact">
        <p style="text-align: center; font-size: 35px; font-weight: bold;">Formulaire de contact</p>
    
    <form method="post" action="traitement.php" enctype="multipart/form-data">
        
            <fieldset>
                <legend style="font-size: 25px; font-weight: bold;">Vos coordonnées</legend>
                    <label for="pseudo" value="Entrez votre pseudo">Veuillez entrer un pseudo <strong>*</strong>:</label><br>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo ici (20 caractères max)" size="30" maxlength="20" required />
                <br><br>
                    <label for="email">Veuillez entrer votre adresse email pour que je puisse vous répondre <strong>*</strong>:</label>
                    <input type="email" name="email" id="email" placeholder="Votre adresse email ici" size="60" required />
                <br><br>
                    <label for="radio">Veuillez entrer la tranche d'âge dans laquelle vous vous situez : <strong>(optionnel)</strong></label><br>
                    <input type="radio" name="age" value="moins_18" id="moins_18" /><label for="moins_18">Moins de 18 ans</label><br>
                    <input type="radio" name="age" value="18_40" id="18_40" /><label for="18_40">Entre 18 et 40 ans</label><br>
                    <input type="radio" name="age" value="40_60" id="40_60" /><label for="40_60">Entre 40 et 60 ans</label><br>
                    <input type="radio" name="age" value="senior" id="senior" /><label for="senior">Plus de 60 ans</label><br>
            </fieldset>
        <br><br>
        <fieldset>
            <label for="continent">Dans quel continent vivez-vous ? <strong>*</strong> <strong>(optionnel)</strong></label><br>
            <select name="continent" id="continent">
                <option value="" id=""></option>
                <option value="Afrique" id="Afrique">Afrique</option>
                <option value="Amérique du Nord" id="Amérique du Nord">Amérique du Nord</option>
                <option value="Amérique du Sud" id="Amérique du Sud">Amérique du Sud</option>
                <option value="Asie" id="Asie">Asie</option>
                <option value="Europe" id="Europe">Europe</option>
                <option value="Océanie" id="Océanie">Océanie</option>
            </select>
        </fieldset>
        <br><br>
            <fieldset>
                <div class="checkboxs-wrapper">
                    <legend id="checkbox-group" style="font-size: 25px; font-weight: bold;">Raison de contact</legend>
                        <p>Veuillez faire un ou plusieurs choix <strong>*</strong>:</p>
                        <input id="radio-for-checkbox" type="radio" name="radio-for-required-checkbox" required/>
                        <input type="checkbox" name="suggest" value="yes" id="suggest" /> <label for="suggest">Suggestion</label><br>
                        <input type="checkbox" name="error" value="yes" id="error" /> <label for="error">Erreur</label><br>
                        <input type="checkbox" name="bug" value="yes" id="bug" /> <label for="bug">Bug (lien cassé ou erreur d'affichage)</label><br>
                        <input type="checkbox" name="other" value="yes" id="other" /> <label for="other">Autre (veuillez préciser dans le message).</label><br>
                </div>
            </fieldset>
        <br><br>
            <fieldset>
                <legend style="font-size: 25px; font-weight: bold;">Message</legend>
                    <label for="message">Quel est votre message ? <strong>*</strong></label><br/>
                    <textarea name="message" id="message" placeholder="Entrer votre message (500 caractères maximum)" rows="10" cols="50" maxlength="500" required ></textarea>
            </fieldset>
        <input type="submit" />  <input type="reset" />
        <p style="text-align: center; font-size: 18px; font-weight: bold;">Les champs marqués d'une * sont obligatoires.</p> 
<!-- -------------------------------------------------------------------- OBLIGER 1 CHECKBOX MINIMUM -------------------------------------------------------------- -->     
<script>                                                                    
    function bindItemsInput() 
    {
        var inputs = document.querySelectorAll('[type="checkbox"]')
        var radioForCheckbox = document.getElementById('radio-for-checkbox')
    function checkCheckbox () 
    {
            var isAtLeastOneServiceSelected = false;
            for(var i = inputs.length-1; i >= 0; --i) 
            {
            if (inputs[i].checked) isAtLeastOneCheckboxSelected = true;
            }
            radioForCheckbox.checked = isAtLeastOneCheckboxSelected
            }
            for(var i = inputs.length-1; i >= 0; --i) 
            {
            inputs[i].addEventListener('change', checkCheckbox)
            }
    }
    bindItemsInput();
</script>
<!-- -------------------------------------------------------------------- OBLIGER 1 CHECKBOX MINIMUM -------------------------------------------------------------- -->
    </form>
    </section>            
        </div>
</section>

<?php require 'footerwelcomemodal.php'; ?>
</body>
</html>