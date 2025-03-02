<?php
/**
 * Softaculous Related Functionality
 * @author Joe Huss <detain@interserver.net>
 * @copyright 2019
 * @package MyAdmin-Softaculous-Licensing
 * @category Licenses
 */

/**
 * @param string $ipAddress
 * @return array|bool
 */
function get_webuzoLicenses($ipAddress = '')
{
	$noc = new \Detain\MyAdminSoftaculous\SoftaculousNOC(WEBUZO_USERNAME, WEBUZO_PASSWORD);
	return $noc->webuzoLicenses('', $ipAddress);
}
