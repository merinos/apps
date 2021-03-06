<?php
/**
* @package imprint an ownCloud app
* @author Christian Reiner
* @copyright 2012-2014 Christian Reiner <foss@christian-reiner.info>
* @license GNU Affero General Public license (AGPL)
* @link information http://apps.owncloud.com/content/show.php?content=153220
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the license, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.
* If not, see <http://www.gnu.org/licenses/>.
*
*/
?>

<?php
/**
 * @file templates/tmpl_dummy.php
 * Fallback imprint content guiding towards the required settings.
 * @access public
 * @author Christian Reiner
 */
?>

#<?php p($l->t("Nothing here yet")."!");?>

##<?php p($l->t("The content of the legal notice has to be configured first").".");?>

-----

_<?php if ( OCP\User::checkAdminUser() ) {
	p($l->t("That configuration is done in the administration section."));
} else {
	p($l->t("That configuration has to be done by the system administration."));
} ?>_
