# ExF Practice Theme

A classic WordPress theme built as a ramp-up project for agency work.

## Stack

- **WordPress** — classic (non-block) theme with PHP templates
- **ACF** — custom fields for hero section and page content
- **Sass** — compiled via `npm run sass:build`, partials organized by component
- **Git** — feature branch workflow with pull requests

## Development

```bash
npm install
npm run sass:watch   # watch + compile on save
npm run sass:build   # one-time compressed build
```

## Theme Structure

```
exf-theme/
├── functions.php        # theme setup, asset enqueuing, nav menu registration
├── header.php           # opens HTML document, site header, nav
├── footer.php           # site footer, closes HTML document
├── front-page.php       # front page template, ACF field output
├── page.php             # default page template
├── sass/
│   ├── main.scss        # imports all partials
│   ├── _variables.scss  # colors, typography, spacing, breakpoints
│   ├── _mixins.scss     # respond-to(), flex-row()
│   ├── _base.scss       # reset, body, links, container
│   ├── _header.scss     # site header and nav
│   ├── _hero.scss       # hero section, background image modifier
│   ├── _content.scss    # content section typography
│   ├── _cards.scss      # card grid
│   └── _footer.scss     # site footer
└── css/
    └── main.css         # compiled output (do not edit directly)
```
