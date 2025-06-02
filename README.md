# Starter WordPress Theme

This repository contains a minimal starter theme for WordPress.

Gallery images for the front page slider should be placed in `assets/images/`.

## Setup locally

1. Clone this repository into the `wp-content/themes` directory of your local WordPress installation.

```bash
git clone <repo-url> starter-theme
```

2. Activate **Starter Theme** from the WordPress admin panel.

## Build and upload

To deploy the theme to another WordPress site, create a zip archive and upload it via the WordPress admin interface.

```bash
zip -r starter-theme.zip * -x .git\* README.md
```

Upload the generated `starter-theme.zip` file through **Appearance → Themes → Add New → Upload Theme**.

