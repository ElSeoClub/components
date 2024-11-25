# elseoclub/components

Este paquete proporciona una colección de componentes reutilizables para aplicaciones Laravel, diseñado para facilitar el desarrollo de aplicaciones web modernas.

## Instalación

Puedes instalar el paquete utilizando Composer. Asegúrate de tener Composer instalado y ejecuta el siguiente comando:

```bash
composer require elseoclub/components
```

## Requisitos

- PHP >= 8.0
- Laravel >= 9.0

## Uso

Después de instalar el paquete, puedes utilizar los componentes disponibles directamente en tus vistas de Blade.

Ejemplo de uso de un componente:

```blade
<x-elseoclub::button type="primary">
    Click Me
</x-elseoclub::button>
```

Consulta la [documentación completa](https://dos.grupobahez.com) para obtener más ejemplos y detalles sobre cómo configurar y utilizar cada componente.

## Configuración Opcional

Puedes publicar el archivo de configuración del paquete utilizando el siguiente comando:

```bash
php artisan vendor:publish --tag=elseoclub-config
```

Esto te permitirá personalizar algunas opciones para adaptar los componentes a las necesidades de tu proyecto.

## Contribuir

Si deseas contribuir a este paquete, por favor, envía un pull request en el repositorio oficial de GitHub. Se recomienda seguir las mejores prácticas de Laravel y PHP.

## Licencia

Este paquete está bajo la licencia MIT. Consulta el archivo `LICENSE` para obtener más detalles.
