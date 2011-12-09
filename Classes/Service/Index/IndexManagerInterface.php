<?php
namespace F2\PoC\Service\Index;
use \F2\PoC\Service\Index\IndexableModel;
/**
 * Interface que deden implementar las clases que gestionen objetos indexados
 *
 * @author Fernando Arconada
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @package Sifpe
 */
interface IndexManagerInterface {
    /**
     * Indexa un objeto
     *
     * @abstract
     * @param IndexableModel $object
     * @return void
     */
    public function indexObject(IndexableModel $object);

    /**
     * Borra un objeto del indice
     *
     * @abstract
     * @param IndexableModel $object
     * @return void
     */
    public function deleteObject(IndexableObject $object);

    /**
     * Actualiza la indexacion de un objeto
     *
     * @abstract
     * @param IndexableModel $object
     * @return void
     */
    public function updateObject(IndexableModel $object);

    /**
     * Borra del indice todos los objetos que cumplen con el criterio keyword=valor
     *
     * @abstract
     * @param string $keyword
     * @param string $value
     * @return void
     */
    public function deleteByKeyword($keyword,$value);

    /**
     * Borra el indice completo
     *
     * @abstract
     * @return void
     */
    public function deleteAll();
}