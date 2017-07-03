<form action="">
	<select name="t" class="form-control">
		<?php
			foreach ($templates as $template) {
				echo '<option value="' . $template .'">' . $template . '<option>';
			}
		?>
	</select>
	<button>Change</button>
</form>