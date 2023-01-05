<?php

declare(strict_types=1);

use Neusta\ConverterBundle\NeustaConverterBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class TestKernel extends Kernel
{
    public function registerBundles(): array
    {
        return [
            new NeustaConverterBundle(),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__ . '/config/services.yaml');
    }

    public function getCacheDir(): string
    {
        return \sys_get_temp_dir() . '/NeustaConverterBundle/cache';
    }

    public function getLogDir(): string
    {
        return \sys_get_temp_dir() . '/NeustaConverterBundle/logs';
    }
}
