Website untuk lomba HIMFEST

INSTALASI LARAVEL

STEP 1: Download Composer di getcomposer.org STEP 2: Download PHP dan XAMPP terbaru STEP 3: Download Node.js STEP 4: Download Git n Gitbash SETP 5: VScode(ekstension sesuaikan)

Set up:

kalau sudah install semuanya diatas ketik: composer global require laravel/installer
tunggu prosesnya sampai instalasi selesai
kemudian buka folders xampp -> htdocs -> (jika sudah install gitbash) klik kanan pilih gitbash kemudian pada terminal gitbash ketikan: laravel new nama_folder
tunggu proses hingga selesai
setelah installasi selesai pada terminal gitbash kita harus mengubah directory ke folder yang kita namai pada poin 3, contoh ketikan: cd nama_folder
buka vs code di terminal dengan mengetikan: code .
kembali ke terminal gitbash ketikan: composer require laravel/jetstream
tunggu proses instalasi selesai
ketikan di gibash terminal= php artisan jetstream:install livewire
tunggu hingga proses selesai
jika sudah selesai maka akan ada perintah untuk mengetikan di terminal= npm install && npm run dev
proses instalasi sudah selesai.