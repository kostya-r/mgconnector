<?php

namespace Remarkety\Mgconnector\Block\Adminhtml\Install;

use Magento\Backend\Block\Widget\Form\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class Complete extends Container
{
    protected $_coreRegistry = null;

    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    )
    {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }
    public function _construct()
    {
        parent::_construct();
        $this->_objectId = 'complete_id';
        $this->_blockGroup = 'Remarkety_Mgconnector';
        $this->_controller = 'adminhtml_install';
        $this->_headerText = __('remarkety test');
        $this->_mode = 'complete';
        $this->removeButton('reset');
        $this->removeButton('save');
        $this->removeButton('back');

    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
    }

}