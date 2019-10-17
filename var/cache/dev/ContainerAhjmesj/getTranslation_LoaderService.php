<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.loader' shared service.

@trigger_error('The "translation.loader" service is deprecated since Symfony 3.4 and will be removed in 4.0. Use "translation.reader" instead.', E_USER_DEPRECATED);

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/LoaderInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/ArrayLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/FileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/PhpFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/YamlFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/XliffFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/PoFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/MoFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/QtFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/CsvFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/IcuResFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/IcuDatFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/IniFileLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Loader/JsonFileLoader.php';

$this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

$a = ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()) && false ?: '_'};
$b = ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()) && false ?: '_'};

$instance->addLoader('php', ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader()) && false ?: '_'});
$instance->addLoader('yaml', $a);
$instance->addLoader('yml', $a);
$instance->addLoader('xlf', $b);
$instance->addLoader('xliff', $b);
$instance->addLoader('po', ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader()) && false ?: '_'});
$instance->addLoader('mo', ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader()) && false ?: '_'});
$instance->addLoader('ts', ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader()) && false ?: '_'});
$instance->addLoader('csv', ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader()) && false ?: '_'});
$instance->addLoader('res', ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader()) && false ?: '_'});
$instance->addLoader('dat', ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader()) && false ?: '_'});
$instance->addLoader('ini', ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader()) && false ?: '_'});
$instance->addLoader('json', ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader()) && false ?: '_'});

return $instance;
