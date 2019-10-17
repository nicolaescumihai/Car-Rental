<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.main' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Provider/UserAuthenticationProvider.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Provider/DaoAuthenticationProvider.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserCheckerInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserChecker.php';

return $this->services['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->load(__DIR__.'/getFosUser_UserProvider_UsernameService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()) && false ?: '_'}, 'main', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load(__DIR__.'/getSecurity_EncoderFactoryService.php')) && false ?: '_'}, true);
