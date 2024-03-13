<?php

/**
 * Plugin Name: Blitz Core
 * Plugin URI: https://github.com/fizzlab-io/blitz-core
 * Description: This plugin is adds core functionality to the Blitz WordPress theme.
 * Version: 0.0.1
 * Author: FizzLab
 * Author URI: https://fizzlab.io
 */

if (!class_exists("Blitz_Plugin_Core")) {

    class Blitz_Plugin_Core {

        public static $instance;

        public function __construct() {

            // When the rest of WP has loaded, kick-start the rest of the class.
			add_action("init", array($this, "init"));

        }

        /**
		 * Magic method to (not) set protected properties from outside of this class.
		 *
		 * @param string $name  Name of an inaccessible property.
		 * @param mixed  $value Value to assign to the property.
		 * @return void  Silently fail to set the property when this is tried from outside of this class context.
		 *               (Inside this class context, the __set() method if not used as there is direct access.)
		 */
		public function __set($name, $value) {
			return;
		}

        /**
		 * Magic method to get the value of a protected property outside of this class context.
		 *
		 * @param string $name Name of an inaccessible property.
		 * @return mixed The property value.
		 */
		public function __get($name) {
			return $this->{$name};
		}

        /**
         * Initialize the interactions between this class and WordPres.
         */
        public function init() {
            echo "Hello from the Blitz_Plugin_Core class `init` method.";
        }

    }

}
