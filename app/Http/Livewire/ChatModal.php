<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Chats;
use Livewire\WithFileUploads;

class ChatModal extends Component
{
    use WithFileUploads;
    public $satisfaccionId;
    public $chats;

    protected $listeners = ['mostrarChats'];

    public function mostrarChats($id)
    {
        $this->satisfaccionId = $id;
        $this->cargarChats();
        $this->dispatchBrowserEvent('abrirModal'); // Emitir evento para abrir el modal
    }

    public function cargarChats()
    {
        $this->chats = DB::table('chat')->where('id_interaccion', $this->satisfaccionId)->get();
    }

    public function render()
    {
        return view('livewire.chat-modal');
    }
}
