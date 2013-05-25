<?php

/*
 * Locu API class
 * API Documentation: http://dev.locu.com/documentation/
 */

class Locu
{
    /**
     * Constructor
     *
     * @param array $config Configuration variables
     * @return void
     */
    public function __construct($config = array(), Request $requestInstance = null)
    {
        $this->Request = is_null( $requestInstance ) ? new Request($config) : $requestInstance;
    }

    /**
     * Venue: Search
     * @see http://dev.locu.com/documentation/#venuesearch
     *
     * @param array $args
     * @return array
     */
    public function venue_search($args = array()) {
        return $this->Request->call('venue/search', $args);
    }

    /**
     * Venue: Details
     * @see http://dev.locu.com/documentation/#venuedetails
     *
     * @param array $args
     * @return array
     */
    public function venue_details($args = array()) {
        return $this->Request->call('venue', $args);
    }

    /**
     * Venue: Insight
     * @see http://dev.locu.com/documentation/#venueinsights
     *
     * @param array $args
     * @return array
     */
    public function venue_insights($args = array()) {
        return $this->Request->call('venue/insight', $args);
    }

    /**
     * Menu Item: Search
     * @see http://dev.locu.com/documentation/#menuitemsearch
     *
     * @param array $args
     * @return array
     */
    public function menu_item_search($args = array()) {
        return $this->Request->call('menu_item/search', $args);
    }

    /**
     * Menu Item: Detail
     * @see http://dev.locu.com/documentation/#menuitemdetail
     *
     * @param array $args
     * @return array
     */
    public function menu_item_detail($args = array()) {
        return $this->Request->call('menu_item', $args);
    }

    /**
     * Menu Item: Insight
     * @see http://dev.locu.com/documentation/#menuiteminsight
     *
     * @param array $args
     * @return array
     */
    public function menu_item_insight($args = array()) {
        return $this->Request->call('menu_item/insight', $args);
    }

}
