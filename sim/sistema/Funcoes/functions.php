<?php

class Functions {
    public function base64 ($vlr , $tipo) {
        switch ($tipo) {
            case 1 :
                return $rst = base64_encode($vlr);
               break;
            case 2:
                return $rst = base64_decode($vlr);
                break;
            default:
                return "Tipo inválido";
 }
        return $rst;
    }
}