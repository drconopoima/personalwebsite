<?php
/**
 * @package    Grav.Common.Processors
 *
 * @copyright  Copyright (C) 2015 - 2018 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Processors;

class ConfigurationProcessor extends ProcessorBase implements ProcessorInterface
{
    public $id = '_config';
    public $title = 'Configuration';

    public function process()
    {
        $this->container['config']->init();
        $this->container['plugins']->setup();
    }
}
