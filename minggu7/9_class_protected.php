<?php

class college{
    protected string $student_name;

    public function __construct(string $name){
        $this->student_name = $name;
    }

    protected function display(): void
    {
        echo "Student Name: " . $this->student_name;
    }

    public static function make(string $name): static
    {
        return new static($name);
    }
}

$nana = college::make("Nana");
// ERROR
$nana->student_name = "Nana";
$nana->display();