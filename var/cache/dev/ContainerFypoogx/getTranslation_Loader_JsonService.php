<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.loader.json' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/LoaderInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/ArrayLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/FileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/JsonFileLoader.php';

return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
