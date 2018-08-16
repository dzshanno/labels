<?php
/**
 * @package    labels
 *
 * @author     David <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 *
 *             Provide the ability to print to Avery Labels
 */
 /**  use Joomla\CMS\Helper\ModuleHelper; */

require_once dirname(__FILE__) . '/helper.php';

defined('_JEXEC') or die;

// $moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$labeltemplate = modLabelsHelper::getLabelTemplate($params);
require JModuleHelper::getLayoutPath('mod_labels', $params->get('layout', 'default'));
