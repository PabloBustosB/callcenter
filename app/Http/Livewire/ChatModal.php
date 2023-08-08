<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Chats;
use Livewire\WithFileUploads;

class ChatModal extends Component
{
    public $showModal = false;
    public $selectedSatisfaccionId;
    public $chats;

    protected $listeners = ['openModal'];

    public function mount($satisfaccionId)
    {
        $this->selectedSatisfaccionId = $satisfaccionId;
        /* dd($this->selectedSatisfaccionId); */
        $this->chats = Chats::where('id_interaccion', $this->selectedSatisfaccionId)->get();
        // $this->showModal = false;
    }

    public function openModal()
    {

        $this->showModal = true;
        /*dd($this->chats); */
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        /* dd($this->chats); */
        return view('livewire.chat-modal');
    }
}
