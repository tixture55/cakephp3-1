<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.9.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Tools\View\Helper;

use Cake\Core\Configure;
use Cake\Network\Response;
use Cake\View\Helper\HtmlHelper as CoreHtmlHelper;
use Cake\View\StringTemplateTrait;
use Cake\View\View;

/**
 * Html Helper class for easy use of HTML widgets.
 *
 * HtmlHelper encloses all methods needed while working with HTML pages.
 *
 * @link http://book.cakephp.org/3.0/en/views/helpers/html.html
 */
class HtmlHelper extends CoreHtmlHelper {

    /**
     * Creates a reset HTML link.
	 * The prefix and plugin params are resetting to default false.
     *
     * ### Options
     *
     * - `escape` Set to false to disable escaping of title and attributes.
     * - `escapeTitle` Set to false to disable escaping of title. Takes precedence
     *   over value of `escape`)
     * - `confirm` JavaScript confirmation message.
	 *
     * @param string $title The content to be wrapped by <a> tags.
     * @param string|array|null $url URL or array of URL parameters, or
     *   external URL (starts with http://)
     * @param array $options Array of options and HTML attributes.
     * @return string An `<a />` element.
     */
    public function resetLink($title, $url = null, array $options = []) {
		if (is_array($url)) {
			$url += ['prefix' => false, 'plugin' => false];
		}
		return parent::link($title, $url, $options);
    }

	/**
	 * Keep query string params for pagination/filter for this link,
	 * e.g. after edit action.
	 *
	 * ### Options
	 *
	 * - `escape` Set to false to disable escaping of title and attributes.
	 * - `escapeTitle` Set to false to disable escaping of title. Takes precedence
	 *   over value of `escape`)
	 * - `confirm` JavaScript confirmation message.
	 *
	 * @param string $title The content to be wrapped by <a> tags.
	 * @param string|array|null $url URL or array of URL parameters, or
	 *   external URL (starts with http://)
	 * @param array $options Array of options and HTML attributes.
	 * @return string An `<a />` element.
	 * @return string Link
	 */
	public function completeLink($title, $url = null, array $options = []) {
		if (is_array($url)) {
			// Add query strings
			if (!isset($url['?'])) {
				$url['?'] = [];
			}
			$url['?'] += $this->request->query;
		}
		return parent::link($title, $url, $options);
	}

    /**
     * Event listeners.
     *
     * @return array
     */
    public function implementedEvents()
    {
        return [];
    }
}
