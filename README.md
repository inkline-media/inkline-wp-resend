# Inkline Resend Mailer

Fork of [Send Emails with Resend](https://wordpress.org/plugins/send-emails-with-resend/) (v1.3.0 by CloudCatch LLC).

## What's different?

The upstream plugin **always overrides** the From name and email with whatever is in the settings page. Our fork treats those as **fallbacks**:

| Field | Upstream behavior | Fork behavior |
|-------|------------------|---------------|
| **From Name** | Always uses settings value | Uses the original name from `wp_mail()` / plugin; falls back to settings only if empty or "WordPress" |
| **From Email** | Always uses settings value | Uses the original email if its domain matches the verified Resend domain; falls back to settings otherwise |

This means plugins like WooCommerce, Gravity Forms, Contact Form 7, etc. can set their own sender names and addresses — as long as the email domain matches your verified Resend domain.

## Auto-updates

The plugin includes a lightweight GitHub updater. When a new release is published here, WordPress will show the update in **Dashboard → Updates** and **Plugins → Installed Plugins**, just like any plugin from wordpress.org.

## Installation

1. Download the latest release ZIP from [Releases](https://github.com/inkline-media/inkline-wp-resend/releases)
2. WP Admin → Plugins → Add New → Upload Plugin
3. Activate and configure under Settings → Resend

## License

GPLv2 or later — same as the upstream plugin.
