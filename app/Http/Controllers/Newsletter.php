<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateNewsletter;
use App\Services\Newsletter\Service as NewsLetterService;

class Newsletter extends Controller
{
    /**
     * @var NewsLetterService
     */
    private $newsletterService;

    public function __construct(NewsLetterService $newsletterService)
    {
        $this->newsletterService = $newsletterService;
    }

    public function register(ValidateNewsletter $validateNewsletter)
    {
        return [
            'registered' => $this->newsletterService->register(request()->get('email')),
        ];
    }
}
