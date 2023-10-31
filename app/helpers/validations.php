<?php

function required($field)
{
    if ($_POST[$field] === '') {
        setFlash('message', "Os campos são obrigatórios");
        return false;
    }

    return strip_tags($_POST[$field]);

}


function email($field)
{
    $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);

    if (!$emailIsValid) {
        setFlash('message', "Insira um email válido");
        return false;
    }

    return strip_tags($_POST[$field]);
}


function unique($field, $param)
{

    $data = strip_tags($_POST[$field]);
    $user = findBy('user', $field, $data);

    if ($user) {
      setFlash('message', "CPF ou Email já estão cadastrados.");
      return false;
    }

    return $data;
}


function maxlen($field, $param)
{
    $data = strip_tags($_POST[$field]);

    if (strlen($data) != $param) {
        setFlash('message', "Insira um CPF válido.");
        return false;
    }

    return $data;
}

function optional($field)
{
    $data = strip_tags($_POST[$field]);

    if ($data === '') {
        return null;
    }

    return $data;
}