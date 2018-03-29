<?php
/**
 * @package Component SuperMonitoring for Joomla! 2.5.x - 3.x
 * @version $Id: supermonitoring.php 100 2015-01-13 19:00:00Z Łukasz Chrzanowski $
 * @author SITEIMPULSE
 * @copyright Copyright (C) SITEIMPULSE (https://www.siteimpulse.com/). All rights reserved.
 * @license GNU/GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Eoc component helper.
 */
abstract class SuperMonitoringHelper {

    public static function getServiceDomainByLang() {
        $lang = JFactory::getLanguage();
		
		$tag=$lang->getTag();
		$tagsdata=explode("-",$tag);
		
        switch ($tagsdata[0]) {
        	
            case "pl":
                return 'https://www.supermonitoring.pl/';
            case "es":
                return 'https://www.supermonitoring.es/';
            case "de":
                return 'https://www.supermonitoring.de/';
            default:
                return 'https://www.supermonitoring.com/';
        }
    }

}
