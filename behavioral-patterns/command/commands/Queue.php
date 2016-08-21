<?php
class Queue
{
    private $tasks;

    public function __construct()
    {
        $this->tasks = [];
    }

    public function push(Command $command)
    {
        $this->tasks[] = $command;
    }

    public function process()
    {
        foreach ($this->tasks as $task) {
            $task->execute();
        }
    }
}
