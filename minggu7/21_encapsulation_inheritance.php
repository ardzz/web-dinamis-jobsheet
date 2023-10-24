<?php

class Student {
    protected string $id;

    public function setId(string $id): void {
        $this->id = $id;
    }
}

class ComputerScience extends Student {
    public function showId(): string
    {
        return "Your ID is " . $this->id . "<br>"; // Error
    }
}

$student = new ComputerScience();
$student->setId("18104001");
echo $student->showId();
