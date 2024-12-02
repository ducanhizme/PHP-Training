<?php
class HtmlElement{
    public array $attribute =[];


    public function __construct(public string $tag)
    {
    }
//sẻet
    public function __set(string $name, $value): void
    {
        $this->attribute[$name] = $value;
    }
//get
    public function __get(string $name)
    {
        if(array_key_exists($name,$this->attribute)){
            return $this->attribute[$name];
        }
    }

    public function __invoke(): void
    {
        echo "From invoke";
        echo $this->html('Hello');
    }


    public function html(string $content):string
    {
        $html = "<$this->tag";
        foreach ($this->attribute as $key  => $item) {
            $html .= ' ' . $key . '="' . $item . '"';
        }
        $html .= '>';
        $html .= $content;
        $html .= "</$this->tag>";
        return $html;
    }
}

$div = new HtmlElement('div');
//non - exits property
$div->id = 'test';
$div->class = 'dflex';
//var_dump($div->html('Hello'));
//var_dump($div->id);
function test($test): void
{
     $test();
}
test($div);