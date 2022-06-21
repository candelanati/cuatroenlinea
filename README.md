# cuatroenlinea - adaptación al ambiente de trabajo 2022
se detalla el paso a paso para poder jugar al cuatro en linea

## Requisitos:
- Docker desktop
- DDEV
- Composer


#### Descargas: 
- https://docs.docker.com/desktop/#download-and-install
- https://ddev.readthedocs.io/en/stable/#installation

###### (la instalación de composer se especifica más adelante)

## Paso a paso:
### 1. Clonar este repositorio:
primero tenemos que crear una carpeta donde vayamos a clonar el repositorio, en la ruta que deseemos. Creada esta carpeta abriremos la consola de windows, una vez en la consola, nos moveremos con el comando ```cd``` hacia la carpeta anteriormente creada, ```cd NombreDeCarpeta```, e ingresaremos el comando ```git clone https://github.com/candelanati/cuatroenlinea.git``` (no cerramos la consola).

### 2. Configurar DDEV:
1. En la consola usaremos nuevamente el comando cd pero esta vez para movernos hacia la carpeta cuatroenlinea. Usaremos ```cd cuatroenlinea```
2. Abrimos Docker desktop.
3. En la consola nuevamente, ingresamos ```ddev config```
###### Una vez ingresado el comando nos va a pedir un nombre para el proyecto (podemos cambiarlo), la ruta del mismo (dejamos la actual) y el tipo (```laravel```).
4. Iniciamos DDEV, ```ddev start```
5. 
