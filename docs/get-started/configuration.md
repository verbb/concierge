# Configuration

You can customise Concierge’s settings using a PHP configuration file. This is optional: each setting has a default, so you only need to include the values you want to change.

To override a setting, create `concierge.php` in your Craft project’s `/config` directory and return an array of setting names and values. For example, the following will enable moderator registration emails:

```php
<?php

return [
    'moderatorRegistrationEmailEnabled' => true,
];
```

All other settings keep their defaults. Add any further settings you want to change to the same array. The options below explain the available settings and their defaults.

## Configuration Options

::: reference
### `accountActivationEmailEnabled`

**Type:** `bool` · **Default:** `false`

Whether to send an email to the user when their account is activated.
:::


::: reference
### `moderatorRegistrationEmailEnabled`

**Type:** `bool` · **Default:** `false`

Whether to send an email to moderators when a user has registered.
:::


::: reference
### `moderatorUserGroup`

**Type:** `string|null` · **Default:** `null`

The user group (UID) for moderators. Each user in this group will receive moderator emails.
:::



## Control Panel
You can also manage configuration settings through the Control Panel by visiting Settings → Concierge.
