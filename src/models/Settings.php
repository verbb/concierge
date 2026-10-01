<?php
namespace verbb\concierge\models;

use craft\base\Model;
use craft\db\Table;
use craft\elements\User;
use craft\helpers\App;
use craft\helpers\ArrayHelper;
use craft\helpers\Db;

class Settings extends Model
{
    // Properties
    // =========================================================================

    public bool $accountActivationEmailEnabled = false;
    public bool $moderatorRegistrationEmailEnabled = false;
    public ?string $moderatorUserGroup = null;


    // Public Methods
    // =========================================================================

    public function __construct($config = [])
    {
        // Handle legacy settings
        unset($config['concierge_moderation_enabled'], $config['moderatorEmail']);

        if ($oldClientId = ArrayHelper::remove($config, 'concierge_moderation_enabled')) {
            $config['moderationEnabled'] = $oldClientId;
        }

        if ($oldClientId = ArrayHelper::remove($config, 'concierge_activated_enabled')) {
            $config['accountActivationEmailEnabled'] = $oldClientId;
        }

        if ($oldClientId = ArrayHelper::remove($config, 'concierge_mod_notification_enabled')) {
            $config['moderatorRegistrationEmailEnabled'] = $oldClientId;
        }

        parent::__construct($config);
    }

    public function getAccountActivationEmailEnabled(): bool
    {
        return App::parseBooleanEnv($this->accountActivationEmailEnabled);
    }

    public function getModeratorRegistrationEmailEnabled(): bool
    {
        return App::parseBooleanEnv($this->moderatorRegistrationEmailEnabled);
    }

    public function getModerators(): array
    {
        if ($this->moderatorUserGroup) {
            if ($groupId = Db::idByUid(Table::USERGROUPS, $this->moderatorUserGroup)) {
                return User::find()->groupId($groupId)->all();
            }
        }

        return [];
    }

}
