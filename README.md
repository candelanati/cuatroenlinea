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

### 3. Instalamos composer:
Para esto utilizaremos el comando ```ddev composer install```

### 4. Creamos un archivo de ambiente:
```cp .env.example .env```

### 5. Creamos una clave de aplicación:
```php artisan key:generate```

### 6. Correr el juego:
1. ```ddev start```. una vez ingresado este comando, nos devolvera 2 url. ingresando cualquiera de ellas en nuestro navegador veremos la pantalla default de laravel.
2. Para ingresar al juego debemos agregar, al final de la url, ```/jugar/1```

### 7. Cerrar el juego:
Ingresamos en la consola ```ddev poweroff``` y luego podemos cerrar Docker desktop. 

#### volver a jugar:
para volver a jugar solamente habria que volver a abrir Docker desktop y ejecutar en la consola: ```ddev start```
