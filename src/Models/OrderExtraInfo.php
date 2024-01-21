<?php

namespace Curso\DesignPattern\Models;

readonly class OrderExtraInfo
{
    public function __construct(
        private string    $clientName,
        private \DateTime $finishDate
    )
    {}

    public function getClientName(): string
    {
        return $this->clientName;
    }

    public function getFinishDate(): \DateTime
    {
        return $this->finishDate;
    }


}