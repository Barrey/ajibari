---
title: 'Debug kode PHP dengan XDebug di VSCode Ubuntu '
published: true
jscomments:
    active: true
    provider: disqus
---

Debug script PHP di VSCode tidaklah sulit, dengan menggunakan XDebug dan editor VSCode di lingkungan Ubuntu.
Hal pertama yang dilakukan adalah install xdebug.
Sebelum melakukan itu, copy nilai dari php.ini ke dalam sebuah file.

	sudo php -i > ~/php_ini.txt

Lalu pergi ke website [Xdebug Wizard](http://xdebug.org/wizard.php)  dan masukkan nilai php_ini.txt ke textarea di form yang terdapat di website xdebug.
Setelah itu, ikuti petunjuk yang ada disana, seperti : 

- download 
- extract dan 
- build (jika kamu belum menginstall php-dev di ubuntu, maka kamu diharuskan menginstall ini terlebih dahulu agar bisa menjalankan proses **`make`**)
	
Setelah mengikuti instruksi di website xdebug, ketikkan perintah 

	sudo systemctl restart php7.x-fpm && php -m 		
perintah diatas untuk merestart php dan melihat apakah extension xdebug sudah berjalan. x adalah versi php yang terinstall di komputer kamu. jika komputer kamu mempunyai versi php 7.2 maka x diganti dengan angka 2, begitu juga dengan versi lainnya. 
Kamu bisa melihat xdebug di list terminal. Jika tidak ada, berarti ada step yang terlewat.
Setelah itu, ketikkan :

	sudo apt install php-xdebug

Setelah itu, edit xdebug.ini

	sudo nano /etc/php/7.x/mods-available/xdebug.ini
	
Lalu paste konfigurasi dibawah: 

	zend_extension=/usr/lib/php/20170718/xdebug.so #pastikan ini sesuai dengan direktori xdebug.so sesuai instruksi di website xdebug
	xdebug.remote_autostart = 1
	xdebug.remote_enable = 1
	xdebug.remote_handler = dbgp
	xdebug.remote_host = 127.0.0.1
	xdebug.remote_log = /tmp/xdebug_remote.log
	xdebug.remote_mode = req
	xdebug.remote_port = 9005 #port bisa dirubah sesuai keinginan
	
Simpan dan restart php dan webserver nya
	sudo systemctl restart php7.x-fpm
	sudo systemctl restart nginx

Setelah itu, buka editor VSCode kamu lalu install plugin PHP Debug dan reload setelah instalasi plugin selesai.

![](php_debug.png)

Tada, sekarang kamu sudah bisa debug script php kamu, tanpa perlu `var_dump` atau `print_r` lagi. 
