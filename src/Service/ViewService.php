<?php
namespace App\Service;

class ViewService
{
    public function render(string $path): void
    {
        require sprintf('../template/%s.php', $path);
    }
}