<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TwilioService;

class AudioCallController extends Controller
{
    protected $twilioService;

    public function __construct(TwilioService $twilioService)
    {
        $this->twilioService = $twilioService;
    }

    public function index($userId)
    {
        $token = $this->twilioService->createTwilioVoiceToken($userId);

        return view('audio-call', ['token' => $token->toJwt(), 'userId' => $userId]);
    }
}
