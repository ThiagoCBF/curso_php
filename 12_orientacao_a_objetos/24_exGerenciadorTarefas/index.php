<?php

    class Task {
        public $title;
        public $description;
        public $completed;

        public function __construct($title, $description) {
            $this->title = $title;
            $this->description = $description;
            $this->completed = false;
        }

        function markAsCompleted() {
            $this->completed = True;
        }

        function markAsIncomplete() {
            $this->completed = False;
        }

        function getTitle() {
            return $this->title;
        }

        function getDescription() {
            return $this->description;
        }

        function isCompleted() {
            return $this->completed;
               
        }

    }

    $task = new Task("Estudar", "Estudar sobre PHP");
    echo "Tarefa: " . $task->getTitle() . "\n";
    echo "Descrição: " . $task->getDescription() . "\n";
    echo "Status: " . ($task->isCompleted() ? "Concluída" : "Pendente") . "\n";
 
    $task->markAsCompleted();
    echo "Status após marcação como concluída: " . ($task->isCompleted() ? "Concluída" : "Pendente") . "\n";
 
    $task->markAsIncomplete();
    echo "Status após marcação como não concluída: " . ($task->isCompleted() ? "Concluída" : "Pendente") . "\n";