<?php
	    // Membuat variabel
	    $username="";
	    $pass = "";
		
		// Kode cek username hanya boleh huruf a-z dan 8 karakter
		if(!preg_match('/^[a-z]{8}$/i', $username)){
			$username_valid = false;
			$username_valid_msg = "Username, merupakan kombinasi dari huruf kecil. Dengan panjang tepat 8 karakter.<br>";
		}
		
		// Cek minimal karakter password (minimal 8 digit)
		if(strlen($pass) < 8){
			$valid_panjang_pass = false;
			$valid_panjang_pass_msg = "Password, merupakan kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang minimal 8 karakter..<br>";
		}