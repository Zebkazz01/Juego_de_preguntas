# EmserKids

**EmserKids** es un juego de preguntas y respuestas inspirado en el famoso programa "¿Quién quiere ser millonario?". Este proyecto está diseñado para ser educativo y entretenido, ideal para niños y jóvenes que desean aprender mientras se divierten.

## Características

- **Preguntas de múltiples categorías**: Historia, Ciencia, Geografía, Matemáticas, y más.
- **Niveles de dificultad**: Desde preguntas fáciles hasta desafíos más complejos.
- **Sistema de pistas**: Ayudas como "50/50", "Llamada a un amigo" y "Pregunta al público".
- **Interfaz amigable**: Diseño intuitivo y atractivo para usuarios de todas las edades.
- **Puntuaciones y logros**: Guarda tus progresos y compite con amigos.

## Instalación

1. Descarga e instala [XAMPP](https://www.apachefriends.org/download.html).
2. Clona el repositorio:
    ```bash
    git clone https://github.com/tu_usuario/emserkids.git
    ```
3. Copia los archivos del proyecto al directorio `htdocs` de XAMPP:
    ```bash
    cp -r emserkids /caminio/a/tu/xampp/htdocs/
    ```
4. Inicia Apache y MySQL desde el panel de control de XAMPP.
5. Crea una base de datos en MySQL y configura el archivo de conexión en el proyecto:
    ```php
    // config.php
    $servername = "localhost";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "emserkids";
    ```
6. Importa el archivo SQL incluido en el proyecto para crear las tablas necesarias:
    ```sql
    mysql -u tu_usuario -p emserkids < /caminio/a/tu/xampp/htdocs/emserkids/database/emserkids.sql
    ```
7. Abre tu navegador y navega a `http://localhost/emserkids` para empezar a jugar.

## Contribuciones

¡Las contribuciones son bienvenidas! Si deseas colaborar, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -am 'Añadir nueva funcionalidad'`).
4. Sube tus cambios (`git push origin feature/nueva-funcionalidad`).
5. Abre un Pull Request.

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.

## Contacto

Para cualquier duda o sugerencia, puedes contactarnos a través de [correo electrónico](mailto:contacto@emserkids.com).

¡Esperamos que disfrutes jugando y aprendiendo con EmserKids!
