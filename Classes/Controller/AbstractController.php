<?php
namespace F2\PoC\Controller;
use TYPO3\FLOW3\Annotations as FLOW3;


/*                                                                        *
* This script belongs to the FLOW3 package "F2.TuitLawyer".              *
*                                                                        *
*                                                                        */

/**
 * Abstract controller for the F2.TuitLawyer package
 *
 * @FLOW3\Scope("singleton")
 */
abstract class AbstractController extends  \TYPO3\FLOW3\MVC\Controller\ActionController {

    /**
     * @var \F2\PoC\Service\Index\DoctrineEventListenerInterface
     * @FLOW3\Inject
     */
    protected $doctrineEventListener;

    /**
     * Funcion a ejecutar antes de cualquier action
     *
     * @return void
     */
    protected function initializeAction() {
        parent::initializeAction();

        //Event listener para indexacion de objetos
        $entityManagerFactory = $this->objectManager->get('\TYPO3\FLOW3\Persistence\Doctrine\EntityManagerFactory');
        $entityManager = $entityManagerFactory->create();
        $entityManager->getEventManager()->addEventListener(
            array(\Doctrine\ORM\Events::postUpdate, \Doctrine\ORM\Events::postPersist, \Doctrine\ORM\Events::preRemove), $this->doctrineEventListener
        );
        $this->persistenceManager->injectEntityManager($entityManager);

    }
}

?>