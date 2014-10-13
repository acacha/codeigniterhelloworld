
<?php if(($lastname!="") && $firstname!="") : ?>
Hola <?php echo $lastname . ", " . $firstname;?>
<?php else :?>
 A que esperes per donarme el teu nom!
<?php endif ;?>

<form action="<?php echo base_url('/index.php/simpatic/form_example');?>" method="POST">
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname">
<input type="submit" value="Submit">
</form>