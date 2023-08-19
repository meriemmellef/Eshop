# Total drive




# Requirement
- Docker
- docker-compose

# How to Use

All version and build/test/release commands are available in `Makefile`.

## Use
## Docker image
- create .env file
```sh
$ cp .env.dist .env
```

- Start total drive image
```sh
$ docker-compose up -d
```

# Install dependencies via composer
- docker list, get the php container name
```sh
$ docker ps
```
- Execute commande into docker image to install bundles and init writable folders
```sh
$ docker exec -it <container_name>  sh -c "COMPOSER_MEMORY_LIMIT=-1 composer install && chmod -R 777 app/cache/ app/logs/ && mkdir -p web/uploads/produits web/uploads/commandes web/uploads/condition_vente && chmod 777 -R  web/uploads/"
```

- cp app/config/parameters.yml.dist app/config/parameters.yml  or accept default value shown by composer install
- Import database
- phpmyadmin : http://localhost:8181
- app : http://localhost:8888



# How to
- Execute commande into docker image
```sh
$ docker exec -it <container_name>  sh -c "<commande"
```

- Open terminal into docker image
```sh
$ docker exec -it <container_name>  sh
```

- generate entities or update getter and setter for existante entity
```sh
$  php app/console doctrine:generate:entities WebBundle:<EntityName>
```

- Upgrade to new database version
> execute commande into docker php image
```sh
$  php app/console doctrine:migrations:diff
```
```sh
$  php app/console doctrine:migrations:migrate
```

# Environment variables
(*): required.

# Contribute
## Commits
This repository uses [Convensional Commits style
commits](https://www.conventionalcommits.org/en/v1.0.0/) to manage versioning
and changelog generation. Changelog is auto generated via CI using
[semantic-release](https://github.com/semantic-release/semantic-release).

## Release
Release tags and description are sourced from the release branch. To generate a
new release, just update the `release` branch with the latest code from master
(for new features) or a hotfix branch. The CI pipeline will take care of
running semantic-release on the branch.
