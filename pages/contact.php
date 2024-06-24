<?php require_once('../config/errorConfig.php'); ?>

<?php require_once('../partial/header.php'); ?>

<?php require_once('../partial/sidebar.php'); ?>

<body>
    <main>
        <h2>Formulaire</h2>
        <form>
            <label> Nom
                <input type="text" name="name">
            </label>
            <label> Email
                <input type="email" name="email">
            </label>
            <label> Message
                <input type="text" name="message" >
            </label>
            <button>Envoyer</button>
        </form>
        <?php if(isset($_REQUEST['name'])) { ?>
            <p>Vous avez envoyé un message</p>
        <?php } ?>
    </main>
</body>

<?php require_once '../partial/footer.php'; ?>