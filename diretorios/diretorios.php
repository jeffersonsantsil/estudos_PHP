<?php

//VERIFICA SE É UM DIRETORIO NESSE CASO VAI DAR FALSO PQ *TESTE* NÃO É UM DIRETORIO E SIM UM ARQUIVO
//var_dump(is_dir('teste'));

//VERIFICA SE É UM DIRETORIO NESSE CASO VAI DAR TRUE
//var_dump(is_dir('test'));

//var_dump(mkdir('uploads'));
//var_dump(mkdir('uploads/teste'));

//var_dump(rmdir('uploads/teste'));
//var_dump(rmdir('uploads'));

//var_dump(getcwd());

//var_dump(scandir('..'));
echo '<br>';
var_dump(glob('../*.php'));