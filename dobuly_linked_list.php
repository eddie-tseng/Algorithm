<?php

class node
{
    public $data;
    public $next;
    public $previous;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->previous = null;
    }
}



class linked_list
{
    private $head;
    private $tail;

    public function __construct($data)
    {
        $this->head = new node($data);
    }

    function insert_node_from_head($data)
    {
        $new_node = new node($data);
        $new_node->next = $this->head;
        $this->head->previous = $new_node;
        $this->head = $new_node;
    }


    function insert_node_from_end($data)
    {

        $new_node = new node($data);

        if(is_null($this->tail))
        {
            $this->tail = $new_node;
            $this->tail->previous = $this->head;
            $this->head->next= $this->tail;
        }
        else
        {
            $new_node->previous = $this->tail;
            $this->tail->next = $new_node;
            $this->tail = $new_node;
        }

    }

    function display_all()
    {

        $arr = [];
        $node = $this->head;
        while (is_object($node))
        {
            array_push($arr, $node->data);
            $node = $node->next;
        }

        print_r($arr);

    }
}


$list = new linked_list('node1');
$list->insert_node_from_end('node2');
$list->insert_node_from_end('node3');
$list->insert_node_from_head('node4');
$list->display_all();
