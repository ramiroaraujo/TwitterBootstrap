<?php

App::uses('SessionComponent', 'Controller/Component');

class BootstrapSessionComponent extends SessionComponent
{
	public function setFlashSuccess( $message )
	{
		$this->setFlash( $message, 'alert', array( 'plugin' => 'TwitterBootstrap', 'class' => 'alert-success' ) );
	}

	public function setFlashError( $message )
	{
		$this->setFlash( $message, 'alert', array( 'plugin' => 'TwitterBootstrap', 'class' => 'alert-error' ) );
	}

	public function setFlashWarning( $message )
	{
		$this->setFlash( $message, 'alert', array( 'plugin' => 'TwitterBootstrap', 'class' => 'alert-warning' ) );
	}

	public function setFlashInfo( $message )
	{
		$this->setFlash( $message, 'alert', array( 'plugin' => 'TwitterBootstrap', 'class' => 'alert-info' ) );
	}
}
