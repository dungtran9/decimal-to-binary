<?php



class Stack
{
    public $stack;
    public $limit;

    public function __construct()
    {
        $this->stack = [];
    }

    /**
     * @return array
     */
    public function getStack()
    {
        return $this->stack;
    }

    public function push($data)
    {
        array_unshift($this->stack, $data);
    }

    public function pop()
    {
        array_shift($this->stack);
    }
    public function toString(){
        return implode("",$this->stack);
    }
}