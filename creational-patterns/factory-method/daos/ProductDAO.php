<?php
class ProductDAO implements DAO
{
    public function findAll()
    {
        echo "findAll";
    }

    public function findOne(Entity $object)
    {
        echo "findOne";
    }

    public function save(Entity $object)
    {
        echo "save";
    }

    public function delete(Entity $object)
    {
        echo "delete";
    }
}
