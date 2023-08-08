<div>
    <button class="btn btn-sm btn-primary" wire:click="openModal" data-bs-toggle="modal" data-bs-target="#chatModal">
        <i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}
    </button>
    @if($showModal)
        <!-- Aquí va el código del modal -->
        <div id="chatModal" data-backdrop="" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detalles del Chat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Aquí puedes mostrar los datos del chat -->
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Emisor</th>
                                    <th>Mensaje</th>
                                    <th>Fecha</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chats as $chat)
                                    <tr>
                                        <td>{{ $chat->id }}</td>
                                        <td>{{ $chat->emisor }}</td>
                                        <td>{{ $chat->mensaje }}</td>
                                        <td>{{ $chat->fecha }}</td>
                                        <td>{{ $chat->accion }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeModal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>


