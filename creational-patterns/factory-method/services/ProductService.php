<?php

class ProductService extends AbstractService
{
    public function getDAO()
    {
        return new ProductDAO();
    }
}
