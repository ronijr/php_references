<?php

// The htmlspecialchars_decode () fungsi mengkonversi beberapa entitas
// HTML yang telah ditetapkan untuk karakter
//patameter htmlspecialchars_decode(string,flags,)

// entitas HTML yang akan diterjemahkan adalah:
//
// & Amp; menjadi & (ampersand)
// & Quot; menjadi "(double quote)
// & # 039; menjadi '(single quote)
// & Lt; menjadi <(kurang dari)
// & Gt; menjadi> (lebih besar dari)
// The htmlspecialchars_decode () fungsi adalah kebalikan dari htmlspecialchars ().
$str ="This is some &lt;b&gt;bold&lt;/b&gt;</b> text";
echo htmlspecialchars_decode($str);
?>
