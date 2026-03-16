# Twentig One

Twentig One is a modern and powerful WordPress block theme designed for Full Site Editing. Featuring flexible templates, post formats, color presets, font pairings, and fluid typography & spacing, it's the ideal foundation for any project. Pair it with the free [Twentig plugin](https://wordpress.org/plugins/twentig/) for starter sites, patterns, and enhanced blocks to create a stunning website - no code needed.

[Theme Homepage](https://twentig.com/twentig-one) · [Try the Playground](https://twentig.com/playground)

![twentig-one-github](https://github.com/user-attachments/assets/a97cc743-88a4-4ef3-a772-77ee3d4e7a2d)

## Features

- Free WordPress block theme for Full Site Editing
- Custom page templates, transparent & sticky header
- Post formats: standard, gallery, video, audio, link
- 14 curated color presets & 20 curated font pairings
- Fluid typography & responsive spacing
- Portfolio-ready
- Optimized for performance & accessibility
- Translations: EN, FR, DE, NL, IT, ES
- [Starter sites](https://twentig.com/starter-sites/) & Onboarding Customizer (with the Twentig plugin enabled)

## Requirements

- WordPress 6.9+
- PHP 8.0+

## Installation

### Standard Installation

1. [Download the latest release.](https://github.com/twentig/twentig-one/releases/latest/download/twentig-one.zip)
2. In your WordPress dashboard, go to **Appearance > Themes**.
3. Click **Add Theme**, then click **Upload Theme**.
4. Click **Choose file** and select the `twentig-one.zip` file.
5. Click **Install Now**, then click **Activate**.

### Optional: Install the Twentig Plugin

To unlock starter sites, enhanced blocks, additional patterns, and portfolio tools, install the Twentig plugin. Once you've activated Twentig One, you'll be prompted to install it:

1. Click **Install Twentig**.
2. Click **Activate Plugin**.

### Local Development with WordPress Studio

If you use [WordPress Studio](https://developer.wordpress.com/studio/) - a free desktop app for local WordPress development - you can instantly launch a new local site with Twentig One and Twentig pre-installed.

[Open in Studio](https://wp.com/open?deep_link=add-site%3Fblueprint_url%3Dhttps%253A%252F%252Fraw.githubusercontent.com%252Ftwentig%252Fblueprints%252Fmain%252Fstudio-setup.json)

## Development

### Setup

```bash
git clone https://github.com/twentig/twentig-one.git
cd twentig-one
npm install
npm run build
```

### CSS Architecture

Twentig One uses `theme.json` for global styles, presets, typography, spacing, and editor settings, with additional CSS for theme-specific and block-specific styling.

In production, the theme loads minified CSS (`style.min.css`, `assets/css/**/*.min.css`). When `SCRIPT_DEBUG` is enabled in `wp-config.php`, unminified source files are used instead.

| File / Directory | Purpose |
|---|---|
| `theme.json` | Global styles, settings, typography, spacing, and presets |
| `style.css` | Main stylesheet source |
| `assets/css/` | Additional styles |
| `assets/css/blocks/` | Block-specific styles |

**Tip:** For customizations, prefer the Site Editor's **Additional CSS** over editing theme files directly.

### npm Commands

```bash
npm run build        # Compile & minify CSS and JS
npm run lint:css     # Lint CSS files
```

## Reporting Issues

Submit bugs and feature requests at [github.com/twentig/twentig-one/issues](https://github.com/twentig/twentig-one/issues).

## Resources

- [Theme Homepage](https://twentig.com/twentig-one)
- [Playground](https://twentig.com/playground)
- [Starter Sites](https://twentig.com/starter-sites/)
- [Quickstart Guide](https://twentig.com/quickstart-guide/)
- [Blog](https://twentig.com/blog/)
- [YouTube](https://www.youtube.com/channel/UCHZglgs5eTxkpRFl2r5RsGA)
- [Twitter](https://x.com/twentigcom)

## License

Licensed under [GPL-3.0-or-later](LICENSE.txt). Copyright © 2026 Twentig.
