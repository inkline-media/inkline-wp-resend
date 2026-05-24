=== Inkline Resend Mailer ===
Contributors:      inkline-media, cloudcatch, dkjensen
Tags:              resend, smtp, email, api
Tested up to:      6.9
Stable tag:        1.4.0
License:           GPLv2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
Requires PHP:      8.1
Requires at least: 6.0.0

Fork of "Send Emails with Resend" — respects wp_mail() sender when the domain matches the verified Resend domain; falls back to configured defaults otherwise.

== Description ==

This is Inkline Media's fork of the [Send Emails with Resend](https://wordpress.org/plugins/send-emails-with-resend/) plugin by CloudCatch LLC.

**Key difference from upstream:** The settings (From Name, From Email) are treated as *fallbacks*, not overrides.

* **From Name:** If the calling code (a plugin, theme, or `wp_mail()` headers) explicitly sets a sender name, that name is used. The settings value is only used when no name is provided (or when WordPress's default "WordPress" name would be sent).
* **From Email:** If the calling code sets a From address *and* its domain matches the verified Resend sending domain configured in settings, that address is used. Otherwise, the settings email is used to prevent bounces from non-verified domains.

**Auto-updates from GitHub:** The plugin checks for new releases at `inkline-media/inkline-wp-resend` and offers updates through the standard WordPress plugin updater.

== Attribution ==

Based on "Send Emails with Resend" v1.3.0 by CloudCatch LLC, licensed GPLv2+.
Resend.com API integration. Neither this plugin nor its authors are affiliated with Resend.com.

== Changelog ==

= 1.4.0 =
* Fork: From Name and From Email are now fallbacks, not overrides
* Fork: Settings labels updated to say "Fallback From Email" and "Fallback From Name"
* Feature: Auto-updates from GitHub releases (inkline-media/inkline-wp-resend)
* Upstream: All v1.3.0 features (scoped vendor namespaces via Strauss)

== Installation ==

1. Download the latest release ZIP from [GitHub Releases](https://github.com/inkline-media/inkline-wp-resend/releases).
2. In WP Admin → Plugins → Add New → Upload Plugin, upload the ZIP.
3. Activate the plugin.
4. Go to Settings → Resend and enter your API key, fallback From Email, and fallback From Name.
5. Deactivate any previous mailer plugin (SendGrid, Post SMTP, etc.).

== Frequently Asked Questions ==

= Will plugins that set a custom sender still work? =
Yes — that's the whole point of this fork. If a plugin (like WooCommerce, Gravity Forms, etc.) sets a From name or email, this plugin will respect it, as long as the email domain matches your verified Resend domain.

= What if a plugin tries to send from a non-verified domain? =
The plugin will silently fall back to your configured Fallback From Email to prevent delivery failures.
