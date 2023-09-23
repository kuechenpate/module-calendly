<?php
namespace Kuechenpate\Calendly\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Display extends Template implements BlockInterface
{
    protected $helperData;
    protected $_template = "widget/calendlyinline.phtml";

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Kuechenpate\Calendly\Helper\Data $helperData)
    {
        $this->helperData = $helperData;
        parent::__construct($context);
    }

    public function getLink()
    {
        return $this->helperData->getGeneralConfig('calendly_link');;
    }

    public function isEnabled()
    {
        return $this->helperData->getGeneralConfig('enable');;
    }
}
