<?php 
class Order 
{
    private $order_id;
    private $order_time;
    private $user_id;
    public function getId()
    {
        return $this->order_id;
    }
    public function getTime()
    {
        return $this->order_time;
    }
    public function getUser()
    {
        return $this->user_id;
    }
    public function __construct($order_id,$order_time,$user_id)
    
    {
        $this->order_id = $order_id;
        $this->order_time=$order_time;
        $this->user_id=$user_id;
    }
}