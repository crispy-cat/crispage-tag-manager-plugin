<?php
	// Copy files
	installer_message("Copying files");
	FileHelper::copyRecurs(TMPEXT . "/plugins", Config::APPROOT . "/plugins");
	
	// Register extensions
	installer_message("Registering extensions");
	$app->extensions->registerExtension("crispycat/TagManagerPlugin", "plugin", "frontend");
	
	// Register plugins
	$app->plugins->setPlugin("crispycat.TagManagerPlugin", new Plugin(array(
		"id" => "crispycat.TagManagerPlugin",
		"class" => "crispycat/TagManagerPlugin",
		"priority" => 0,
		"scope" => "frontend",
		"created" => time(),
		"modified" => time(),
		"options" => array()
	)));
	
	installer_message("Tag manager plugin installed!", IMSG_INFO);
?>
