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

namespace local_checklistsettings\privacy;

use advanced_testcase;

/**
 * Privacy provider tests for the Checklist settings companion plugin.
 *
 * @package    local_checklistsettings
 * @copyright  2026 John Braz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @covers     \local_checklistsettings\privacy\provider
 */
final class provider_test extends advanced_testcase {

    /**
     * The plugin only exposes administrator settings and stores no personal data.
     */
    public function test_get_reason(): void {
        $this->assertSame('privacy:metadata', provider::get_reason());
    }
}
