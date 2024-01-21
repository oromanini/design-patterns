<?php

namespace Curso\DesignPattern\Models;

class OrderExtraInfo
{
    public function __construct(
        private readonly string    $clientName,
        private readonly \DateTime $finishDate
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