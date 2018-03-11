#!/bin/bash

BRANCH_NAME=$1

if [ -z "${BRANCH_NAME}" ];
then
    echo "Usage: ./$0 test|staging|production"
    exit 1
fi

SUITECRM_DIR=/var/www/html/SuiteCRM

if [ ! -d ${SUITECRM_DIR} ];
then
    SUITECRM_DIR=/var/www/html/suitecrm
    if [ ! -d ${SUITECRM_DIR} ];
    then
        echo "SuiteCRM directory not found. Neither /var/www/html/SuiteCRM neither /var/www/html/suitecrm exist."
        exit 1
    fi
fi

cd ${SUITECRM_DIR}

git fetch

git checkout ${BRANCH_NAME}
if [[ $? != 0 ]];
then
    exit $?
fi

git pull origin ${BRANCH_NAME}
if [[ $? != 0 ]];
then
    exit $?
fi

php release/importCustomFields.php custom/fieldDefinitions/custom-fields.sug

php release/repair.php

cd -
