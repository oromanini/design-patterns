<?php

namespace Curso\DesignPattern\Services;

use Curso\DesignPattern\Http\HttpAdapter;
use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\BudgetStatuses\Finished;

class BudgetRegister
{

    public function __construct(private readonly HttpAdapter $http)
    {
    }

    public function register(Budget $budget): void
    {

        !$budget->status instanceof Finished && Throw new \DomainException(
            'Only finished budgets should be send to API.'
        );

        $this->http->post('http://api.registrar.orcamento', [
            'valor' => $budget->value,
            'qtd. itens' => $budget->itemsQuantity,
        ]);
    }

}