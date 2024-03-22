<?php

namespace App\Entity;

use App\Repository\ComerciosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComerciosRepository::class)]
class Comercios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idComercio = null;

    #[ORM\Column(length: 9)]
    private ?string $CIF = null;

    #[ORM\Column(length: 20)]
    private ?string $nombreComercio = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 100)]
    private ?string $direccionComercio = null;

    #[ORM\Column(length: 9)]
    private ?string $telefono = null;

    #[ORM\Column(length: 30)]
    private ?string $razonSocial = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdComercio(): ?int
    {
        return $this->idComercio;
    }

    public function setIdComercio(int $idComercio): static
    {
        $this->idComercio = $idComercio;

        return $this;
    }

    public function getCIF(): ?string
    {
        return $this->CIF;
    }

    public function setCIF(string $CIF): static
    {
        $this->CIF = $CIF;

        return $this;
    }

    public function getNombreComercio(): ?string
    {
        return $this->nombreComercio;
    }

    public function setNombreComercio(string $nombreComercio): static
    {
        $this->nombreComercio = $nombreComercio;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getDireccionComercio(): ?string
    {
        return $this->direccionComercio;
    }

    public function setDireccionComercio(string $direccionComercio): static
    {
        $this->direccionComercio = $direccionComercio;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getRazonSocial(): ?string
    {
        return $this->razonSocial;
    }

    public function setRazonSocial(string $razonSocial): static
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }
}
