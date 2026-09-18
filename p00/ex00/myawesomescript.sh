#!/bin/sh

# curl -s pour faire disparaitre les stats
# -I pour header only
# cut -d delimiteur -f occurence -c cut

curl -sI bit.ly/1O72s3U | grep "Location:" | cut -d ':' -f 2- | cut -c 2-


