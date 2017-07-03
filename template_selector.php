<form action="">
	<select name="t" class="form-control">
		<?php
			foreach ($templates as $templates) {
				echo "<option>" . $template . "<option>";
			}


		?>
	</select>
	<button>Change</button>
</form>