<?php

namespace Redbastie\Swift\Livewire;

use Illuminate\Cache\RateLimiter;
use Illuminate\Support\Str;

trait ThrottlesAttempts
{
    protected function hasTooManyAttempts()
    {
        return $this->rateLimiter()->tooManyAttempts($this->throttleKey(), $this->throttleAttempts(), $this->throttleDecayMinutes());
    }

    protected function incrementAttempts()
    {
        $this->rateLimiter()->hit($this->throttleKey());
    }

    protected function clearAttempts()
    {
        $this->rateLimiter()->clear($this->throttleKey());
    }

    protected function availableInSeconds()
    {
        return $this->rateLimiter()->availableIn($this->throttleKey());
    }

    protected function throttlePrefix()
    {
        return $this->model['email'];
    }

    protected function throttleKey()
    {
        return $this->throttlePrefix() . '|' . request()->ip();
    }

    public function throttleAttempts()
    {
        return property_exists($this, 'throttleAttempts') ? $this->throttleAttempts : 5;
    }

    public function throttleDecayMinutes()
    {
        return property_exists($this, 'throttleDecayMinutes') ? $this->throttleDecayMinutes : 1;
    }

    protected function rateLimiter()
    {
        return app(RateLimiter::class);
    }
}
