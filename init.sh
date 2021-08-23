#!/bin/bash
apk update && apk add --upgrade nano;
rm /etc/apk/repositories;
mv repositories /etc/apk/;
apk update;
apk add docker docker-compose
