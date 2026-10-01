<?php
namespace verbb\concierge\variables;

use verbb\concierge\Concierge;

class ConciergeVariable
{
    // Public Methods
    // =========================================================================

    public function getPlugin(): Concierge
    {
        return Concierge::$plugin;
    }

}
