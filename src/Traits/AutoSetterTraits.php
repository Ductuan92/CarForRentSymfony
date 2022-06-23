<?php

namespace App\Traits;

trait AutoSetterTraits
{
    public function autoSet(array $requests): self
    {
        foreach ($requests as $key => $request) {
            $action = 'set' . ucfirst($key);
            if (!method_exists($this, $action) || empty($request)) {
                continue;
            }
            $this->{$action}($request);
        }

        return $this;
    }
}
