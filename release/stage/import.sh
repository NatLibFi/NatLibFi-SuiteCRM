#!/bin/bash

DATE=$(date "+%Y%m%d")
BACKUP_FILE=/var/aski/import/askistagedb-${DATE}.sql.bz2
DUMP_FILE=/var/aski/dump/askidb-${DATE}.sql.bz2
DUMP_COPIED_FILE=/var/aski/import/askidb-${DATE}.sql.bz2

mysqldump --defaults-extra-file=/var/aski/import/import.cnf suitecrm | bzip2 > ${BACKUP_FILE}
echo "Staging database backed up as: ${BACKUP_FILE}"

ssh -A aski-kk "/var/aski/dump/dump.sh"
scp aski-kk:${DUMP_FILE} ${DUMP_COPIED_FILE}
ssh -A aski-kk "rm ${DUMP_FILE}"

bzcat ${DUMP_COPIED_FILE} | mysql --defaults-extra-file=/var/aski/import/import.cnf -D suitecrm
echo "Imported ${DUMP_COPIED_FILE}"
