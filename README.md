# PyroCMS Https Redirect Plugin

This is a simple plugin that allows you to redirect to https. 

## Installation

Copy https.php to your addons/SITE_REF/plugins or addons/shared_addons/plugins folder.

## Usage


Redirects to https if option set in the admin section
```
{{ https:redirect }}
```

Forces https if viewing page http
```
{{ https:force }}
```