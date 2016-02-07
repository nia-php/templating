<?php
/*
 * This file is part of the nia framework architecture.
 *
 * (c) Patrick Ullmann <patrick.ullmann@nat-software.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types = 1);
namespace Nia\Templating;

/**
 * Interface for all template implementations.
 * Implementations of this interface are the template itself which can be fetched ("rendered").
 */
interface TemplateInterface
{

    /**
     * Fetches the template and returns the result as a string.
     *
     * @param mixed[] $context
     *            The used context which provides variables for the template.
     * @return string The fetched template.
     */
    public function fetch(array $context): string;
}
