<?php
/**
 * @version    1.0.0
 * @package    Com_Jdayusa
 * @author     interGen <developer@intergen.org>
 * @copyright  2025 interGen
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Intergen\Component\Jdayusa\Site\Dispatcher;

defined('JPATH_PLATFORM') or die;

use Joomla\CMS\Dispatcher\ComponentDispatcher;
use Joomla\CMS\Language\Text;

/**
 * ComponentDispatcher class for Com_Jdayusa
 *
 * @since  1.0.0
 */
class Dispatcher extends ComponentDispatcher
{
	/**
	 * Dispatch a controller task. Redirecting the user if appropriate.
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function dispatch()
	{
		parent::dispatch();
	}
}
