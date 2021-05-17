<?php


class node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}



class linked_list
{
    private $head;

    public function __construct($data)
    {
        $this->head = new node($data);
    }

    function insert_node_from_head($data)
    {
        $new_node = new node($data);
        $new_node->next = $this->head;
        $this->head = $new_node;
    }


    function insert_node_from_end($data)
    {
        $last = $this->head;
        while (!is_null($last->next))
        {
            $last = $last->next;
        }

        $new_node = new node($data);
        $last->next = $new_node;
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

    function search($data)
    {
        $node = $this->head;
        while (is_object($node))
        {
            if($node->data === $data)
            {
                return TRUE;
            }
            $node = $node->next;
        }

        return FALSE;
    }

    function delete($data)
    {
        $p_node = null;
        $node = $this->head;
        while(is_object($node)){
            if($node->data === $data)
            {
                if(is_null($p_node))
                {
                    $this->head = $node->next;
                }
                else
                {
                    $p_node->next = $node->next;
                }

            }
            $p_node = $node;
            $node = $node->next;
        }

    }

    function reverse()
    {
        $p_node = null;
        $node = $this->head;
        $next_node = $node->next;

        while(is_object($next_node)){
            $node->next = $p_node;

            $p_node = $node;
            $node = $next_node;
            $next_node = $next_node->next;
        }
        $node->next = $p_node;
        $this->head = $node;
    }

}

$list = new linked_list('head');
$list->insert_node_from_end('node1');
$list->insert_node_from_head('node2');
$list->insert_node_from_head('node1');
$list->display_all();
$list->reverse();
$list->display_all();