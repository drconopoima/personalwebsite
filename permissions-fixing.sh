#!/bin/sh
chown -R drconopoima.com:drconopoima.com .
find . -type f | xargs chmod 664
find ./bin -type f | xargs chmod 775
find . -type d | xargs chmod 775
find . -type d | xargs chmod +s
