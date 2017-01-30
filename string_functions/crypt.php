<?php
// The crypt () mengembalikan fungsi string hash menggunakan algoritma DES, Blowfish, atau MD5.
//
// Fungsi ini berperilaku berbeda pada sistem operasi yang berbeda. PHP memeriksa apa algoritma yang tersedia dan apa algoritma untuk digunakan ketika diinstal.
//
// Parameter garam adalah opsional. Namun, crypt () menciptakan password yang lemah tanpa garam. Pastikan untuk menentukan garam cukup kuat untuk keamanan yang lebih baik.
//
// Ada beberapa konstanta yang digunakan bersama-sama dengan crypt () fungsi. Nilai konstanta ini ditetapkan oleh PHP ketika diinstal
// CRYPT_STD_DES] - Standard hash DES berbasis dengan dua garam karakter dari alfabet "./0-9A-Za-z". Menggunakan karakter yang tidak valid dalam garam akan menyebabkan fungsi ini gagal.
// [CRYPT_EXT_DES] - Super hash berbasis DES dengan garam sembilan karakter yang terdiri dari garis bawah diikuti oleh 4 byte count iterasi dan 4 byte garam. Ini dikodekan sebagai karakter yang dapat dicetak, 6 bit per karakter, karakter paling signifikan pertama. Nilai-nilai 0-63 dikodekan sebagai "./0-9A-Za-z". Menggunakan karakter yang tidak valid dalam garam akan menyebabkan fungsi gagal.
// [CRYPT_MD5] - MD5 hashing dengan garam 12 karakter diawali $ 1 $
// [CRYPT_BLOWFISH] - hashing Blowfish dengan garam dimulai dengan $ 2a $, $ 2x $, atau $ 2y $, dua parameter biaya digit "$", dan 22 karakter dari alfabet "./0-9A-Za-z" . Menggunakan karakter luar abjad akan menyebabkan fungsi ini untuk kembali nol-panjang string. The "$" parameter adalah basis-2 logaritma dari jumlah iterasi untuk mendasari Blowfish-dihancurkan algorithmeter hashing dan harus dalam kisaran 04-31. Nilai di luar kisaran ini akan menyebabkan fungsi gagal.
// [CRYPT_SHA_256] - SHA-256 hash dengan garam 16 karakter diawali $ 5 $. Jika string garam dimulai dengan "putaran = <N> $", nilai numerik dari N digunakan untuk menunjukkan berapa kali loop hashing harus dieksekusi, seperti biaya parameter pada Blowfish. Nomor default putaran 5000, ada minimal 1000 dan maksimal 999.999.999. Setiap pemilihan N di luar kisaran ini akan dipotong untuk batas terdekat.
// [CRYPT_SHA_512] - SHA-512 hash dengan garam 16 karakter diawali $ 6 $. Jika string garam dimulai dengan "putaran = <N> $", nilai numerik dari N digunakan untuk menunjukkan berapa kali loop hashing harus dieksekusi, seperti biaya parameter pada Blowfish. Nomor default putaran 5000, ada minimal 1000 dan maksimal 999.999.999. Setiap pemilihan N di luar kisaran ini akan dipotong untuk batas terdekat.
// Pada sistem di mana fungsi ini mendukung beberapa algoritma, konstanta di atas ditetapkan untuk "1" jika didukung dan "0" jika tidak.

//2 Karakter salt
if(CRYPT_STD_DES == 1){
  echo "Standard DES : ".crypt('somthing','st')."\n<br>";
}else{
  echo "Standard DES not supported.\n<br>";
}

//4 karakter SDO_DAS_Relational
if(CRYPT_EXT_DES == 1){
  echo "Extended Des :".crypt('something','_S4..some')."\n<br>";
}else{
  echo "Extended Des not supported\n<br>";
}

// 12 karakter salt starting with $1$
if(CRYPT_MD5 == 1){
  echo "MD5 : ".crypt('Something','$1$somethin$')."\n<br>";
} else{
  echo "MD5 not supported.\n<br>";
}

//salt starting with $2a$. The two digit cost patameter 09. 22 Karakter
if(CRYPT_BLOWFISH == 1){

  echo "Blowfish : ".crypt('something','$2$09$anexamplestringforsalt$')."\n</br>";
} else{

  echo "Blowfish DES not supported\n<br>";
}

//16 karakter salt starting with $5$. The default number of rounds is 5000
if(CRYPT_SHA256 ==1){
  echo "SHA-256 : ".crypt('something','$5$rounds=5000$anexamplestringforsalt$')."\n<br>";
} else {
  echo "SHA-256 not supported\n<br>";
}

//

if(CRYPT_SHA512 == 1){
  echo "SHA-512 : ".crypt('something','$6$rounds=5000$anexamplestringforsalt$');
}else {
  echo "SHA-512 not supported";
}

//
?>
