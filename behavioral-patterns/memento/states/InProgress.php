<?php
class InProgress implements ContractType
{
    public function next(Contract $contract)
    {
        $contract->setType(new Finalized());
    }
}
