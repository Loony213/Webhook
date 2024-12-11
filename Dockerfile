# Usar la imagen base de PHP con Apache
FROM php:8.0-apache

# Copiar los archivos del proyecto a la carpeta del contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80

# Cambiar permisos de los archivos para Apache
RUN chown -R www-data:www-data /var/www/html/
