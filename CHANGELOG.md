# Changelog

## 4.0.2 - 2026-09-13

### Changed
- Normalize plugin settings.

## 4.0.1 - 2024-11-01

### Fixed
- Fix moderator emails.

## 4.0.0 - 2024-10-31

### Changed
- Now requires Craft 5.0+.

## 3.0.1 - 2024-11-01

### Fixed
- Fix moderator emails.

## 3.0.0 - 2024-10-31
> {note} The plugin’s package name has changed to `verbb/concierge`. Squeeze will need be updated to 3.0 from a terminal, by running `composer require verbb/concierge && composer remove olivierbon/craft-concierge`.

### Changed
- Migration to `verbb/concierge`.
- Now requires Craft 4.0+.

## Removed
- Removed the ability to moderate users and deactivate by default. Use Craft‘s own **Settings** → **Users** → **Settings** → **Deactivate users by default** to achieve the same feature.
- Removed the Control Panel page for the plugin (no longer needed). Use a Custom Element Source for the User element to achieve the same feature of "Awaiting activation" users.

## 2.1.1 - 2019-01-20
- Changed icon color to match Crat CP.

## 2.1.0 - 2019-01-20
- Added French translation for CP and messages.

## 2.0.0 - 2019-01-17
- Initial release