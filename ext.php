<?php
/**
*
* @package Multiname
* @copyright (c) Nana Keiretsu <http://www.soulbonding.org>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace keiretsu\multiname;

class ext extends \phpbb\extension\base
{

	/**
	 * Check the phpBB version to determine if this extension can be enabled.
	 * The path of INCLUDECSS has changed since 3.1.3. This check is added to prevent usage with older versions where CSS will not being included.
	 *
	 * @return boolean
	 */
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return version_compare($config['version'], '3.1.3', '>=');
	}

}
