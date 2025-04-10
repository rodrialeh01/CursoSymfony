<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PersonaEntityUpload
{
	#[Assert\NotBlank(message: 'El campo nombre no debe estar en blanco')]
	protected $nombre;
	#[Assert\NotBlank(message: 'El campo correo no debe estar en blanco'), 
	  Assert\Email(message: "El correo {{ value }} no es un correo valido")]
	protected $correo;
	#[Assert\NotBlank(message: 'El campo telefono no debe estar en blanco')]
	protected $telefono;
	#[Assert\Positive(message: 'Debe seleccionar un país')]
	protected $pais;
	#[Assert\File(
		maxSize: "10M",
		mimeTypes:[
			"image/jpeg",
			"image/jpg",
			"image/png"
		] ,
		mimeTypesMessage: "La foto debe ser JPG|PNG",
		maxSizeMessage: "La foto no puede pesar más de 10 Megabytes"
	)]
	protected $foto;

	public function getNombre():string
	{
		return $this->nombre;
	}

	public function setNombre(string $nombre): void
	{
		$this->nombre = $nombre;
	}

	public function getCorreo():string
	{
		return $this->correo;
	}

	public function setCorreo(string $correo): void
	{
		$this->correo = $correo;
	}

	public function getTelefono():string
	{
		return $this->telefono;
	}

	public function setTelefono(string $telefono): void
	{
		$this->telefono = $telefono;
	}

	public function getPais():string
	{
		return $this->pais;
	}

	public function setPais(string $pais): void
	{
		$this->pais = $pais;
	}

	public function getFoto():string
	{
		return $this->foto;
	}

	public function setFoto(string $foto): void
	{
		$this->foto = $foto;
	}
}