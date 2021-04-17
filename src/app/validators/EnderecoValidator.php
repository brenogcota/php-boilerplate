<?php

class EnderecoValidator {

    static function validateAll($req) {
        if(!isset($req['logradouro'], $req['numero'], $req['complemento'], $req['bairro'], $req['cidade'])) {
           echo 'ixi';
           exit();  
        }
    }
}