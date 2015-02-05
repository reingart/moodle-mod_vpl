<?php
/**
 * @package		VPL. Class for logging list of previous upload view events
 * @copyright	2014 onwards Juan Carlos Rodríguez-del-Pino
 * @license		http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author		Juan Carlos Rodríguez-del-Pino <jcrodriguez@dis.ulpgc.es>
 */
namespace mod_vpl\event;
require_once dirname(__FILE__).'/../../locallib.php';
defined('MOODLE_INTERNAL') || die();

class submission_previous_upload_viewed extends vpl_base {
	protected function init() {
		parent::init();
		$this->data['crud'] = 'r';
		$this->legacy_action='view previous';
	}
	public function get_description() {
		return $this->get_description_mod('previous uploads');
	}	
}
