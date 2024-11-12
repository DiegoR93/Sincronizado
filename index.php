// Función de ejemplo que no hace nada
function saludo()
{
    // Código de relleno dentro de la función
    echo "Hola, esta es una función de ejemplo.";
}

// Función de ejemplo con parámetros
function sumar($a, $b)
{
    return $a + $b; // Esta función retorna la suma de dos números
}

// Bucle de relleno que recorre un array de prueba
$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as $numero) {
    // Solo imprime el número en la pantalla
    echo "Número: $numero<br>";
}

// Código condicional de relleno
if ($activo) {
    echo "$nombre está activo.<br>";
} else {
    echo "$nombre no está activo.<br>";
}

// Llamadas a las funciones de ejemplo
saludo();
echo "La suma de 5 y 10 es: " . sumar(5, 10) . "<br>";

// Simulando un bloque de relleno con código repetitivo
for ($i = 0; $i < 5; $i++) {
    echo "Este es un mensaje de relleno: Iteración $i<br>";
}

// Fin del archivo de ejemplo
