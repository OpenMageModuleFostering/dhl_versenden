<?php
/**
 * Dhl Versenden
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to
 * newer versions in the future.
 *
 * PHP version 5
 *
 * @category  Dhl
 * @package   Dhl\Versenden\Bcs\Api\Service
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2016 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Versenden\Bcs\Api\Shipment\Service;

/**
 * PreferredNeighbour
 *
 * @category Dhl
 * @package  Dhl\Versenden\Bcs\Api\Service
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class PreferredNeighbour extends Type\Text
{
    const CODE = 'preferredNeighbour';

    /**
     * PreferredNeighbour constructor.
     *
     * @param string $name
     * @param bool   $isEnabled
     * @param bool   $isSelected
     * @param string $placeholder
     * @param int    $maxLength
     */
    public function __construct($name, $isEnabled, $isSelected, $placeholder, $maxLength = 100)
    {
        $this->customerService = true;

        parent::__construct($name, $isEnabled, $isSelected, $placeholder, $maxLength);
    }

    /**
     * @return string
     */
    public function getValueHtml()
    {
        $format = <<<'HTML'
<input type="text" name="service_setting[%s]" value="%s" class="input-text input-with-checkbox validate-with-location"
       maxlength="%d" id="shipment_service_%sDetails" data-select-id="shipment_service_%s" placeholder="%s" />
HTML;

        return sprintf(
            $format,
            $this->getCode(),
            htmlspecialchars($this->getValue(), ENT_COMPAT, 'UTF-8', false),
            $this->getMaxLength(),
            $this->getCode(),
            $this->getCode(),
            $this->getPlaceholder()
        );

    }
}
