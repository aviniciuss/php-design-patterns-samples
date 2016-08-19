<?php
class NF
{
    private $company;
    private $cnpj;
    private $items;
    private $valueGross;
    private $valueTaxes;
    private $observations;
    private $dateIssue;

    public function __construct($company, $cnpj, $items, $valueGross, $valueTaxes, $observations, $dateIssue)
    {
        $this->company = $company;
        $this->cnpj = $cnpj;
        $this->items = $items;
        $this->valueGross = $valueGross;
        $this->valueTaxes = $valueTaxes;
        $this->observations = $observations;
        $this->dateIssue = $dateIssue;
    }
}
