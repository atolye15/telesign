<?php
/**
 * Company: Atölye15
 * URI: http://www.atolye15.com
 * Author: Muhittin Özer <muhittin@atolye15.com>
 */

namespace Atolye15;

/**
 * The PhoneId class exposes three services that each provide information about a specified phone number.
 *
 * @package  Telesign
 * @access   public
 */
class PhoneId extends Telesign
{
	/**
	 * Make a phoneid standard request to Telesign's public API. Requires the
	 * phone number. The method creates a @see TeleSignRequest for the standard
	 * api, signs it using the standard SHA1 hash, and performs a GET request.
	 *
	 * @link https://portal.telesign.com/docs/content/phoneid-standard.html
	 *
	 * @param string $phone_number US phone number to make the standard request against.
	 *
	 * @return string The fully formed response object repersentation of the JSON reply
	 */
	public function standard($phone_number)
	{
		return $this->phoneid($phone_number, "standard");
	}

	/**
	 * Make a phoneid score request to TeleSign's public API. Requires the
	 * phone number and a string representing the use case code. The method
	 * creates a request for the score api, signs it using
	 * the standard SHA1 hash, and performs a GET request.
	 *
	 * @link https://portal.telesign.com/docs/content/phoneid-score.html
	 * @link https://portal.telesign.com/docs/content/xt/xt-use-case-codes.html#xref-use-case-codes
	 *
	 * @param string $phone_number US phone number to make the standard request against.
	 * @param string $ucid a TeleSign Use Case Code
	 *
	 * @return string The fully formed response object repersentation of the JSON reply
	 */
	public function score($phone_number, $ucid)
	{
		return $this->phoneid($phone_number, "score", ["ucid" => $ucid]);
	}

	/**
	 * Make a phoneid score request to TeleSign's public API. Requires the
	 * phone number and a string representing the use case code. The method
	 * creates a request for the score api, signs it using
	 * the standard SHA1 hash, and performs a GET request.
	 *
	 * @link https://portal.telesign.com/docs/content/phoneid-contact.html
	 * @link https://portal.telesign.com/docs/content/xt/xt-use-case-codes.html#xref-use-case-codes
	 *
	 * @param string $phone_number US phone number to make the standard request against.
	 * @param string $ucid a TeleSign Use Case Code
	 *
	 * @return string The fully formed response object repersentation of the JSON reply
	 */
	public function contact($phone_number, $ucid)
	{
		return $this->phoneid($phone_number, "contact", ["ucid" => $ucid]);
	}

	/**
	 * Make a phoneid score request to TeleSign's public API. Requires the
	 * phone number and a string representing the use case code. The method
	 * creates a request for the score api, signs it using
	 * the standard SHA1 hash, and performs a GET request.
	 *
	 * @link https://portal.telesign.com/docs/content/phoneid-live.html
	 * @link https://portal.telesign.com/docs/content/xt/xt-use-case-codes.html#xref-use-case-codes
	 *
	 * @param string $phone_number US phone number to make the standard request against.
	 * @param string $ucid a TeleSign Use Case Code
	 *
	 * @return string The fully formed response object repersentation of the JSON reply
	 */
	public function live($phone_number, $ucid)
	{
		return $this->phoneid($phone_number, "live", ["ucid" => $ucid]);
	}
}