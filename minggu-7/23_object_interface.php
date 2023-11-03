<?php
interface studentInterface {
    public function attendance(): self;
    public function setID(int $id): self;
}
class Student implements studentInterface{
    private string $id, $name;
    private int $attendance = 0;
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function attendance(): self {
        $this->attendance++;
        return $this;
    }
    public function setID(int $id): self {
        $this->id = $id;
        return $this;
    }
    public function __toString() {
        return "Student ID: {$this->id}<br>Student Name: {$this->name}<br>Attendance: {$this->attendance}<br>";
    }
    public static function make(string $name): self {
        return new self($name);
    }
}

echo Student::make("John Doe")
    ->setID(1)
    ->attendance()
    ->attendance()
    ->attendance();