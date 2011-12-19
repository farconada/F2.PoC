<?php
namespace F2\PoC\Service\Index;
use TYPO3\FLOW3\Annotations as FLOW3;
use \F2\PoC\Service\Index\IndexableModel;
/**
 * @FLOW3\Scope("singleton")
 */
class IndexerListener implements \F2\PoC\Service\Index\DoctrineEventListenerInterface
{
    /**
     * @var \F2\PoC\Service\Index\IndexManagerInterface
     * @FLOW3\Inject
     */
    protected $indexManager;

    /**
     * The postPersist event occurs for an entity after the entity has been made persistent.
     *
     * It will be invoked after the database insert operations. Generated primary key values are available in the postPersist event
     *
     * @param \Doctrine\ORM\Event\LifecycleEventArgs $args
     * @return void
     */
    public function postPersist(\Doctrine\ORM\Event\LifecycleEventArgs $args) {
//        if ($args->getEntity() instanceof IndexableModel) {
//            $this->indexManager->indexObject($args->getEntity());
//        }
    }

    /**
     * The postUpdate event occurs after the database update operations to entity data. It is not called for a DQL UPDATE statement.
     *
     * @param \Doctrine\ORM\Event\LifecycleEventArgs $args
     * @return void
     */
    public function postUpdate(\Doctrine\ORM\Event\LifecycleEventArgs $args) {
//        if ($args->getEntity() instanceof IndexableModel) {
//            $this->indexManager->updateObject($args->getEntity());
//        }
    }

    /**
     * The preRemove event occurs for a given entity before the respective EntityManager remove operation for that entity is executed.
     *
     * It is not called for a DQL DELETE statement.
     *
     * @param \Doctrine\ORM\Event\LifecycleEventArgs $args
     * @return void
     */
    public function preRemove(\Doctrine\ORM\Event\LifecycleEventArgs $args) {
//        if ($args->getEntity() instanceof IndexableModel) {
//            $this->indexManager->deleteObject($args->getEntity());
//        }
    }
}
