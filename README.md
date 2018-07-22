# karu-theme

This repo stores the WordPress theme that runs on [Vincent Zhang's personal website.](http://vincentzh.com)

## Getting started

This project is built on top of a legacy version of [Sage version 8.](https://github.com/karuto/sage)

### Development

See [Sage documentation.](https://github.com/karuto/karu-theme/blob/master/README-sage.md#theme-development)

### Deployment

1. Disable current theme in WordPress dashboard and backup the database.
2. Log in to VPS with info [here](https://bitbucket.org/karuto/sysadmin/src), credentials required.
3. Run [this script](https://github.com/karuto/sysadmin-notes/blob/master/theme-sync.sh) inside the home directory of VPS.
4. Switch to new theme in WordPress dashboard and run integrity checks.
