<?php

class MartinDines_Socialite_Model_Resource_Entity_Setup extends Mage_Eav_Model_Entity_Setup
{
    public function getDefaultEntities()
    {
        return array(
            'catalog_category' => array(
                'entity_model'                => 'catalog/category',
                'attribute_model'             => 'catalog/resource_eav_attribute',
                'table'                       => 'catalog/category',
                'additional_attribute_table'  => 'catalog/eav_attribute',
                'entity_attribute_collection' => 'catalog/category_attribute_collection',
                'default_group'               => 'Social Integration',
                'attributes'                  => array(
                    'inheritance' => array(
                        'type'       => 'int',
                        'label'      => 'Inherit from parent',
                        'input'      => 'select',
                        'source'     => 'adminhtml/system_config_source_yesno',
                        'sort_order' => 1,
                        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
                        'group'      => 'Social Integration',
                    ),
                    'name' => array(
                        'type'       => 'text',
                        'label'      => 'Social Items',
                        'input'      => 'text',
                        'sort_order' => 2,
                        'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
                        'group'      => 'Social Integration',
                    )
                )
            ),
            /*
            'catalog_product' => array(
                'entity_model'                => 'catalog/product',
                'attribute_model'             => 'catalog/resource_eav_attribute',
                'table'                       => 'catalog/product',
                'additional_attribute_table'  => 'catalog/eav_attribute',
                'entity_attribute_collection' => 'catalog/product_attribute_collection',
                'attributes'                  => array(
                    'ingredients' => array(
                        'type'             => 'text',
                        'source'           => 'gpmd_ingredients/attribute_source_ingredients',
                        'backend'          => 'gpmd_ingredients/attribute_backend_ingredients',
                        'label'            => 'Ingredients',
                        'input'            => 'multiselect',
                        'global'           => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                        'visible'          => true,
                        'required'         => false,
                        'user_defined'     => false,
                        'default'          => '',
                        'searchable'       => true,
                        'filterable'       => true,
                        'comparable'       => false,
                        'visible_on_front' => false,
                        'unique'           => false,
                        'group'            => 'General',
                        'attribute_set'    => 'Default',
                        'sort_order'       => 100,
                    ),
                ),
            ),
            */
        );
    }
}