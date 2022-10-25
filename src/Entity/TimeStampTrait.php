<?php

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

trait TimeStampTrait {
    #[ORM\Column(nullable: false)]
    private DateTimeImmutable $createdAt;

    #[ORM\Column(nullable: false)]
    private DateTimeImmutable $updatedAt;

    #[ORM\PrePersist]
    public function prePersist(): void
    {
        $date = new DateTimeImmutable();

        $this->createdAt = $date;
        $this->updatedAt = $date;
    }

    #[ORM\PreUpdate]
    public function preUpdate(): void
    {
        $date = new DateTimeImmutable();

        $this->updatedAt = $date;
    }
}