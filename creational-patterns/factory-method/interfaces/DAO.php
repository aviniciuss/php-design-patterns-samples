<?php
interface DAO
{
    public function findAll();
    public function findOne(Entity $entity);
    public function save(Entity $entity);
    public function delete(Entity $entity);
}
