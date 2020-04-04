<?php
	session_start();
	require_once './application/config/config.php';
	require_once './application/locator-services/Locator.php';
	require_once './application/core/core.php';

	Core::start();