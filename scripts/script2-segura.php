<?php
/**
 * Descripción del script:
 * Este script contiene una clase llamada "AgendaElectronica" con métodos para agregar contactos y recuperar números de teléfono.
 * Autor/a: Marina Segura
 * Versión: 1.0.0
 *
 * Etiquetas:
 * @category Scripts
 * @license  MIT
 */

/**
 * Clase AgendaElectronica que permite gestionar contactos.
 *
 * @version 1.0.0
 *
 * Etiquetas:
 * @category Clases
 * @author [Nombre del autor/a]
 */
class AgendaElectronica {
    private $contactos;

    public function __construct() {
        $this->contactos = array();
    }

    /**
     * Método para agregar un contacto a la agenda.
     *
     * @param string $nombre El nombre del contacto.
     * @param string $telefono El número de teléfono del contacto.
     *
     * Etiquetas:
     * @parametro
     * @version 1.0.0
     */
    public function agregarContacto($nombre, $telefono) {
        $this->contactos[$nombre] = $telefono;
    }

    /**
     * Método para recuperar el número de teléfono de un contacto por su nombre.
     *
     * @param string $nombre El nombre del contacto.
     * @return string|bool El número de teléfono del contacto o false si no se encuentra.
     *
     * Etiquetas:
     * @parametro
     * @resultado
     * @version 1.0.0
     */
    public function recuperarTelefono($nombre) {
        if (isset($this->contactos[$nombre])) {
            return $this->contactos[$nombre];
        }
        return false;
    }
}

// Ejemplo de uso de la clase AgendaElectronica:
$agenda = new AgendaElectronica();

$agenda->agregarContacto("Juan", "123456789");
$agenda->agregarContacto("María", "987654321");

$telefonoJuan = $agenda->recuperarTelefono("Juan");
if ($telefonoJuan) {
    echo "El teléfono de Juan es: $telefonoJuan<br>";
} else {
    echo "No se encontró el contacto de Juan en la agenda.<br>";
}

$telefonoPedro = $agenda->recuperarTelefono("Pedro");
if ($telefonoPedro) {
    echo "El teléfono de Pedro es: $telefonoPedro<br>";
} else {
    echo "No se encontró el contacto de Pedro en la agenda.<br>";
}
?>
