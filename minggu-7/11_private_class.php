<?php

class computer {
    private string $processor_type = "Intel Core i9-9900K @ 3.60GHz";

    public function getProcessorType(): ?string
    {
        return $this->processor_type;
    }
}

class laptop extends computer {
    public function getProcessorType(): ?string
    {
        return $this->processor_type;
    }
}

$computer = new computer();
$laptop   = new laptop();

echo $computer->getProcessorType(); // Intel Core i9-9900K @ 3.60GHz
echo $laptop->getProcessorType();   // Intel Core i9-9900K @ 3.60GHz