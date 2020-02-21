<?php

$username = $_POST['user'];

if ($username == 'nida@gmail.com'){
	echo '<a>email anda sudah terverifikasi >.<)/ </a>.'; 
} else {
	echo '<a>email anda belum terverifikasi</a>.';
}
?>