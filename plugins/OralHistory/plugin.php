<?php

class OralHistoryPlugin extends Omeka_Plugin_Abstract
{
    const ITEM_TYPE_NAME = 'Oral History';
    protected $_hooks = array('install', 'uninstall');
    protected $_elements = array(
        array('name'        => 'Broadcast Date',
              'description' => 'Description of First Element',
              'data_type'   => 'Tiny Text'),
        array('name'        => 'Host',
              'description' => 'Description of Second Element',
              'data_type'   => 'Tiny Text'),
    );

    public function hookInstall()
    {
        $itemType = $this->_db->getTable('ItemType')->findByName(self::ITEM_TYPE_NAME);
        $itemType->addElements($this->_elements);
        $itemType->save();
    }

    public function hookUninstall()
    {
        $elementTable = $this->_db->getTable('Element');
        foreach ($this->_elements as $e) {
            $element = $elementTable->findByElementSetNameAndElementName(ELEMENT_SET_ITEM_TYPE, $e['name']);
            $element->delete();
        }
    }
}