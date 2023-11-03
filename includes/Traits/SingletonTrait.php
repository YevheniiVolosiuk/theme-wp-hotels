<?php


declare( strict_types=1 );

/**
 * Singleton trait which implements Singleton pattern in any class in which this trait is used.
 *
 * Using the singleton pattern in WordPress is an easy way to protect against
 * mistakes caused by creating multiple objects or multiple initialization
 * of classes which need to be initialized only once.
 *
 * With complex plugins, there are many cases where multiple copies of
 * the plugin would load, and action hooks would load (and trigger) multiple
 * times.
 *
 * If you're planning on using a global variable, then you should implement
 * this trait. Singletons are a way to safely use globals; they let you
 * access and set the global from anywhere, without risk of collision.
 *
 * If any method in a class needs to be aware of "state", then you should
 * implement this trait in that class.
 *
 * If any method in the class need to "talk" to another or be aware of what
 * another method has done, then you should implement this trait in that class.
 *
 * If you specifically need multiple objects, then use a normal class.
 *
 * @package headless-easy-product-api
 */


namespace StarterThemeWp\STW\Traits;

trait SingletonTrait {

	/**
	 * Protected class constructor to prevent direct object creation
	 *
	 * This is meant to be overridden in the classes which implement
	 * this trait. This is ideal for doing stuff that you only want to
	 * do once, such as hooking into actions and filters, etc.
	 */
	protected function __construct() {
	}

	/**
	 * Prevent object cloning
	 */
	final protected function __clone() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheating&#8217; huh?', 'apl' ), '1.0.0' );
	}

	/**
	 * Disable unserializing of the class.
	 */
	final public function __wakeup() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheating&#8217; huh?', 'apl' ), '1.0.0' );
	}

	/**
	 * This method returns new or existing Singleton instance
	 * of the class for which it is called. This method is set
	 * as final intentionally, it is not meant to be overridden.
	 *
	 * @return object Singleton instance of the class.
	 */
	final public static function getInstance(): object {
		/**
		 * Collection of instance.
		 */
		static $instance = [];

		/**
		 * If this trait is implemented in a class which has multiple
		 * subclasses then static::$_instance will be overwritten with the most recent
		 * subclass instance. Thanks to late static binding
		 * we use get_called_class() to grab the called class name, and store
		 * a key=>value pair for each `classname => instance` in self::$_instance
		 * for each subclass.
		 */
		$called_class = get_called_class();

		if ( ! isset( $instance[ $called_class ] ) ) {
			$instance[ $called_class ] = new $called_class();

			/**
			 * Dependent items can use the stw_api_product_loader_singleton_init_{$called_class} hook to execute code
			 */
			do_action(
				sprintf( 'stw_api_product_loader_singleton_init_%s', $called_class )
			);
		}

		return $instance[ $called_class ];
	}
}
