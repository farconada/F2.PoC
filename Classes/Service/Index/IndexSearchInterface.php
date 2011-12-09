<?php
namespace F2\PoC\Service\Index;

/**
 * Interface que deden implementar las clases que buscan objetos indexados
 *
 * @author Fernando Arconada
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @package Sifpe
 */
interface IndexSearchInterface {
    /**
     * Busca un objeto en el indice y devuelve una coleccion de hits que cumplen con el criterio de busqueda
     *
     * @abstract
     * @param string $query query string
     * @param string $type object classname
     * @return array
     */
    public function find($type, $query);
}
