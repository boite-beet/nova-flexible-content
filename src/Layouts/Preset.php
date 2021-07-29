<?php

namespace BoiteBeet\NovaFlexibleContent\Layouts;

use BoiteBeet\NovaFlexibleContent\Flexible;

abstract class Preset
{
    /**
     * Execute the preset configuration
     *
     * @return void
     */
    abstract public function handle(Flexible $field);

}
