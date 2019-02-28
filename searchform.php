<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<nav>
	<div class="nav-wrapper teal darken-3">
		<form>
			<div class="input-field">
			 <input id="search" type="search" placeholder="Pesquisa" value="<?php echo get_search_query(); ?>" name="s"/>
				<label class="label-icon" for="search"><i class="material-icons">search</i></label>
				<i class="material-icons">close</i>
			</div>
		</form>
	</div>
</nav>
