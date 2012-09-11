<?php
/**
 * Created by IntelliJ IDEA.
 * User: ramiro
 * Date: 9/11/12
 * Time: 1:05 AM
 * To change this template use File | Settings | File Templates.
 */
class TwitterBootstrapSessionComponent extends SessionComponent
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
