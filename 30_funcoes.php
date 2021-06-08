<?php
date_default_timezone_set('America/Recife').'<br>'; 

echo 'O ano atual: ' .date('Y') .'<br>';
echo 'O mês atual: ' .date('m') .'<br>';
echo 'O dia atual: ' .date('d') .'<br>';
echo 'A data de hoje: ' .date('d/m/Y') .'<br>';
echo 'A hora atual: ' .date('H') .'<br>';
echo 'O minuto atual: ' .date('i') .'<br>';
echo 'O segundo atual: ' .date('s') .'<br>';
echo 'A hora atual: ' .date('H:i:s') .'<br>';
date_default_timezone_set('America/Recife').'<br>';
echo 'A hora atual com time zone: ' .date_default_timezone_get() .'<br>';