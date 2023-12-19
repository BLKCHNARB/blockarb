<?php

namespace App\Event;

use App\Models\Investment;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserProfitUpdate
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $investment;
    public $profit;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Investment $investment, $profit)
    {
        $this->investment = $investment;
        $this->profit = $profit;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
