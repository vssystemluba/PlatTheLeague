#!/bin/bash

cd /home/mico2178/git_projects/PlatTheLeague/app/scripts/data_getters_and_app_builders
python get_all_champs.py
grunt build
cp -r /home/mico2178/public_html/app/scripts/button_actions/feedback /home/mico2178/git_projects/PlatTheLeague/app/scripts/button_actions
rm -rf /home/mico2178/public_html/app/*
cp -r ../../../dist/* /home/mico2178/public_html/app
cp -r ../../scripts/button_actions /home/mico2178/public_html/app/scripts
