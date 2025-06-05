#!/bin/bash

# Wait for Lizmap to initialize files/folders (especially var/config)
sleep 3

# Copy your custom config files from mounted folder into Lizmap's config directory
cp -r /srv/config/* /var/www/webapp/var/config/

# Start all services (web server, QGIS server, etc.)
exec "$@"
