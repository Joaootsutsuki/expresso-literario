<?php

function setFlash($index, $message, $status = 'error')
{
  if (!isset($_SESSION['flash'][$index])) {
    $_SESSION['flash'][$index] = ['message' => $message, 'status' => $status];
  }
}

function getFlash($index, $status = 'error')
{
  if (isset($_SESSION['flash'][$index])) {

    $flash = $_SESSION['flash'][$index];

    unset($_SESSION['flash'][$index]);
    
    $message = $flash['message'];
    $flashStatus = $flash['status'];
    
    return "<div class='flash-message $flashStatus' id='flashMessageBox'>
              <span>$message</span>
              <img src='/assets/images/close.png' alt='close button' onclick='closeFlashMessage()'>
            </div>";

  }
}