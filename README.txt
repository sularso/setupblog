Konfigurasi VPS:
1. Spek VPS Ubuntu 16.04 32 byte ram 512 storage 25Gb
2. Ikuti tutorial di https://albennet.com/vpsapachewebserver.php (sampai step 3. Create VHOST BEGIN)
3. nano /etc/httpd/conf/httpd.conf
 tambahkan script dibawah ini

 #############
<Directory /var/www/gantidengandomainanda.com/public_html>
 AllowOverride All
</Directory>
 #############

4. service httpd restart



Edit Script:
1. Buka file
	-header.php
	-meta.php
  Search and replace kata "Decoratingfree" dengan nama domain anda.

2. Buka file meta.php isi deskripsi meta
3. buka file index.php ganti namadomainanda.com dengan domain anda
4. folder sitemap isi masing2 file txt dengan keyword dengan format tanpa tanda kutip "home-decor-idea" maksimal 1000 keyword per file. 
5. Buka folder asset cat.txt isi sesuaikan tema blog dan home.txt tampil dihalaman utama jangan terlalu banyak 50 keyword cukup