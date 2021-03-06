<?php

namespace rpf\extension;
use rpf\extension\module\domainExport;
use rpf\extension\module\mysqlExport;
use rpf\extension\module\error;
use rpf\extension\module\index;
use rpf\extension\module\mgntRatioExport;
use rpf\system\module;

/**
 * RPF Extension-Class
 *
 * @author Andreas Doebeling <ad@1601.com>
 * @copyright 1601.production siegler&thuemmler ohg
 * @link https://github.com/ADoebeling/RP2-Framework
 * @link https://xing-ad.1601.com
 * @link https://www.1601.com
 */
class extension extends module
{
    /**
     * @return domainExport
     */
    public function getDomainExport()
    {
        return $this->getModule(domainExport::class);
    }

    /**
     * @return mysqlExport
     */
    public function getMysqlExport()
    {
        return $this->getModule(mysqlExport::class);
    }

    /**
     * @return index
     */
    public function getIndex()
    {
        return $this->getModule(index::class);
    }

    /**
     * @return invoiceTextExport
     */
    public function getInvoiceTextExport()
    {
        return $this->getModule(invoiceTextExport::class);
    }

    /**
     * @return mailExport
     */
    public function getMailExport()
    {
        return $this->getModule(mailExport::class);
    }

    /**
     * @return error
     */
    public function getError()
    {
        return $this->getModule(error::class);
    }

    /**
     * @return mgntRatioExport
     */
    public function getMgntRatioExport()
    {
        return $this->getModule(mgntRatioExport::class);
    }
}