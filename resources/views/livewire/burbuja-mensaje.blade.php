<div>
   @if (session('success'))
        <x-alert type="success" :dismissible="true">
            {{ session('success') }}
        </x-alert>
    @endif
    @if (session('error'))
        <x-alert type="danger" :dimissible="true">
            {{ session('error') }}
        </x-alert>
    @endif
    <div class="msg_history">
        @foreach ($list as $elem)
            @if ($elem[0] == 'bot')
                <div class="incoming_msg">

                    <div class="incoming_msg_img">
                        @if ($elem[3] == 1)
                            <img src="https://ptetutorials.com/images/user-profile.png" alt="img">
                        @endif
                    </div>

                    <div class="received_msg">
                        <div class="received_withd_msg">
                            @if ($elem[3] == 2)
                                <div class="row">
                                    <img src="{{ asset('homes/images/pi1.png') }}" style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/pi2.png') }}" style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/pi3.png') }}" style="width: 33%; height: 250px;">
                                </div>
                            @endif
                            @if ($elem[3] == 3)
                                <div class="row">
                                    <img src="{{ asset('homes/images/promo1.jpg') }}"
                                        style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/promo2.jpg') }}"
                                        style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/promo3.jpg') }}"
                                        style="width: 33%; height: 250px;">
                                </div>
                            @endif
                            @if ($elem[3] == 4)
                                <div class="row">
                                    <img src="{{ asset('homes/images/pc1.png') }}" style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/pc2.png') }}" style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/pc3.png') }}" style="width: 33%; height: 250px;">
                                </div>
                            @endif
                            @if ($elem[3] == 5)
                                <div class="row">
                                    <img src="{{ asset('homes/images/ptv1.png') }}" style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/ptv2.png') }}" style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/ptv3.png') }}" style="width: 33%; height: 250px;">
                                </div>
                            @endif
                            <p>
                                {{ $elem[1] }}
                            </p>
                            <span class="time_date"> {{ $elem[2] }} </span>
                        </div>
                    </div>
                </div>
            @else
                <div class="outgoing_msg">
                    <div class="sent_msg">
                        <p>
                            {{ $elem[1] }}
                        </p>
                        <span class="time_date"> {{ $elem[2] }} </span>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="type_msg" id="content">
        <div class="input_msg_write">
            <input type="text" class="write_msg" id="phraseDiv" wire:model="msg" placeholder="Escriba un mensaje" autofocus/>
            <button class="msg_send_btn" id="startRecognizeOnceAsyncButton" type="button">
                <i class="fa fa-microphone" aria-hidden="true"></i>
            </button>
            <button class="msg_send_btn" type="button" wire:click="enviarChat">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
            </button>
            <!-- Boton Modal -->
            <button class="msg_send_btn" type="button" data-toggle="modal" data-target="#ubicacionModal">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
            </button>
            <!-- Modal -->
	    <div class="modal fade" id="ubicacionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Seleccionar Ubicación</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Mapa y formulario van aquí -->
                        <div id="map"></div>
                        <form method="POST" action="{{route('ordenTrabajo.update')}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="longitud" id="longitud">
                            <input type="hidden" name="latitud" id="latitud">
                            <button type="submit" class="btn btn-primary">Guardar Ubicación</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <div id="text-button" class="mt-3" hidden>
                <button class="btn btn-secondary" id="startSpeakTextAsyncButton">Reproducir texto</button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
