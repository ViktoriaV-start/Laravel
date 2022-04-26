<?php

class EchoNum implements INum
{
    public function show($num, $status) {
        if ($status) {
            echo '<br>';
        } else {
            echo $num.'<br>';
        }
    }
}