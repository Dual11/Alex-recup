# IMPLEMENTATION.md

## 1. Datos del Alumno

**Nombre completo:** [Wilmer Alexander Tobar Teletor]

---

## 2. Entorno LOCAL

### Descripción
[Breve descripción de qué servicios corren en LOCAL: base de datos MySQL, frontends con hot reload, backend desde IDE, phpMyAdmin]

### Capturas de Ejecución

**⚠️ IMPORTANTE:** Añade todas las capturas que consideres necesarias. Cuanto más completo esté este documento, mejor puntuación obtendrás.

**Docker containers corriendo:**

# Explicacion en caso de no ser preciso
- He creado los docker file para los dos frontend
- Luego he creado el local.properties con la base de datos en local
- Luego he creado a el docker-compose para crear los 4 servicios necesarios
- para cada uno 
- Como hemos visto en la captura los acepta y los muestra, desde el contenendor

![Docker PS Local](imgLocal/frontend_stranger.png)


**Frontend Stranger Things funcionando:**
 He creado su Dockerfile, en el frontend, para crear su contenedor
 Tambien se puede ver el puerto que se ha utilizado
![Frontend Stranger Local](imgLocal/Contenedores.png)
En esta captura, podemos ver como el contenedor esta funcionando 

**Frontend House of the Dragon funcionando:**

![Frontend Dragon Local](imgLocal/frontend_dragon.png)

**Backend API funcionando (Postman/navegador):**
Aqui podemos ver como el frontend esta funcionando y el puerto

![Backend Local API](imgLocal/Contenedores.png)
aqui podemos ver como esta corriendo el contenedor y su puerto

**phpMyAdmin con datos cargados:**

![phpMyAdmin Local](imgLocal/phpMyAdmin.png)

Aqui podemos ver como lo esta corriendo y el puerto

**[Añade aquí más capturas que consideres relevantes]**

### URLs de Acceso
- Frontend Stranger: `http://localhost:8084`
- Frontend Dragon: `http://localhost:8087`
- Backend: `http://localhost:8080`
- phpMyAdmin: `http://localhost:8085`
- MySQL: `localhost:3306`

---

## 3. Entorno PRE

### Descripción
[Breve descripción de qué servicios corren en PRE: backend, frontends en contenedores y base de datos remota MariaDB SkySQL]

### Configuración MariaDB SkySQL

**⚠️ IMPORTANTE:** Incluye capturas del dashboard de MariaDB SkySQL y la configuración de conexión.


He cambiado el pre.propertiens con los datos de skysql, para conectadorlo con mariba db pero no s
se ha conseguido

**Dashboard MariaDB SkySQL:**

![MariaDB SkySQL Dashboard](images/pre-mariadb-dashboard.png)

**Datos de conexión utilizados:**

![MariaDB Connection Details](images/pre-mariadb-connection.png)

**Connection String utilizado:**
```
jdbc:mysql://serverless-us-east4.sysp0000.db2.skysql.com:4043/series?useSSL=true&requireSSL=true
HE USADO ESTO
con el puerto que me dio
jdbc:mysql://serverless-us-central1.sysp0000.db2.skysql.com:4095/series?useSSL=true&requireSSL=true
aunque no 
```

**Tablas y datos en MariaDB SkySQL:**

![Datos en MariaDB](imgLocal/docker_pre.png)

esta es la unica captura de los contenedores
los servicios si funcionaron, pero la api de hacia maria db se no se mantenia

Las URL
de los servicos para maria db, si se mantenian en el contenedor docker
el unico problema fue a base de datos

### Capturas de Ejecución

**Docker containers corriendo:**

![Docker PS PRE](images/pre-docker-ps.png)

**Frontend Stranger Things funcionando:**

![Frontend Stranger PRE](images/pre-frontend-stranger.png)

**Frontend House of the Dragon funcionando:**

![Frontend Dragon PRE](images/pre-frontend-dragon.png)

**API funcionando (Postman/navegador):**

![API PRE](images/pre-backend-api.png)

**Logs del backend conectándose a MariaDB:**

![Logs Backend PRE](images/pre-backend-logs.png)

![Imagenes_servico](imgLocal/docker_service.png)
# Esta es lo que si hubiera conectado se hubiera visto
ya que la configuracion funciona
**[Añade aquí más capturas que consideres relevantes]**

### URLs de Acceso
- Frontend Stranger: `http://localhost:XXXX`
- Frontend Dragon: `http://localhost:XXXX`
- Backend: `http://localhost:XXXX`

---

## 4. Despliegue en Render


### URLs Públicas de los Servicios

**⚠️ CRÍTICO:** Las URLs públicas y las capturas de configuración de Render son OBLIGATORIAS y muy importantes para la puntuación.

**Backend API:**
- URL: `https://series-backend-XXXXX.onrender.com`

**Frontend Stranger Things:**
- URL: `https://series-frontend-stranger-XXXXX.onrender.com`

**Frontend House of the Dragon:**
- URL: `https://series-frontend-dragon-XXXXX.onrender.com`

### Capturas de Render

**Dashboard con listado de servicios desplegados:**

![Render Services Dashboard](images/render-services.png)

### Configuración Backend en Render

**Configuración general del servicio backend:**

![Render Backend Config](images/render-backend-config.png)

**Variables de entorno - Backend:**

![Variables Backend Render](images/render-backend-vars.png)

**Build logs del backend:**

![Backend Build Logs](images/render-backend-build.png)

**Logs de ejecución del backend:**

![Backend Runtime Logs](images/render-backend-logs.png)

### Configuración Frontend Stranger en Render

**Configuración general del servicio:**

![Render Frontend Stranger Config](images/render-frontend-stranger-config.png)

**Variables de entorno - Frontend Stranger:**

![Variables Frontend Stranger](images/render-frontend-stranger-vars.png)

**Build logs:**

![Frontend Stranger Build Logs](images/render-frontend-stranger-build.png)

### Configuración Frontend Dragon en Render

**Configuración general del servicio:**

![Render Frontend Dragon Config](images/render-frontend-dragon-config.png)

**Variables de entorno - Frontend Dragon:**

![Variables Frontend Dragon](images/render-frontend-dragon-vars.png)

**Build logs:**

![Frontend Dragon Build Logs](images/render-frontend-dragon-build.png)

### Aplicación Funcionando en Producción

**Frontend Stranger Things (URL pública):**

![App Stranger Funcionando](images/render-app-stranger.png)

**Frontend House of the Dragon (URL pública):**

![App Dragon Funcionando](images/render-app-dragon.png)

**API funcionando (Postman/navegador - URL pública):**

![API Funcionando](images/render-api-funcionando.png)

**Prueba de endpoints con datos reales:**

![API Endpoints Test](images/render-api-test.png)

**[Añade aquí todas las capturas adicionales que consideres relevantes]**

---

## 5. Notas Adicionales

**⚠️ TIP:** Documenta aquí cualquier aspecto relevante de tu implementación, errores encontrados y cómo los solucionaste, o decisiones técnicas importantes.

### Nota 1

**Descripción:**
[Describe algún problema, solución o decisión técnica importante]

**Captura (opcional):**

![Nota 1](images/nota-1.png)

---

### Nota 2

**Descripción:**
[Describe algún problema, solución o decisión técnica importante]

**Captura (opcional):**

![Nota 2](images/nota-2.png)

---

### [Añade más notas si es necesario]

---

## 6. Reflexión Personal

**¿Qué te ha parecido el examen? ¿Qué has aprendido? ¿Qué ha sido lo más difícil?**

[Escribe aquí tu reflexión personal sobre el examen]

---

## ⚠️ RECORDATORIO IMPORTANTE

**Cuanto más completo esté este documento, mejor será tu puntuación.**

---