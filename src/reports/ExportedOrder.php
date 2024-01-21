<?php

namespace Curso\DesignPattern\reports;

use Curso\DesignPattern\Models\Order;

class ExportedOrder implements ExportedContent
{

    public function __construct(private readonly Order $order)
    {}

    public function content(): array
    {
        return [
            'client_name' => $this->order->clientName,
            'finish_date' => $this->order->finishDate->format('d/m/Y'),
        ];
    }
}