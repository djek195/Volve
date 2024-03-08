#!/bin/bash

plugins=$(cat plugins.txt)

IFS=$'\n' read -rd '' -a plugins <<< "$plugins"

for plugin in "${plugins[@]}"
do
    IFS="|" read -ra plugin_data <<< "$plugin"
    plugin_name=$(echo "${plugin_data[0]}" | tr -d '[:space:]')
    if [ -z "${plugin_data[1]}" ]; then
        wp plugin install "$plugin_name" --activate --force
    else
        plugin_data[1]=$(echo "${plugin_data[1]}" | tr -d '[:space:]')
        wp plugin install "$plugin_name" --activate --version="${plugin_data[1]}" --force
    fi
done