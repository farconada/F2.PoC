<?php
namespace F2\PoC\Service\Index;

/**
 * Interface que deden implementar las clases que escuchen eventos de doctrine
 *
 * @link http://www.doctrine-project.org/docs/orm/2.0/en/reference/events.html
 * @author Fernando Arconada
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @package Sifpe
 */
interface DoctrineEventListenerInterface {
    /**
     * The postPersist event occurs for an entity after the entity has been made persistent.
     *
     * It will be invoked after the database insert operations. Generated primary key values are available in the postPersist event
     *
     * @abstract
     * @param \Doctrine\ORM\Event\LifecycleEventArgs $args
     * @return void
     */
    public function postPersist(\Doctrine\ORM\Event\LifecycleEventArgs $args);

    /**
     * The postUpdate event occurs after the database update operations to entity data. It is not called for a DQL UPDATE statement.
     *
     * @abstract
     * @param \Doctrine\ORM\Event\LifecycleEventArgs $args
     * @return void
     */
    public function postUpdate(\Doctrine\ORM\Event\LifecycleEventArgs $args);

    /**
     * The preRemove event occurs for a given entity before the respective EntityManager remove operation for that entity is executed.
     *
     * It is not called for a DQL DELETE statement.
     *
     * @abstract
     * @param \Doctrine\ORM\Event\LifecycleEventArgs $args
     * @return void
     */
    public function preRemove(\Doctrine\ORM\Event\LifecycleEventArgs $args);
}