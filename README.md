# Proyecto MVC en PHP

## Requisitos
- XAMPP o Laragon
- MySQL
- Navegador web

## Pasos
1. Copiar la carpeta `mvc-app` en `C:\xampp\htdocs\`.
2. Crear la base de datos `web2` en phpMyAdmin:
   ```sql
   CREATE TABLE usuarios (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nombre VARCHAR(100)
   );
