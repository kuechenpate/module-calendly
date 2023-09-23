<?php
namespace Kuechenpate\Calendly\Block;
class Display extends \Magento\Framework\View\Element\Template
{
    protected $helperData;

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
