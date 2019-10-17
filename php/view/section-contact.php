<main>
    <div class="app1">
        <section class="contact">
            <h2>Formulaire de contact</h2>
            <form class="ajax" method="POST" action="api-json.php" @submit="envoi">
                <label>
                    <span>Nom</span>
                    <!-- CONSEIL: DONNER EN name LE NOM DE LA COLONNE SQL -->
                    <input type="text" name="nom" required placeholder="entrez votre nom">
                </label>

                <label>
                    <span>Email</span>
                    <input type="email" name="email" required placeholder="entrez votre email">
                </label>

                <label>
                    <span>Message</span>
                    <textarea name="message" cols="10" rows="5" required placeholder="entrez votre message"></textarea>
                </label>

                <!-- message confirmation vueJS-->
                <button type="submit">Envoyer</button>

                <div class="ui success message" v-if="success">
                    <i class="close icon" @click="close">x</i>
                    <p> {{ message }} </p>
                </div>

                <!-- INFO TECHNIQUE POUR DIFFERENCIER LES FORMULAIRES -->
                <input type="hidden" name="idFormulaire" value="contact">
            </form>
        </section>
    </div>
</main>
