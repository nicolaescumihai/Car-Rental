<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.dump_listener' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/DumpListener.php';

return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->getVarDumper_ClonerService()) && false ?: '_'}, ${($_ = isset($this->services['var_dumper.cli_dumper']) ? $this->services['var_dumper.cli_dumper'] : $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0)) && false ?: '_'});
