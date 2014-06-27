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
 *
 * @package    local_tabtest
 * @author     Sam Chaffee
 * @copyright  2014 Moodlerooms, Inc.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die('Direct access to this script is forbidden.');
require_once($CFG->libdir . '/formslib.php');

class local_tabtest_testform extends moodleform {
    public function definition() {
        global $CFG;
        $mform = $this->_form;

        $mform->addElement('filepicker', 'testfile', 'Test file', null, array('maxbytes' => $CFG->maxbytes, 'accepted_types' => '*'));
    }
}
