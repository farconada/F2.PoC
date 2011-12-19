<?php
namespace F2\PoC\Domain\Model;
use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;
/*                                                                        *
 * This script belongs to the FLOW3 package "F2.TuitLawyer".              *
 *                                                                        *
 *                                                                        */

/**
 * A Usuario
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Usuario extends \TYPO3\Party\Domain\Model\AbstractParty {

	/**
	 * Nombre del autor
	 * @var string
	 * @ORM\Column(length=80,nullable=true)
	 */
	protected $nombre;


	public function __construct() {
		parent::__construct();
		$this->respuestas = new \Doctrine\Common\Collections\ArrayCollection();
	}


	/**
	 * @param string $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * @return string
	 */
	public function getNombre() {
		return $this->nombre;
	}


}
?>