<?php
/**
 * @version    1.0.0
 * @package    Com_Jdayusa
 * @author     interGen <developer@intergen.org>
 * @copyright  2025 interGen
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Intergen\Component\Jdayusa\Site\Controller;

\defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;

/**
 * Display Component Controller
 *
 * @since  1.0.0
 */
class DisplayController extends \Joomla\CMS\MVC\Controller\BaseController
{
	/**
	 * Constructor.
	 *
	 * @param  array                $config   An optional associative array of configuration settings.
	 * Recognized key values include 'name', 'default_task', 'model_path', and
	 * 'view_path' (this list is not meant to be comprehensive).
	 * @param  MVCFactoryInterface  $factory  The factory.
	 * @param  CMSApplication       $app      The JApplication for the dispatcher
	 * @param  Input              $input    Input
	 *
	 * @since  1.0.0
	 */
	public function __construct($config = array(), MVCFactoryInterface $factory = null, $app = null, $input = null)
	{
		parent::__construct($config, $factory, $app, $input);
	}

	/**
	 * Method to display a view.
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached.
	 * @param   boolean  $urlparams  An array of safe URL parameters and their variable types, for valid values see {@link InputFilter::clean()}.
	 *
	 * @return  \Joomla\CMS\MVC\Controller\BaseController  This object to support chaining.
	 *
	 * @since   1.0.0
	 */
	public function display($cachable = false, $urlparams = false)
	{

		$view = $this->input->getCmd('view', '//XXX_DEFAULT_VIEW_XXX');
		$view = $view == "featured" ? '//XXX_DEFAULT_VIEW_XXX' : $view;
		$this->input->set('view', $view);
		

		parent::display($cachable, $urlparams);
		return $this;
	}
}
