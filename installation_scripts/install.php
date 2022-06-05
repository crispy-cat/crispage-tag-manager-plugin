<?php
	// Copy files
	installer_message("Copying files");
	FileHelper::copyRecurs(PACKAGE_DIR . "/plugins", \Config::APPROOT . "/plugins");
	
	// Register extensions
	installer_message("Registering extensions");
	ExtensionHelper::registerExtension("crispycat.tagmanagerplugin/TagManagerPlugin", "plugin", "frontend");
	
	installer_message("Tag manager plugin installed!", \Crispage\Application\InstallerApplication::IMSG_INFO);
?>
