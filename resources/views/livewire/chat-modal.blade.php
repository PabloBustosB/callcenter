<div wire:ignore.self class="modal fade" id="modalChat" tabindex="-1" role="dialog" aria-labelledby="modalChatLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalChatLabel">Chats de la Interacción</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($chats && count($chats) > 0)
                    <table class="table table-striped">
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
                @else
                    No hay chats disponibles.
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        Livewire.on('abrirModal', () => {
            $('#modalChat').modal('show');
        });
    </script>
@endpush
