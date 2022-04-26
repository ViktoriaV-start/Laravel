<?php

class CheckFive extends Check
{
    public function show($num, $status) {
        if (($num%5) === 0) {
            $this->status = true;
            echo 'Buzz';
        } else {
            $this->status = $status;
        }
        $this->obj->show($num, $this->status);
    }
}