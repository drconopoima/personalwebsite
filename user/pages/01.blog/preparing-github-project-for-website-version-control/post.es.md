---
title: Preparación de un proyecto Github para el control de versiones de mejoras y correcciones de errores en el tema Cacti de Grav
date: 13:43 20-07-2018
headline: Hacer un fork de un proyecto, actualización a la última versión publicada y preparación de una rama de desarrollo personalizada.
taxonomy:
    category: blog
    tag: [grav, tema, skeleton, cacti, desarrollo, solución de problemas, git, github, sincronizar, repositorio, control de versiones]
---

Ser capaz de hacer control de versiones fácilmente es una de las ventajas más convincentes de usar un CMS de archivo plano, así que decidí usar Grav para poder mantener un buen control de versiones de mi sitio web.

Quería hacer este blog multilingüe inglés/español, así que probé el esqueleto *MultiLang* y me di cuenta de que me gustaría hacer algunos cambios en el tema incluido con él (*Cacti*). Había algunos errores en el tema incluido que quería resolver y también me imaginé que el seleccionador de idioma podría ser mejorado para mejorar la experiencia.

Para crear un repositorio para las personalizaciones al tema para mi sitio web, empecé por hacer un fork al [proyecto GitHub para el tema Cacti](https://github.com/getgrav/grav-theme-cacti). Luego cloné localmente el repositorio en mi PC Linux con la CLI de git.

>~$ `git clone https://github.com/drconopoima/grav-theme-cacti`

Dado que la fecha de la última sincronización en el fork del proyecto oficial (agosto de 2016) era previa a la fecha de la última actualización del [esqueleto MultiLang (julio de 2018)](https://getgrav.org/downloads/skeletons), decidí comprobar si se habían aplicado cambios al tema *Cacti* utilizado en comparación con la última versión en Github. Usé el comando diff Linux para comparar y averiguarlo:

>~$ `diff -r ./grav-theme-cacti ./grav-skeleton-multilang-site/user/themes/cacti/ | grep ./grav-theme-cacti/ | awk '{print $4}' > differences.txt`

El resultado fue la lista de archivos que habían sido actualizados en el tema en comparación con la última versión en GitHub.

Por otro lado, después de recuperar los archivos que eran diferentes, revisé los cambios lado a lado usando el editor de texto Atom con la extensión útil [split diff](https://atom.io/packages/split-diff) que resalta las diferencias y te permite recorrerlas.

Para facilitar las últimas modificaciones oficiales tal y como vinieron del esqueleto de GetGrav.org, primero apliqué estas modificaciones localmente y procedí a enviar estos archivos a la rama de desarrollo (*develop*) en mi fork en Github:


> ~$ `git init`
> <br>~$ `git branch` // Comprueba la rama activa. La salida debe indicar todas las ramas, con {c:azul}&ast;develop{/c} resaltada como activas
> <br>~$ `git checkout develop` // si develop no es la rama activa

Luego, apliqué los cambios que se encontraron usando diff (que están en la lista de abajo). Para añadir los ficheros editados para su sincronización:

> ~$ `git add` `css/style.css`
> <br>`languages.yaml`
> <br>`templates/partials/base.html.twig`
> <br>`templates/partials/disqus.html.twig`
> <br>`templates/post.html.twig`

Alternativamente, puede usar este comando para añadir todos los ficheros en el repositorio:

> ~$ `git add .`

Puede comprobar que reconoce que los archivos fueron editados, mediante la utilización del siguiente comando:

> ~$ `git status`

La salida debería listar los archivos que fueron cambiados y confirmar que están en la rama de desarrollo.

Para sincronizar los cambios:

> ~$ `git commit -m "Theme official updates up to July 2018`

Para enviar los cambios al repositorio:

> ~$ `git push`

Procedí a fusionar las ramas de desarrollo y *master*. Es una buena práctica comenzar por fusionar la rama *master* en la rama de desarrollo, para poder identificar y resolver cualquier problema que pueda surgir. Después, es seguro fusionar *development* en la principal. Hacerlo de esta manera asegura que la rama principal permanezca limpia.

> <br>~$ `git merge master` // fusionar master en develop
> <br>~$ `git checkout master` // cambiar a la rama master
> <br>~$ `git merge develop` // fusionar develop en master

Luego creé una nueva rama personalizada para las correcciones de errores que quería hacer:

> ~$ `git branch themebugfixes`

Y cambié a la rama personalizada.

> ~$ `git checkout themebugfixes`

Después de crear la nueva rama local, la sincronicé como una nueva bifurcación al repositorio de Github:

> ~$ `git push origin themebugfixes`

Voy a terminar este artículo aquí para que sirva como una guía sobre el control de versiones y voy a crear artículos separados para las correcciones y mejoras que implementé en el tema.
