<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_cache.delete_command' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle/Command/CacheCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle/Command/DeleteCommand.php';

return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
