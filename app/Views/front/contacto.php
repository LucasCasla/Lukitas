<?= $this->include('front/header') ?>

<main>
    <section>
        <h1>Contacto</h1>
        <form class="contact-form">
            <div>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <button type="submit" class="button">Enviar</button>
        </form>
    </section>
</main>

<?= $this->include('front/footer') ?>
