<?php
namespace F2\PoC\Controller;
use TYPO3\FLOW3\Annotations as FLOW3;

/*                                                                        *
* This script belongs to the FLOW3 package "F2.TuitLawyer".              *
*                                                                        *
*                                                                        */

/**
 * Standard controller for the F2.TuitLawyer package
 *
 * @FLOW3\Scope("singleton")
 */
class StandardController extends AbstractController {

    /**
     * Gestion de atenticacion
     * @FLOW3\Inject
     * @var \TYPO3\FLOW3\Security\Authentication\AuthenticationManagerInterface
     */
    protected $authenticationManager;

    /**
     * Index action
     *
     * @return void
     */
    public function indexAction() {

    }

    /**
     * Resultados de la busqueda de preguntas y respuestas
     * TODO buscar tb sobre respuestas
     * @param string $query
     */
    public function findAction($query) {
    }

    public function loginAction() {

    }

    /**
     * Authenticates an account by invoking the Provider based Authentication Manager.
     *
     * Los parametros vienen del formulario de login de la Home
     *
     * @return void
     */
    public function authenticateAction() {

        try {
            $this->authenticationManager->authenticate();
        } catch (\TYPO3\FLOW3\Security\Exception\AuthenticationRequiredException $exception) {
            $this->flashMessageContainer->addMessage(new \TYPO3\FLOW3\Error\Message('Usuario o password incorrectos.'));
            $this->redirect('login');
        }

        $this->redirect('index');
    }

    /**
     * Logout
     *
     * @return void
     */
    public function logoutAction() {
        $this->authenticationManager->logout();
        $this->flashMessageContainer->addMessage(new \TYPO3\FLOW3\Error\Message('Acaba de salir correctamente.'));
        $this->redirect('index');
    }

}

?>
