<?php
/**
 * @package cms
 */

namespace SilverStripe\Cms;

use SilverStripe\Framework\Core\ModuleInterface;

/**
 * The module class for the CMS module. This class should be used to register
 * the CMS module rather than explicit registration.
 *
 * @package cms
 */
class CmsModule implements ModuleInterface {

	public function getName() {
		return 'cms';
	}

	public function getPath() {
		return dirname(__DIR__);
	}

	public function getAssetDirs() {
		return array('css', 'images', 'javascript', 'thirdparty');
	}

}
