<?php
if ($include != true)
	$var = 'Trova Parcheggio';
?>

<form action="" id="search-parking">

	<div class="input-wrapper --calendar">
		<input class="drop calendar" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" pattern="\d{4}-\d{2}-\d{2}" name="entrance" placeholder="Entrata" required>
	</div>

	<div class="input-wrapper --time">
		<input class="drop time" type="text" name="entrance-time" placeholder="Ore" required>
	</div>

	<div class="input-wrapper --calendar">
		<input class="drop calendar" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" pattern="\d{4}-\d{2}-\d{2}" name="exit" placeholder="Uscita" required>
	</div>
	
	<div class="input-wrapper --time">
		<input class="drop time" type="text" name="exit-time" placeholder="Ore" required>
	</div>

	<input type="text" name="promocode" value="" placeholder="Hai un codice promo?">
	<input class="submit" type="submit" value="<?php echo $var; ?>">

</form>