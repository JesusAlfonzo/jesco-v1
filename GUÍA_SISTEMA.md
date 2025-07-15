# Guía General del Sistema Jesco

## 1. Mapa de Navegación

```
[Inicio / Dashboard]
      |
      |-- Catálogo de Módulos
      |      |-- Departamentos
      |      |-- Empleados 
      |      |-- Proveedores
      |      |-- Cotizaciones
      |      |-- Órdenes de Compra
      |      |-- Solicitudes de Compra
      |      |-- Monedas
      |      |-- Impuestos
      |      |-- Tipos de Impuestos
      |      |-- Laboratorio
      |      |-- Pacientes
      |      |-- Reportes
      |      |-- Solicitudes de Almacén
      |      |-- Contactos de Proveedores
      |
      |-- Perfil de Usuario / Logout
      |
      |-- Accesos rápidos (paneles, estadísticas, reportes)
```

---

## 2. Tabla de Rutas Recomendadas por Módulo

| Módulo                | Listado (index)         | Detalle (show)         | Crear (create)         | Editar (edit)          |
|-----------------------|------------------------|------------------------|------------------------|------------------------|
| Departamentos         | /departamentos         | /departamentos/{id}    | /departamentos/create  | /departamentos/{id}/edit |
| Empleados             | /empleados             | /empleados/{id}        | /empleados/create      | /empleados/{id}/edit     |
| Proveedores           | /proveedores           | /proveedores/{id}      | /proveedores/create    | /proveedores/{id}/edit   |
| Cotizaciones          | /cotizaciones          | /cotizaciones/{id}     | /cotizaciones/create   | /cotizaciones/{id}/edit  |
| Órdenes de Compra     | /orden-compra          | /orden-compra/{id}     | /orden-compra/create   | /orden-compra/{id}/edit  |
| Solicitudes de Compra | /solicitud-compra      | /solicitud-compra/{id} | /solicitud-compra/create | /solicitud-compra/{id}/edit |
| Monedas               | /monedas               | /monedas/{id}          | /monedas/create        | /monedas/{id}/edit        |
| Impuestos             | /impuesto-compra       | /impuesto-compra/{id}  | /impuesto-compra/create | /impuesto-compra/{id}/edit |
| Tipos de Impuestos    | /tipo-impuesto         | /tipo-impuesto/{id}    | /tipo-impuesto/create  | /tipo-impuesto/{id}/edit  |
| Laboratorio           | /laboratorio           | /laboratorio/{id}      | /laboratorio/create    | /laboratorio/{id}/edit    |
| Pacientes             | /pacientes             | /pacientes/{id}        | /pacientes/create      | /pacientes/{id}/edit      |
| Reportes              | /reportes              | /reportes/{id}         | /reportes/create       | /reportes/{id}/edit       |
| Solicitudes de Almacén| /solicitud-almacen     | /solicitud-almacen/{id}| /solicitud-almacen/create | /solicitud-almacen/{id}/edit |
| Contactos Proveedores | /contacto-proveedor    | /contacto-proveedor/{id}| /contacto-proveedor/create | /contacto-proveedor/{id}/edit |

---

## 3. Ejemplo de Relaciones Entre Tablas

- **Empleado** pertenece a un **Departamento**:
  - `empleados` tabla tiene `departamento_id`
- **Departamento** tiene muchos **Empleados**:
  - Relación: `hasMany`
- **Proveedor** tiene muchos **Contactos** y **Cotizaciones**
- **Cotización** pertenece a un **Proveedor** y a una **Solicitud de Compra**
- **Orden de Compra** pertenece a una **Cotización**, **Moneda**, **Proveedor**
- **ImpuestoCompra** pertenece a una **OrdenCompra** y a un **TipoImpuesto**
- **SolicitudCompra** pertenece a un **Departamento** y a un **Usuario**

---

## 4. Organización Sugerida de Vistas

- **Navbar**: Inicio, Catálogo, Perfil, Logout
- **Sidebar (opcional)**: Accesos rápidos a módulos frecuentes
- **Dashboard**: Estadísticas, accesos rápidos, reportes
- **Catálogo**: Tarjetas de acceso a cada módulo
- **CRUD por módulo**: Listado, detalle, crear, editar

---

**Esta guía te ayudará a visualizar y organizar todo el potencial de tu sistema Jesco. Puedes ampliarla y actualizarla según evolucione tu proyecto.**
