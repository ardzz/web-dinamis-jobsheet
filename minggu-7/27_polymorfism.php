<?php
abstract class student {
    abstract public function attendance(): void;
}

class ComputerScience extends student {
    public function attendance(): void {
        echo "Computer Science student attendance<br>";
    }
}

class Biology extends student {
    public function attendance(): void {
        echo "Biology student attendance<br>";
    }
}

foreach ([new ComputerScience(), new Biology()] as $student) {
    $student->attendance();
}