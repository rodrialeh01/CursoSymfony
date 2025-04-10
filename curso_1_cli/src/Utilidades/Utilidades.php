<?php

namespace App\Utilidades;

class Utilidades
{
	public static function saludo(string $nombre){
		return "hola {$nombre}";
	}

	public function saludo2(string $nombre){
		return "hola {$nombre}";
	}
}