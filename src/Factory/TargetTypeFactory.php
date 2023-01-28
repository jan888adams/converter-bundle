<?php

declare(strict_types=1);

namespace Neusta\ConverterBundle\Factory;

/**
 * @template TTarget of object
 * @template TContext of object|null
 */
interface TargetTypeFactory
{
    /**
     * @param TContext $ctx
     *
     * @return TTarget
     */
    public function create(?object $ctx = null): object;
}
