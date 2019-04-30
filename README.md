ClipApp
========

ClipApp is Vidiun Clipping and Trimming application. The app allows you to trim and clip Vidiun entries.

## Installtation 

#### Standalone

1. Clone this repo into web accessible folder such as ```htdocs``` or ```www```
2. Edit ```config.php``` with your Vidiun credentials.
3. Open your browser at: ```http://localhost/clipapp/index.php?entryId={YOUR ENTRY ID HERE}``` 

#### In Vidiun Managment Console (VMC)

1. Download specific tag into ```/opt/vidiun/apps/clipapp/{version}```
2. Rename ```config.vmc.php``` to ```config.local.php``` run: 

  ```
  mv config.vmc.php config.local.php
  ```
3. Open VMC -> Entry Drilldown -> Trim / Clip
