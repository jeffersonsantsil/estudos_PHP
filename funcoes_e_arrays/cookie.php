<?php
date_default_timezone_set('America/Recife').'<br>'; 

setcookie('cookie_test', 'Teste Cookie');
//DEIXA OS COOKIES ATIVOS POR 10 SEGUNDOS
setcookie('auth', 'ok', time() + 10);

//DEIXA OS COOKIES ATIVOS POR 7 DIAS NO NAVEGADOR DO USUÁRIO
//setcookie('auth', 'ok', (time() + (7 * 24 * 60 * 60)));

//echo $_COOKIE['cookie_test'];