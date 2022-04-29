<?php
	// Copy files
	installer_message("Copying files");
	FileHelper::copyRecurs(TMPEXT . "/plugins", Config::APPROOT . "/plugins");
	
	// Register extensions
	installer_message("Registering extensions");
	ExtensionHelper::registerExtension("crispycat.tagmanagerplugin/TagManagerPlugin", "plugin", "frontend");
	
	installer_message("Tag manager plugin installed!", IMSG_INFO);
?>
