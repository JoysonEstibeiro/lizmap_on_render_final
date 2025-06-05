;<?php die(''); ?>
;for security reasons , don't remove or modify the previous line

;Services
;list the different map services (servers, generic parameters, etc.)
[services]
;URL to QGIS Server for OGC web services
wmsServerURL="http://map:8080/ows/"
;WMS subdomain URLs list (optional)
wmsPublicUrlList=
;URL to the API exposed by the Lizmap plugin for QGIS Server if needed
lizmapPluginAPIURL="http://map:8080/lizmap/"

onlyMaps=0
defaultRepository=
defaultProject=

; cache configuration for tiles
cacheStorageType=redis
;cacheStorageType=sqlite => store cached images in one sqlite file per repo/project/layer
;cacheStorageType=file => store cached images in one folder per repo/project/layer. The root folder is /tmp/
;cacheStorageType=redis => store cached images through redis
cacheRedisHost=redis
cacheRedisPort=6379
cacheRedisDb=1
cacheRedisKeyPrefix=

; default cache expiration : the default time to live of data, in seconds.
; 0 means no expiration, max : 2592000 seconds (30 days)
cacheExpiration=0

; debug mode
; on = print debug messages in lizmap/var/log/messages.log
; off = no lizmap debug messages
debugMode=0
; cache root directory where cache files will be stored
; must be writable
cacheRootDirectory="/tmp/"

; path to find repositories
;rootRepositories="path"

; path to find the QGIS projects private data
; created by Lizmap or other tools, related to Qgis projects
; if empty, rootRepositories is used.
qgisProjectsPrivateDataFolder=

; Does the server use relative path from root folder? 0/1
;relativeWMSPath=0

rootRepositories="/srv/projects"
relativeWMSPath=on

[repository:franceparts]
label="France parts"
path="/srv/projects/france_parts/"
allowUserDefinedThemes=0
accessControlAllowOrigin=

[repository:data]
label=Data
path="/srv/projects/data/"
allowUserDefinedThemes=0
accessControlAllowOrigin=

[repository:customrepository]
label="Custom repository"
path="/srv/projects/custom_repository/"
allowUserDefinedThemes=0
accessControlAllowOrigin=
