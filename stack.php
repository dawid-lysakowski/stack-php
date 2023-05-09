<?php 

    class Stack {

        private $stack = array();
        private $top = -1;
        private $size;

        public function __construct($size) {
            $this->size = $size;
        }

        public function isFull() {
            if ($this->top == $this->size - 1) {
                return true;
            }
            else {
                return false;
            }
        }

        public function isEmpty() {
            if ($this->top == -1) {
                return true;
            }
            else {
                return false;
            }
        }

        public function getSize() {
            return $this->size;
        }

        public function push(int $element) {
            if ($this->isFull()) {
                echo "\nStos jest pełny\n";
            }
            else {
                $this->top++;
                $this->stack[$this->top] = $element;
            }
        }

        public function pop() {
            if ($this->isEmpty()) {
                echo "\nStos jest pusty\n";
            }
            else {
                $element = $this->stack[$this->top];
                unset($this->stack[$this->top]);
                $this->top--;
                return $element;
            }
        }

        public function printStack() {
            echo "\n";
            if ($this->isEmpty()) {
                echo "Stos jest pusty\n";
            }
            else {
                for ($i = $this->top; $i > -1; $i--) {
                    echo "\t" . $this->stack[$i] . "\n";
                }
            }
        }
    }

    $stack = new Stack(5);

    while (true) {
        echo "\nWybierz polecenie:\n";
        echo "1. Push\n";
        echo "2. Pop\n";
        echo "3. Print\n";
        $choice = readline("Podaj numer: ");

        switch ($choice) {
            case "1":
                $value = readline("Podaj wartość: ");
                $stack->push($value);
                break;
            case "2":
                $stack->pop();
                break;
            case "3":
                $stack->printStack();
                break;
            default:
                echo "\nNieprawidłowe polecenie\n";
                break;
        }
    }
    
?>