<?php

namespace Model;

class Comment
{
    public function __construct(
        private ?int $id = null,
        private ?string $nama = null,
        private ?string $komentar = null
    ) {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }


    public function setNama(?string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getKomentar(): ?string
    {
        return $this->komentar;
    }


    public function setKomentar(?string $komentar): self
    {
        $this->komentar = $komentar;

        return $this;
    }
}
