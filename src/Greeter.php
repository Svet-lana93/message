<?php

namespace Shmidt\Message;

class Greeter
{
    public function greet(string $name)
    {
        return 'Hi ' . $name . '! How are you?';
    }
}
