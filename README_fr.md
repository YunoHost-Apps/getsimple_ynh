# GetSimple pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/getsimple.svg)](https://dash.yunohost.org/appci/app/getsimple) ![](https://ci-apps.yunohost.org/ci/badges/getsimple.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/getsimple.maintain.svg)  
[![Installer GetSimple avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=getsimple)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer GetSimple rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

GetSimple is an XML based, stand-alone, fully independent and lite Content Management System. To go along with its best-in-class user interface, we have loaded it with features that every website needs, but with nothing it doesn't. GetSimple is truly the simplest way to manage a small-business website.

### Features

- XML Based
- You can "Undo" Almost Everything
- Easy to Learn UI
- Simple Installation
- Simple Theme Customization
- Designed For the Small-Site Market

**Version incluse :** 3.3.16~ynh1

**Démo :** https://demo.example.com

## Captures d'écran

![](./doc/screenshots/screenshot_editpage.png)

## Avertissements / informations importantes

From a web browser, navigate to the folder where you just uploaded GetSimple to. You will need to navigate to the admin subdirectory `/admin`. This will redirect you to an install screen. (e.g `mydomain.tld/admin` or `mydomain.tld/path-to-get-simple/admin`) 

## Documentations et ressources

* Site officiel de l'app : http://get-simple.info/
* Documentation officielle de l'admin : http://get-simple.info/wiki/fr:start
* Dépôt de code officiel de l'app : https://github.com/GetSimpleCMS/GetSimpleCMS
* Documentation YunoHost pour cette app : https://yunohost.org/app_getsimple
* Signaler un bug : https://github.com/YunoHost-Apps/getsimple_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/getsimple_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/getsimple_ynh/tree/testing --debug
ou
sudo yunohost app upgrade getsimple -u https://github.com/YunoHost-Apps/getsimple_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps