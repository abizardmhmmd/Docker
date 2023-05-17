#!/bin/bash

echo 'armovies' | docker secret create mysql_root_password -
docker stack deploy -c armovies.yml widan --with-registry-auth
