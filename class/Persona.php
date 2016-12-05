<?php
class Persona implements ArrayAccess{
    private $propiedades = array(); 
    
    public function offsetExists($offset) {
        return array_key_exists($offset, $this->propiedades);
    }

    public function offsetGet($offset) {
        return $this->propiedades[$offset];
    }

    public function offsetSet($offset, $value) {
        $this->propiedades[$offset] = $value;
    }

    public function offsetUnset($offset) {
        unset($offset, $this->propiedades);
    }

}

$per = new Persona();
$per->offsetSet("nombre", "William");
$per->offsetSet("apellido", "Jose");
if($per->offsetExists("nombre")):
    echo "Existe";
    echo $per->offsetGet("nombre").$per->offsetGet("apellido");
    $per->offsetUnset("nombre");
else:
    echo "No existe";
endif;