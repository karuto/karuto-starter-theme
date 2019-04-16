# karuto-starter-theme

WordPress theme that serves as the parent theme for all the websites I made.

## Philosophies
### Keep it simple stupid
Avoid complexity like plague. Let's not introduce any fancy technologies if they don't bring in significant benefits. C'mon, all we want is to serve some HTML files in the most straight-forward way possible.
### Plug and play
No build process should be involved in the production environment. Ideally, we should just dump the files in the server and we are good to go.
### Flexibility
The theme should hit a sweet spot between opinionated and flexible. We prioritize the support for child themes, since it's a starter theme, it should be easy to modify and extend.
### Developer experience focused
The theme should be pleasant to work on. The code should be straight-forward to pick up, with plenty documentation, and the build-testing cycle should be smooth.
### Clean folder structure
Avoid clutter like plague. The root level should contain only global config and the absolutely necessary files. Assets, templates and functions are all isolated and contained with the right abstraction layer.

## Getting started
### Prerequisites
This project requires node 8 and npm 4.
### Helpful commands
#### Install dependencies
```bash
npm install
```

#### Compile CSS
```bash
npm run build
```
Once the CSS is built, it stays there, you shouldn't need to run this again in production environment. 

If your node version has changed, please remember to `npm rebuild node-sass`, otherwise the command would fail.

#### Live reload CSS
```bash
npm run watch
```
This is made possible by `chokidar`, a Node.js filestream watcher.

## Description
This theme is a very opinionated fork of Twenty Nineteen, the WordPress official theme, initially released on Dec 2018.

Original description from WordPress:

Our 2019 default theme is designed to show off the power of the block editor. It features custom styles for all the default blocks, and is built so that what you see in the editor looks like what you'll see on your website. Twenty Nineteen is designed to be adaptable to a wide range of websites, whether you’re running a photo blog, launching a new business, or supporting a non-profit. Featuring ample whitespace and modern sans-serif headlines paired with classic serif body text, it's built to be beautiful on all screen sizes.

## Child themes
[WordPress official documentation on child themes] is your best friend here. 

In short:
1. Create a folder named `karuto-starter-theme-child-{suffix}`; the suffix could be whatever you like.
2. Follow the guidelines on creating a [child theme stylesheet.](https://developer.wordpress.org/themes/advanced-topics/child-themes/#2-create-a-stylesheet-style-css)
3. Follow the guidelines on creating a [child theme `functions.php`.](https://developer.wordpress.org/themes/advanced-topics/child-themes/#3-enqueue-stylesheet)
4. Activate the child theme in the dashboard.