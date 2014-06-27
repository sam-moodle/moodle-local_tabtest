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

require_once(__DIR__.'/../../config.php');
require_once($CFG->dirroot.'/local/tabtest/test_form.php');
require_login(SITEID, false);
require_capability('moodle/site:config', context_system::instance());

$selectedtab = optional_param('tab', 'tabone', PARAM_TEXT);
$pageurl = new moodle_url('/local/tabtest/view.php', array('tab' => $selectedtab));
$PAGE->set_url($pageurl);

$mform = new local_tabtest_testform();
$tabs  = array(
    new tabobject('tabone', new moodle_url('/local/tabtest/view.php', array('tab' => 'tabone')), 'Tab one', '', true),
    new tabobject('tabtwo', new moodle_url('/local/tabtest/view.php', array('tab' => 'tabtwo')), 'Tab two', '', true),
);

echo $OUTPUT->header();
echo $OUTPUT->tabtree($tabs, $selectedtab);
echo $mform->display();
echo $OUTPUT->footer();
