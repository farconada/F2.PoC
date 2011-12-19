<?php
namespace F2\PoC\Command;
use \F2\PoC\Domain\Model\Usuario;
/*                                                                        *
 * This script belongs to the FLOW3 package "F2.TuitLawyer".              *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Initialize command controller for the F2.TuitLawyer package
 *
 * @FLOW3\Scope("singleton")
 */
class InitializeCommandController extends \TYPO3\FLOW3\MVC\Controller\CommandController {
    /**
	 * @FLOW3\Inject
	 * @var \TYPO3\FLOW3\Security\AccountFactory
	 */
	protected $accountFactory;

	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\FLOW3\Security\AccountRepository
	 */
	protected $accountRepository;

    /**
     * Repositorio de usuarios
     * @see initializeAction()
     * @FLOW3\Inject
     * @var \F2\PoC\Domain\Repository\UsuarioRepository
     */
    protected $usuarioRepository;

	/**
	 * An example command
	 *
	 * The comment of this command method is also used for FLOW3's help screens. The first line should give a very short
	 * summary about what the command does. Then, after an empty line, you should explain in more detail what the command
	 * does. You might also give some usage example.
	 *
	 * It is important to document the parameters with param tags, because that information will also appear in the help
	 * screen.
	 *
	 * @param string $username
	 * @param string $password
     * @param string $role
	 * @return void
	 */
	public function createUserCommand($username, $password, $role) {
		$account = $this->accountFactory->createAccountWithPassword($username,$password,array($role));
        $usuario = new Usuario();
        $usuario->setNombre($username);
        $usuario->addAccount($account);
        $account->setParty($usuario);
        $this->accountRepository->add($account);
        $this->usuarioRepository->add($usuario);
	}

}

?>