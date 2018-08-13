<?php
function getImage(){
?>
<div>

<img src="C:/MAMP/htdocs/wordpress/wp-content/themes/median/images/wp-logo.svg" alt="wp-logo" style="width:20%">

</div>

<?php
}
add_action ('wp_enqueue_scripts' , 'getImage');
?>

