<?php
	defined("CRISPAGE") or die("Application must be started from index.php!");

	class TagManagerPlugin extends Plugin {
		public function execute() {
			global $app;

			$app->vars["tm_code"] = $this->options["code"];

			$app->events->registerAction(new EventAction(array(
				"id" => "crispycat.TagManagerPlugin.render_tm",
				"event" => "page.pre_render.scripts",
				"priority" => 0,
				"action" => function($app) {
					echo $app->vars["tm_code"];
				}
			)));
		}
	}
