<?php

namespace App\Admin\Extensions\Nav;

class Dropdowns
{
    public function __toString()
    {
        return <<<HTML

<li class="dropdown notifications-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
  <i class="fa fa-bell-o"></i>
  <span class="label label-warning">10</span>
</a>
</li>

HTML;
    }

}
