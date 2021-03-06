<?php

namespace Craue\FormFlowBundle\Storage;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @author Toni Uebernickel <tuebernickel@gmail.com>
 * @copyright 2011-2013 Christian Raue
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
class SessionStorage implements StorageInterface {

	protected $session;

	public function __construct(SessionInterface $session) {
		$this->session = $session;
	}

	public function set($key, $value) {
		$this->session->set($key, $value);
	}

	public function get($key, $default = null) {
		return $this->session->get($key, $default);
	}

	public function has($key) {
		return $this->session->has($key);
	}

	public function remove($key) {
		return $this->session->remove($key);
	}

}
