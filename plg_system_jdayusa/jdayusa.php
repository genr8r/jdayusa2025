<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.jdayusa
 */

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;
use Joomla\CMS\Application\SiteApplication;

// Prevent direct access
defined('_JEXEC') or die;

class PlgSystemJdayusa extends CMSPlugin
{
    public function onContentPrepare($context, &$article, &$params, $limitstart = 0)
    {
        // Only for site application and articles
        $app = Factory::getApplication();
        if (!$app instanceof SiteApplication || $context !== 'com_content.article') {
            return;
        }
        $greeting = '<h2>Greetings, Welcome to the Joomla World Cafe</h2>';
        $article->text = $greeting . $article->text;
    }
}
