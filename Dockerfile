FROM 3liz/lizmap-web-client:3.8.10

# Optional: custom plugin
COPY ./lizmap_server /var/www/webapps/qgis-server/plugins/lizmap_server

# Let the image initialize FIRST (this happens at container start)
# Then override project and config folders
# So we move the override COPY to an entrypoint script or CMD level

# Instead of copying config in Dockerfile, mount it at runtime via volumes (or use startup script)

COPY ./projects /srv/projects

# ADD custom entrypoint script
COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
CMD ["supervisord", "-c", "/etc/supervisord.conf"]

