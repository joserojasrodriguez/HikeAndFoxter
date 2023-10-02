## PARTE TEÓRICA

### ¿Qué es un E_NOTICE en PHP y cómo se diferencia de un E_ERROR?
"E_NOTICE" es una notificación de nivel bajo que no detiene la ejecución del script y generalmente se utiliza para mejorar la calidad del código, mientras que "E_ERROR" es un error crítico que detiene la ejecución del script y requiere una corrección inmediata.

### ¿Cómo prevenirías la inyección de SQL en una aplicación PHP?

Validando siempre la entrada de datos del usuario y escapando esos datos.

### ¿Qué técnicas usarías para optimizar una consulta SQL en PHP?

Siempre suelo usar las mismas técnicas que describo a continuación:
- Seleccionar solo las  columnas que necesite y así evitar el '*'
- Utilizar índices en las columnas que se utilicen para los JOIN o los WHERE
- Paginación de los resultados para asi poder controlar el tiempo que debe de tardar.
- Tener cuidado con los INNER JOINS para evitar el problema de N+1

### Explica el concepto de polimorfismo y proporciona un ejemplo en PHP.

Se refiere a la capacidad de objetos de diferentes clases de responder a llamadas de métodos con el mismo nombre de una manera específica para cada clase. En otras palabras, el polimorfismo permite que objetos de diferentes tipos sean tratados de manera uniforme cuando cumplen con una interfaz común.

El ejemplo sería:

```php
class Animal {
    public function hablar() {
        return "Hace un sonido indefinido";
    }
}

class Perro extends Animal {
    public function hablar() {
        return "Ladra";
    }
}

class Gato extends Animal {
    public function hablar() {
        return "Maulla";
    }
}

function hacerHablar($animal) {
    return $animal->hablar();
}

$perro = new Perro();
$gato = new Gato();

echo hacerHablar($perro); // Salida: Ladra
echo hacerHablar($gato);  // Salida: Maulla
```

### ¿Cuáles son las ventajas de usar un framework como Laravel en el desarrollo deaplicaciones PHP?

Laravel proporciona numerosas ventajas:

- Curva de aprendizaje fácil
- Productividad:  No necesitamos reinventar la rueda y escribir código que ya está desarrollado, como por ejemplo toda la parte de autenticación, rutas, request, responses, migraciones.
- Eloquent (ORM): simplifica la interacción con la base de datos al permitirte trabajar con registros de base de datos como objetos PHP. Esto reduce la necesidad de escribir consultas SQL manualmente y facilita el mantenimiento de la base de datos.
- La seguridad, Laravel incluye medidas de seguridad integradas, como protección contra ataques CSRF (Cross-Site Request Forgery), filtrado de request, y encriptación de contraseñas entre otros mecanismos  de seguridad.
- Y otro punto para mí muy importante es la comunidad de desarrolladores activa y una amplia documentación. Esto significa que puedes encontrar soluciones a problemas comunes.