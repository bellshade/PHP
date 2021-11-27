<?php

namespace Basic\OOP;

//OOP
class Contoh
{
    private $param = array();

    public function set($nama, $nilai)
    {
        $this->param[$nama] = $nilai;
    }

    public function get($nama)
    {
        return isset($this->param[$nama]) ? $this->param[$nama] : null;
    }
}

//driven
$test = new Contoh('nama', 'Bellshade');
echo $test->get('nama');

//.End of OOP

//Prosedural
function newContoh()
{
    return array();
}

function setContoh(&$param, $nama, $nilai)
{
    return $param[$nama] = $nilai;
}

function getContoh($param, $nama)
{
    return isset($param[$nama]) ? $param[$nama] : null;
}

//penggunaan prosedural
$test = newContoh();
setContoh($test, 'nama', 'Bellshade');
echo getContoh($test, 'nama');

//.Prosedural
