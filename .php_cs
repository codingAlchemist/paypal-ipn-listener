<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in('src')
;

return Symfony\CS\Config\Config::create()
    ->finder($finder)
;
