FROM 3liz/lizmap-web-client:3.8.10

# Optional: Custom plugin
COPY ./lizmap_server /var/www/webapps/qgis-server/plugins/lizmap_server

# Copy your QGIS projects
COPY ./projects /srv/projects

# Store your custom configs temporarily (we'll copy them later)
COPY ./lizmap-config /srv/config

# Add the custom entrypoint
COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Override entrypoint
ENTRYPOINT ["/entrypoint.sh"]

# Start supervisor
CMD ["supervisord", "-c", "/etc/supervisord.conf"]


