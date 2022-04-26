<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

for ($i=1; $i<=100; $i++) {
    $num = new CheckThree(new CheckFive(new EchoNum()));
    $num->show($i, false);
}
