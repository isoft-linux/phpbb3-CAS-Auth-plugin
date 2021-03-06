<?php
/**
*
* @package phpBB Extension - CAS Authentication plugin
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace getekid\cas\migrations;

class release_0_5_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return (isset($this->config['cas_server']) && isset($this->config['cas_port']) && isset($this->config['cas_uri'])) ? true : false ;
	}

	public function update_data()
	{
		return array(
			array('config.add',
				array('cas_version', 'CAS_VERSION_1_0')),
			array('config.add',
				array('cas_host', '')),
			array('config.add',
				array('cas_port', '')),
			array('config.add',
				array('cas_uri', '')),
			array('config.add',
				array('cas_cert', '')),
			array('config.add',
				array('cas_login', 'Login with CAS')),
			array('config.add',
				array('cas_db', 0)),
			array('config.add',
				array('cas_db_login', 'Login without CAS')),
			array('config.add',
				array('cas_logout', 0)),
      array('config.add',
  			array('cas_register', 0)),
      array('config.add',
  			array('cas_register_mail', '')),
		);
	}
}
