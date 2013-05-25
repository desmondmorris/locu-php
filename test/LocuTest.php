<?php

class LocuTest extends PHPUnit_Framework_TestCase
{

    public static $config = array(
        'api_key' => 'APIKEY'
    );

    public function setUp()
    {
        $stub = $this->getMock(
            'Request',
            array('call'),
            array(self::$config)
        );

        $response = new stdClass;

        $stub->expects($this->any())
            ->method('call')
            ->will($this->returnValue($response));
        $this->Locu = new Locu($stub);
    }

    /**
     * @expectedException Exception
     */
    public function testMissingConfigThrowsException()
    {
        $MobileCommons = new Locu();
    }

    /**
     * @expectedException Exception
     */
    public function testMissingApiKeyThrowsException()
    {
        $config = self::$config;
        unset($config['api_key']);
        $MobileCommons = new Locu(null, $config);
    }

    private function _testCallResponse($method, $params = array())
    {
        return $this->assertTrue( is_object( $this->Locu->$method($params) ) );
    }

    public function testVenueSearch()
    {
        $this->_testCallResponse('venue_search');
    }

    public function testVenueDetails()
    {
        $this->_testCallResponse('venue_details');
    }

    public function testVenueInsights()
    {
        $this->_testCallResponse('venue_insights');
    }

    public function testMenuItemSearch()
    {
        $this->_testCallResponse('menu_item_search');
    }

    public function testMenuItemDetails()
    {
        $this->_testCallResponse('menu_item_detail');
    }

    public function testMenuItemInsight()
    {
        $this->_testCallResponse('menu_item_insight');
    }

}
