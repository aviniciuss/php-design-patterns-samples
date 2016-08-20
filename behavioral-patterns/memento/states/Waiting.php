<?php
class Waiting implements ContractType
{
    public function next(Contract $contract)
    {
        $contract->setType(new InProgress());
    }
}
