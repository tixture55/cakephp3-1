<?php
namespace Tools\View\Helper;

use Cake\View\Helper\TextHelper as CakeTextHelper;
use Cake\Utility\Hash;
use Tools\Utility\Number;
use Cake\View\View;

if (!defined('CHAR_HELLIP')) {
	define('CHAR_HELLIP', '&#8230;'); # � (horizontal ellipsis = three dot leader)
}

/**
 * This helper extends the core Text helper and adds some improvements.
 *
 * autoLinkEmails
 * - obfuscate (defaults to FALSE right now)
 * (- maxLength?)
 * - escape (defaults to TRUE for security reasons regarding plain text)
 *
 * autoLinkUrls
 * - stripProtocol (defaults To FALSE right now)
 * - maxLength (to shorten links in order to not mess up the layout in some cases - appends ...)
 * - escape (defaults to TRUE for security reasons regarding plain text)
 *
 */
class TextHelper extends CakeTextHelper {

	/**
	 * Constructor
	 *
	 * ### Settings:
	 *
	 * - `engine` Class name to use to replace Text functionality.
	 *            The class needs to be placed in the `Utility` directory.
	 *
	 * @param View $View the view object the helper is attached to.
	 * @param array $settings Settings array Settings array
	 * @throws CakeException when the engine class could not be found.
	 */
	public function __construct(View $View, array $config = []) {
		$config = Hash::merge(['engine' => 'Tools.Text'], $config);
		parent::__construct($View, $config);
	}

	/**
	 * Minimizes the given URL to a maximum length
	 *
	 * @param string $url the url
	 * @param int|null $max the maximum length
	 * @param array $options
	 * - placeholder
	 * @return string the manipulated url (+ eventuell ...)
	 */
	public function minimizeUrl($url, $max = null, array $options = []) {
		// check if there is nothing to do
		if (empty($url) || mb_strlen($url) <= (int)$max) {
			return $url;
		}
		// http:// etc has not to be displayed, so
		$url = $this->stripProtocol($url);
		// cut the parameters
		if (mb_strpos($url, '/') !== false) {
			$url = strtok($url, '/');
		}
		// return if the url is short enough
		if (mb_strlen($url) <= (int)$max) {
			return $url;
		}
		// otherwise cut a part in the middle (but only if long enough!)
		// TODO: more dynamically
		$placeholder = CHAR_HELLIP;
		if (!empty($options['placeholder'])) {
			$placeholder = $options['placeholder'];
		}

		$end = mb_substr($url, -5, 5);
		$front = mb_substr($url, 0, (int)$max - 8);
		return $front . $placeholder . $end;
	}

	/**
	 * Remove http:// or other protocols from the link
	 *
	 * @param string $url
	 * @return string strippedUrl
	 */
	public function stripProtocol($url) {
		$pieces = parse_url($url);
		// Already stripped?
		if (empty($pieces['scheme'])) {
			return $url;
		}
		return mb_substr($url, mb_strlen($pieces['scheme']) + 3); # +3 <=> :// # can only be 4 with "file" (file:///)...
	}

	/**
	 * Transforming int values into ordinal numbers (1st, 3rd, ...).
	 * When using HTML, you can use <sup>, as well.
	 *
	 * @param int $num The number to be suffixed.
	 * @param bool $sup Whether to wrap the suffix in a superscript (<sup>) tag on output.
	 * @return string ordinal
	 */
	public function ordinalNumber($num = 0, $sup = false) {
		$ordinal = Number::ordinal($num);
		return ($sup) ? $num . '<sup>' . $ordinal . '</sup>' : $num . $ordinal;
	}

	/**
	 * Syntax highlighting using php internal highlighting
	 *
	 * @param string $file Filename
	 * @return string
	 */
	public function highlightFile($file) {
		return highlight_file($file, true);
	}

	/**
	 * Syntax highlighting using php internal highlighting
	 *
	 * @param string $string Content
	 * @return string
	 */
	public function highlightString($string) {
		return highlight_string($string, true);
	}

}
