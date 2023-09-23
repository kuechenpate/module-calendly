<?php
namespace Kuechenpate\Calendly\Controller\Index;

class Display extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $helperData;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Kuechenpate\Calendly\Helper\Data $helperData)
    {
        $this->_pageFactory = $pageFactory;
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
