# Toggle HTML Comments

Hide or show HTML comments in your Kirby templates using a simple helper function: `comment()`.

## Installation

### Composer

```bash
composer require nielsnicola/kirby-hide-html-comments
```

### Git submodule

```bash
git submodule add https://github.com/nielsnicola/kirby-hide-html-comments.git site/plugins/kirby-hide-html-comments
```

### Manual installation

Download this repository and place it in: 
```bash
site/plugins/kirby-hide-html-comments
```

---

## Options

Add one config option to control the output of HTML comments:

| Option         | Default | Description                                                                           |
| :------------- | :------ | :------------------------------------------------------------------------------------ |
| `nielsnicola.hide-html-comments.enabled` | `true` | `true` hides all comments; `false` shows comments in the DOM |

---

## Usage

Once installed, you can use the global `comment()` helper in any template:

```php
<?php comment('Hero section starts'); ?> // 
<div class="hero">
  ...
</div>
<?php comment('Hero section ends'); ?>
```

### Config example

```php
// site/config/config.php
return [
    'nielsnicola.hide-html-comments.enabled' => true, // Set to false to show HTML comments
];
```

* When `enabled` is `true`, `comment()` outputs nothing
* When `enabled` is false, `comment()` outputs standard HTML comments in the DOM.