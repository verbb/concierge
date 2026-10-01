<?php
namespace verbb\concierge\base;

use verbb\concierge\Concierge;
use verbb\concierge\services\Service;

use verbb\base\LogTrait;
use verbb\base\helpers\Plugin;

trait PluginTrait
{
    // Static Properties
    // =========================================================================

    public static ?Concierge $plugin = null;


    // Traits
    // =========================================================================

    use LogTrait;


    // Static Methods
    // =========================================================================

    public static function config(): array
    {
        Plugin::bootstrapPlugin('concierge');

        return [
            'components' => [
                'service' => Service::class,
            ],
        ];
    }


    // Public Methods
    // =========================================================================

    public function getService(): Service
    {
        return $this->get('service');
    }

}
