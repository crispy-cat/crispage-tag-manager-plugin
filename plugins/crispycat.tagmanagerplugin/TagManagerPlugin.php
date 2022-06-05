<?php
	namespace Crispage\Plugins;

	defined("CRISPAGE") or die("Application must be started from index.php!");

	class TagManagerPlugin extends \Crispage\Assets\Plugin {
		public function execute() {
			global $app;

			$app->vars["tm_code"] = $this->options["code"];

			$app->events->registerAction(new \Crispage\Events\EventAction(array(
				"id" => "crispycat.tagmanagerplugin.render_tm",
				"event" => "page.pre_render.scripts",
				"priority" => 0,
				"action" => function($app) {
					echo $app->vars["tm_code"];
				}
			)));
		}
	}
?>
