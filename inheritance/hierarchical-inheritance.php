<?php
interface iTemplate
{
    public function setVariable($name);
    public function getHtml();
}

class HTML
{
    protected $name;
    public $id;
    private $with;
    protected function basicAttribute()
    {
        return "name='$this->name' id='$this->id'";
    }
}
Class HTML_div extends HTML implements iTemplate
{
    public function __construct($id , $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getDiv($content)
    {
        $basicAttribute = $this->basicAttribute();
        return "<div $basicAttribute >$content</div>";
    }

    public function setVariable($with)
    {
         $this->with = $with;
    }

    public function getHtml()
    {
       return $this->with;
    }
}
$objectDiv = new HTML_div("bloc_main" , 'avc');
echo $objectDiv->getDiv('This is and example of inheritance in php');
 $objectDiv->setVariable("test");
 echo $objectDiv->getHtml();