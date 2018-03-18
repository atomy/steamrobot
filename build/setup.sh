#!/bin/bash

set -e

# directory setup
chmod -R 777 log/

docker build -t atomy/steamrobot -f build/docker/php/Dockerfile .

build/bin/composer install

echo "Configuring... DONE"
echo "ALL DONE"