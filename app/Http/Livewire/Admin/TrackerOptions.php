<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class TrackerOptions extends Component
{
    public $tracker_status;
    public $tracker_company;
    public $tracker_guide;
    public $order;
    public $formVisible = false;
    protected $listeners = ['capture' => '$refresh'];

    public function mount(Order $order)
    {
        $this->tracker_status = $order->tracker_status;
    }

    public function formCapture()
    {
        $this->formVisible = true;
    }

    public function formUpdate($order)
    {
        $this->formVisible = true;
        $order = Order::find($order);

        $this->tracker_company = $order->tracker_company;
        $this->tracker_guide = $order->tracker_guide;
    }

    public function cancel()
    {
        $this->formVisible = false;
    }

    public function capture($order)
    {
        $order = Order::find($order);
        $order->update([
            'tracker_company' => $this->tracker_company,
            'tracker_guide' => $this->tracker_guide,
            'tracker_status' => 'sending'
        ]);
        $order->save();
        $this->formVisible = false;
        $this->tracker_status = 'sending';
        return back();
    }
    public function update($order)
    {
        $order = Order::find($order);
        $order->update([
            'tracker_company' => $this->tracker_company,
            'tracker_guide' => $this->tracker_guide,
        ]);
        $order->save();
        $this->formVisible = false;
    }

    public function send($order)
    {
        $order = Order::find($order);
        $order->update([
            'tracker_status' => 'complete',
        ]);
        $order->save();
        $this->formVisible = false;
        $this->tracker_status = 'complete';
    }
    public function render()
    {
        return view('livewire.admin.tracker-options');
    }
}
