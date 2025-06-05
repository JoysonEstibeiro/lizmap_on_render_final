FROM 3liz/lizmap-web-client:3.8.10

# Copy QGIS projects
COPY ./projects /srv/projects

# Copy Lizmap Web Client configuration (optional)
COPY ./lizmap-config /var/www/webapp/var/config

# Copy Lizmap Server plugin (manually added)
COPY lizmap_server /usr/lib/python3/dist-packages/lizmap_server
