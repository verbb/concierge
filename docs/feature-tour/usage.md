# Usage
Concierge features email notifications, allowing you to send an email on specific user events. Each email can be enabled in Concierge's settings, with the content of each email customisable via the Craft **System Messages** utility.

## Moderate User Registration
When a user registers on your site, you can nominate a user group to be the "moderator" of the registered user. Concierge will send an email to each member in the nominated user group, letting them know someone has registered on your site.

Coupled with the Craft **Settings** → **Users** → **Settings** → **Deactivate users by default** setting, this is useful for letting moderators know they need to moderate new user registrations.

## User Activation
If your users are deactivated by default, you'll likely want to let them know their account has been activated. Concierge can send the user an email letting them know their user account has been activated.

## Test the Registration Journey

For example, create a Moderators user group and assign a test moderator with an email address you can read. Select that group for registration moderation in Concierge and enable the registration notification. Edit its message in Craft's System Messages utility, then register a separate account through your site's normal registration form.

Check the moderator's inbox and the new account's status in Craft. The notification tells the moderator about registration; your Craft user settings determine whether that account is active. Activate the account through Craft and check that the activation email reaches the new user when Concierge's activation notification is enabled. Testing with two accounts keeps the moderator message and the user's confirmation distinct.
