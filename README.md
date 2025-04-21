# Proyecto Backend - Coningenio

Este proyecto corresponde a la Evaluación Unidad 1 del curso de **Desarrollo Backend**.  
Consiste en la creación de una API RESTful en PHP puro para una empresa de consultoría y desarrollo de software llamada **Coningenio**.

---


## 📋 Descripción del Proyecto

El backend permite:
- Consultar los **servicios** ofrecidos.
- Obtener información sobre la **empresa** (misión, visión y valores).
- Enviar un **formulario de contacto**.

La base de datos fue **simulada** usando **arreglos en PHP** para cumplir con los requisitos del proyecto.

---

## 🛠️ Tecnologías Utilizadas

- **PHP 8.2**
- **Servidor local XAMPP** (Apache)
- **Formato de respuesta JSON**
- **Postman** para pruebas manuales de la API

---

## 🏛️ Arquitectura del Proyecto

```
backend/
├── api/
│   ├── services.php
│   ├── about-us.php
│   └── contact.php
├── data/
│   ├── services.php
│   └── about-us.php
├── config/
│   └── headers.php
├── index.php
└── arquitectura.pdf
```

- `api/` → Lógica de los endpoints
- `data/` → Simulación de base de datos
- `config/` → Configuración de cabeceras HTTP
- `index.php` → Mensaje de bienvenida de la API

---

## 🚀 Instrucciones de Uso

1. Clonar o copiar el proyecto en la carpeta `C:\xampp\htdocs\backend`.
2. Iniciar **Apache** desde XAMPP Control Panel.
3. Probar los endpoints desde navegador o Postman.

Ejemplo de URL:
```
http://localhost/backend/api/services.php
```

---

## 🔗 Endpoints Disponibles

| Método | Endpoint                          | Funcionalidad                          |
|:------|:-----------------------------------|:--------------------------------------|
| GET    | `/api/services.php`                | Listado de servicios                   |
| GET    | `/api/about-us.php`                 | Información sobre la empresa          |
| POST   | `/api/contact.php`                  | Enviar formulario de contacto         |

---

## 📝 Notas Adicionales

- Todas las respuestas están en **español** (`esp`) como se solicitó.
- Se incluyó un control de errores para validar solicitudes incorrectas.
- No se usa una base de datos real (solo simulación en arrays).
- El proyecto incluye un documento PDF detallando la **lógica de arquitectura**.

---

**Estudiante:**  
Paulina Acuña
