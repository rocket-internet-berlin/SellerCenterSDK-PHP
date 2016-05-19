<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;


/**
 * Class CategoryTreeTest
 * @package RocketLabs\SellerCenterSdk\Endpoint\Product\Model
 */
class CategoryTreeTest extends \PHPUnit_Framework_TestCase
{

    public function testSingleData()
    {
        $tree = new CategoryTree(
            [
                'Children' => [
                    'Category' => [
                        'Name' => 'Hello world !'
                    ]
                ]
            ]
        );
    }

    public function testListData()
    {
        $tree = new CategoryTree(
            [
                'Children' => [
                    'Category' => [
                        [
                            'Name' => 'Hello world !'
                        ],
                        [
                            'Name' => 'Hello world !'
                        ]
                    ]
                ]
            ]
        );
    }

}
