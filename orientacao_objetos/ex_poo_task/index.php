<?php

    class Task {
        public $title, $description, $completed;
        
        function __construct($title, $description) {
            $this->title = $title;
            $this->description = $description;
            $this->completed = false;
        }
        
        function markAsCompleted() {
            $this->completed = true;
        }
        
        function markAsIncomplete() {
            $this->completed = false;
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
    
    $task = new Task("Estudar", "Estudar para a prova");
    
    $task->markAsCompleted();
    echo $task->isCompleted() . "<br>";
    
    $task->markAsIncomplete();
    echo $task->isCompleted() . "<br>";
    
    echo $task->getTitle() . "<br>";
    
    echo $task->getDescription() . "<br>";