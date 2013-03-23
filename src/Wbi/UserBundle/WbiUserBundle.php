<?php
// src/Wbi/UserBundle/WbiUserBundle.php

namespace Wbi\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WbiUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}