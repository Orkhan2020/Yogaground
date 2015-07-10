<?php

namespace App\Events;

use App\Events\Event;
use App\Newsletter;
use App\Workshop;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Http\Request;


class WorkshopEvent extends Event
{
    use SerializesModels;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var Workshop
     */
    private $workshop;

    /**
     * WorkshopEvent constructor.
     * @param Request $request
     * @param Workshop $workshop
     */
    public function __construct(Request $request, Workshop $workshop)
    {
        $this->request = $request;
        $this->workshop = $workshop;
    }


    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @return Workshop
     */
    public function getWorkshop()
    {
        return $this->workshop;
    }





}
