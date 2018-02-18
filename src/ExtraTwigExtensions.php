<?php
/**
 * Twig Extensions plugin for Craft CMS 3.x
 *
 * Adds the extra filters and functions from Twig Extensions (http://twig-extensions.readthedocs.io/en/latest/)
 *
 * @link      musingmonkeys.com
 * @copyright Copyright (c) 2018 Robert Antoine
 */

namespace rjantoine\twigextensions;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * @author    Robert Antoine
 * @package   TwigExtensions
 * @since     1.0.0
 */
class ExtraTwigExtensions extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * Static property that is an instance of this plugin class so that it can be accessed via
     * TwigExtensions::$plugin
     *
     * @var TwigExtensions
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    /**
     * Set our $plugin static property to this class so that it can be accessed via
     * TwigExtensions::$plugin
     *
     * Called after the plugin class is instantiated; do any one-time initialization
     * here such as hooks and events.
     *
     * If you have a '/vendor/autoload.php' file, it will be loaded for you automatically;
     * you do not need to load it in your init() method.
     *
     */
	public function init()
	{
		parent::init();
		self::$plugin = $this;

		Craft::$app->getView()->getTwig()->addExtension(new \Twig\Extensions\ArrayExtension());
//		Craft::$app->getView()->getTwig()->addExtension(new \Twig\Extensions\IntlExtension());
		Craft::$app->getView()->getTwig()->addExtension(new \Twig\Extensions\DateExtension());
		Craft::$app->getView()->getTwig()->addExtension(new \Twig\Extensions\I18nExtension());
		Craft::$app->getView()->getTwig()->addExtension(new \Twig\Extensions\TextExtension());
	}

}
