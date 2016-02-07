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
 * Interface for all template factory implementations.
 * The template factories are abstract factories which create an associated template.
 */
interface TemplateFactoryInterface
{

    /**
     * Creates a new template instance for the passed template name.
     *
     * @param string $name
     *            Name of the template.
     * @return TemplateInterface The created template.
     */
    public function create(string $name): TemplateInterface;
}
