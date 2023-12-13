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
    <div class="msg_history" id="bandeja-chat">
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
                                    <img src="{{ asset('homes/images/internet/2.png') }}"
                                        style="width: 100%; height: 450px;">
                                </div>
                                <br>
                            @endif
                            @if ($elem[3] == 3)
                                <div class="row">
                                    <img src="{{ asset('homes/images/wow/2.png') }}"
                                        style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/wow/3.png') }}"
                                        style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/wow/4.png') }}"
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
                            @if ($elem[3] == 7)
                                <div class="row">
                                    <img src="{{ asset('homes/images/images-soporte/modem-off.gif') }}"
                                        style="width: 50%; height: 250px;">
                                </div>
                            @endif
                            @if ($elem[3] == 6)
                                <div id="map" style="height: 400px;"></div>
                                <form method="POST" action="{{ route('ordenTrabajo.update') }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" hidden id="latitud" name="latitud">
                                    <input type="text" hidden id="longitud" name="longitud">
                                    <button type="submit" class="btn btn-primary">Realizar Solicitud</button>
                                </form>
                            @endif
                            @if ($elem[3] == 5)
                                <p>
                                    {{ $elem[1] }}
                                </p>
                            @else
                                <p>
                                    {{ $elem[1] }}
                                </p>
                                <span class="time_date"> {{ $elem[2] }} </span>
                                {{-- @livewire ('mapa-component') --}}
                            @endif
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
            <input type="text" class="write_msg" id="phraseDiv" wire:model="msg" placeholder="Escriba un mensaje"
                autofocus />
            <button class="msg_send_btn" id="startRecognizeOnceAsyncButton" type="button">
                <i class="fa fa-microphone" aria-hidden="true"></i>
            </button>
            <button class="msg_send_btn" type="button" wire:click="enviarChat">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
            </button>
            <div id="text-button" class="mt-3" hidden>
                <button class="btn btn-secondary" id="startSpeakTextAsyncButton">Reproducir texto</button>
            </div>
        </div>
    </div>
</div>
