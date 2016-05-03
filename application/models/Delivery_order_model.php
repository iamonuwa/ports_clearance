<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_order_model extends MY_Model {

	/**
     * This model's default database table. Automatically
     * guessed by pluralising the model name.
     */
    protected $_table = 'delivery_order';

    /**
     * This model's default primary key or unique identifier.
     * Used by the get(), update() and delete() functions.
     */
    protected $primary_key = 'id';
    
    /**
     * Support for soft deletes and this model's 'deleted' key
     */
    protected $soft_delete = FALSE;
    protected $soft_delete_key = 'deleted';
    protected $_temporary_with_deleted = FALSE;
    protected $_temporary_only_deleted = FALSE;
    
    
    /**
     * By default we return our results as objects. If we need to override
     * this, we can, or, we could use the `as_array()` and `as_object()` scopes.
     */
    protected $return_type = 'array';
    protected $_temporary_return_type = NULL;
    
    public function __construct() {
        parent::__construct();
    }

}

/* End of file Delivery_order_model.php */
/* Location: ./application/models/Delivery_order_model.php */