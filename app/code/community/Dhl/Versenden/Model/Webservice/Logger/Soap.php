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
 * @package   Dhl_Versenden
 * @author    Benjamin Heuer <benjamin.heuer@netresearch.de>
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2016 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
use \Dhl\Versenden\Bcs\Api\Webservice\Adapter;
use \Dhl\Versenden\Bcs\Api\Webservice\Adapter\Soap as SoapAdapter;

/**
 * Dhl_Versenden_Model_Webservice_Logger_Soap
 *
 * @category Dhl
 * @package  Dhl_Versenden
 * @author   Benjamin Heuer <benjamin.heuer@netresearch.de>
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class Dhl_Versenden_Model_Webservice_Logger_Soap
    extends Dhl_Versenden_Model_Webservice_Logger_Abstract
{
    /**
     * @param SoapAdapter $adapter
     */
    public function debug(Adapter $adapter)
    {
        $this->log->debug($adapter->getClient()->__getLastRequest());
        $this->log->debug($adapter->getClient()->__getLastResponseHeaders());
        $this->log->debug($adapter->getClient()->__getLastResponse());
    }

    /**
     * @param SoapAdapter $adapter
     */
    public function error(Adapter $adapter)
    {
        $this->log->error($adapter->getClient()->__getLastRequest());
        $this->log->error($adapter->getClient()->__getLastResponseHeaders());
        $this->log->error($adapter->getClient()->__getLastResponse());
    }


    /**
     * @param SoapAdapter $adapter
     */
    public function warning(Adapter $adapter)
    {
        $this->log->warning($adapter->getClient()->__getLastRequest());
        $this->log->warning($adapter->getClient()->__getLastResponseHeaders());
        $this->log->warning($adapter->getClient()->__getLastResponse());
    }
}
