<?php require_once('../config/errorConfig.php'); ?>

<?php require_once('../partial/header.php'); ?>

<?php require_once('../partial/sidebar.php'); ?>
<?php 

?>

<body>
    <main>
        <h2>Formulaire</h2>
        <form method="post">
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
        <?php 


		function checkIfFormIsValid($request) {
			if ( 
				!empty($request['name']) && 
				!empty($request['email']) && 
				!empty($request['message']) &&
		
				preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/", $request['email'])
		
			 ) {
				return true;
			 } else {
				return false;
			 }
		}

	?>
	

	<?php if (isset($_REQUEST['name'])) { ?>

		<?php if (checkIfFormIsValid($_REQUEST)) { ?>

			<p>Merci <?php echo $_REQUEST['name'] ?> de votre message. Notre équipe répondra dans les plus brefs délais</p>

		<?php } else { ?>

			<p>Les données ne sont pas bonnes</p>

		<?php } ?> 

	<?php } ?> 
    </main>
</body>

<?php require_once '../partial/footer.php'; ?>