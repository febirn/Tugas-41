<?php

if (isset($_POST['tambah'])) {
	$member = [
		'librarian_id'	=>	$_POST['librarian_id'],
		'name'			=>	$_POST['name'],
		'gender'		=>	$_POST['gender'],
		'photo'			=>	$_POST['photo'] = 'avatar.png',
		'date_expired'	=>	$_POST['date_expired'],
	];

	$this->model->add($member);
}

?>
<div class="group">
	<i class="fa fa-user-plus fa-lg left"></i>
	<span class="right">ADD MEMBER</span>
</div>
<form action="" method="POST">
	<p><input type="hidden" name="librarian_id" value="1"></p>
	<p><input type="text" name="name" placeholder="Nama Lengkap" 
		required></p>
	<p><select name="gender" required>
		<option value="">-- Jenis Kelamin --</option>
		<option value="Laki-Laki">Laki-Laki</option>
		<option value="Perempuan">Perempuan</option>
	</select></p>
	<p><input type="text" name="photo" placeholder="Photo"></p>
	<p><input type="text" name="date_expired" 
		placeholder="Date Expired" required></p>
	<button type="submit" name="tambah">ADD MEMBER</button>
</form>