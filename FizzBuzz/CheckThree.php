<?php

class CheckThree extends Check
{
    public function show($num, $status) {
        if (($num%3) === 0) {
            $this->status = true;
            echo 'Fizz';
        } else {
            $this->status = $status;
        }
        $this->obj->show($num, $this->status);
    }
}