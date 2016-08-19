<?php
class NFBuilder
{
    private $company;
    private $cnpj;
    private $items;
    private $valueGross;
    private $valueTaxes;
    private $observations;
    private $dateIssue;

    public function __construct()
    {
        $this->valueGross = 0.0;
        $this->valueTaxes = 0.0;
        $this->items = [];
    }

    public function withCompany($company)
    {
        $this->company = $company;
    }

    public function withCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function addItem(Item $item)
    {
        $this->items = $item;
        $this->valueGross += $item->getPrice();
        $this->valueTaxes += $item->getPrice() * 0.1;
    }

    public function withObservations($observations)
    {
        $this->observations = $observations;
    }

    public function onDate($date = null)
    {
        if(is_null($date)) {
            $this->dateIssue = date("Y-m-d h:i:s");
        } else {
            $this->dateIssue = $date;
        }
    }

    public function build()
    {
        return new NF($this->company, $this->cnpj, $this->items, $this->valueGross,
            $this->valueTaxes, $this->observations, $this->dateIssue);
    }
}
