<?php namespace Vpl\Flash;

use Illuminate\Session\Store;

class FlashNotifier {

  private $session;

  function __construct(Store $session)
  {
    $this->session = $session;
  }

  public function success ($msg)
  {
    $this->message($msg, 'success');
  }

  public function error ($msg)
  {
    $this->message($msg, 'danger');
  }

  public function overlay ($msg)
  {
    $this->message($msg);
    $this->session->flash('flash_notification.overlay', true);
  }

  public function message ($msg, $level = 'info')
  {
    $this->session->flash('flash_notification.message', $msg);
    $this->session->flash('flash_notification.level', $level);
  }
}
