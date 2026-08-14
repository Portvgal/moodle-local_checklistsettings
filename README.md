# Checklist settings

Checklist settings is a Moodle local plugin that provides a site administration
settings page for the Checklist advanced grading method plugin
(`gradingform_checklist`).

Some Moodle versions do not load `settings.php` files from advanced grading form
plugins. This companion plugin exposes the same administration settings through a
standard local plugin while storing all values in the `gradingform_checklist`
configuration namespace.

## Requirements

- Moodle 4.5 or later.
- Checklist advanced grading method plugin `gradingform_checklist` version
  `2026081200` or later.

## Installation

Install this plugin in:

```text
local/checklistsettings
```

Then visit the Moodle upgrade page or run the Moodle CLI upgrade command.

## Configuration

After installation, go to:

```text
Site administration > Grades > Grading methods > Checklist settings
```

The settings control Checklist feature availability, text limits, and defaults
for newly created checklist definitions. Existing checklist definitions are not
rewritten when these settings change.

If the Moodle site already loads the Checklist grading method's own settings
page, this companion plugin does not add a duplicate settings page.

## Data Storage

This plugin does not create database tables and does not store personal data. It
stores administrator configuration values in Moodle's plugin configuration table
using the `gradingform_checklist` component namespace so the Checklist advanced
grading method can read them directly.

## License

GNU GPL v3 or later.
