<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.factory' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormFactoryInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormFactory.php';

return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load(__DIR__.'/getForm_RegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->load(__DIR__.'/getForm_ResolvedTypeFactoryService.php')) && false ?: '_'});
