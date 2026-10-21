<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Defines the version of pathfinder
 *
 * This code fragment is called by moodle_needs_upgrading() and
 * /admin/index.php
 *
 * @package    mod_pathfinder
 * @copyright  2011 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2026102100;      // The current module version (Date: YYYYMMDDXX).
$plugin->requires  = 2022112800;      // Moodle 4.1 (Build: 20221128).
$plugin->supported = [401, 503];      // Moodle 4.1 to 4.5.
$plugin->component = 'mod_pathfinder'; // To check on upgrade, that module sits in correct place.
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '1.1.0';
