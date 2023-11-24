# frobitz.app

An experimental headless multisite WordPress application to connect initially to a Gatsby frontend and in future Next.js - tested with [frontend.frobitz-app](https://github.com/hellorich/frontend.frobitz-app)

## External resources

[Trello Board](https://trello.com/b/XOKuPrBX/frobitzapp)

## Development requirements

1. Install Docker using [Lando](https://lando.dev/download)

### Wordpress CLI

A tooling route is set in the Lando config so Wordpress CLI can be used inside the app server. Documentation for Wordpress CLI can be found [here](https://make.wordpress.org/cli/handbook/).

## Production environment

Hosted on [Linode](https://www.linode.com) with server managed by [SpinUpWP](https://spinupwp.app)

### Wordpress CLI

You can run commands on the production server using Wordpress CLI's ssh capabilities. The prefix command is as follows and requires valid SSH access is set up.

```
wp --ssh=[username]@[servername][path/to/wordpress/root]
```

## Todo

- wp command is a requirement for the build script to run
- permissions on build script check
