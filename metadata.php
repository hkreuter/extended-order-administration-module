<?php
/**
 * This file is part of OXID eSales Extended Order Admin module.
 *
 * OXID eSales Extended Order Admin module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Extended Order Admin module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales Extended Order Admin module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category      module
 * @package       oeextendedorderadmin
 * @author        OXID eSales AG
 * @link          http://www.oxid-esales.com/
 * @copyright (C) (C) OXID eSales AG 2003-2015
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'oeextendedorderadmin',
    'title'       => array(
        'de' => 'OE Die Bestellungsverwaltungserweiterung',
        'en' => 'OE Extended Order Admin',
    ),
    'description' => array(
        'de' => 'OE Die Bestellungsverwaltungserweiterung',
        'en' => 'OE Extended Order Admin Module',
    ),
    'thumbnail'   => 'out/pictures/picture.png',
    'version'     => '1.0.0',
    'author'      => 'OXID eSales AG',
    'url'         => 'http://www.oxid-esales.com/',
    'email'       => 'info@oxid-esales.com',
    'extend'      => array(),
    'files'       => array(
        'oeextendedorderadminorderpackage' => 'oe/oeextendedorderadmin/controllers/admin/oeextendedorderadminorderpackage.php',
        'oeextendedorderadminlistorder' => 'oe/oeextendedorderadmin/controllers/admin/oeextendedorderadminlistorder.php',
    ),
    'templates'   => array(
        'oeextendedorderadminorderpackage.tpl' => 'oe/oeextendedorderadmin/views/admin/tpl/oeextendedorderadminorderpackage.tpl',
        'oeextendedorderadminlistorder.tpl' => 'oe/oeextendedorderadmin/views/admin/tpl/oeextendedorderadminlistorder.tpl',
    ),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(),
);