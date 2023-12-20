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
                                    <img src="{{ asset('homes/images/wow/2.png') }}" style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/wow/3.png') }}" style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/wow/4.png') }}" style="width: 33%; height: 250px;">
                                </div>
                            @endif
                            @if ($elem[3] == 4)
                                <div class="row">
                                    <img src="{{ asset('homes/images/Promos/1.png') }}"
                                        style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/Promos/2.png') }}"
                                        style="width: 33%; height: 250px;">
                                    <img src="{{ asset('homes/images/Promos/3.png') }}"
                                        style="width: 33%; height: 250px;">
                                </div>
                            @endif

                            @if ($elem[3] == 6)
                                <div id="map" style="height: 400px;"></div>
                                <br>
                                <form method="POST" action="{{ route('ordenTrabajo.update') }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" hidden id="latitud" name="latitud">
                                    <input type="text" hidden id="longitud" name="longitud">
                                    <button style="align-content: center" type="submit"
                                        class="btn btn-success">Realizar Solicitud</button>
                                </form>
                            @endif
                            @if ($elem[3] == 5)
                                <p>
                                    {{ $elem[1] }}
                                </p>
                            @elseif ($elem[3] == 9)
                                <p>{{ $elem[1] }}</p>
                                <div class="row">
                                    <img src="{{ asset('homes/images/images-soporte/router.jpg') }}"
                                        style="width: 50%; height: 400px;">
                                </div>
                            @elseif ($elem[3] == 7)
                                <p>{{ $elem[1] }}</p>
                                <div class="row">
                                    <img src="{{ asset('homes/images/images-soporte/modem-off.gif') }}"
                                        style="width: 50%; height: 250px;">
                                </div>
                            @elseif ($elem[3] == 8)
                                <p>{{ $elem[1] }}</p>
                                <div class="row">
                                    <img src="{{ asset('homes/images/images-soporte/modem-luces.gif') }}"
                                        style="width: 50%; height: 250px;">
                                </div>
                            @elseif ($elem[3] == 10)
                                <p>{{ $elem[1] }}</p>
                                <div class="row">
                                    <img src="{{ asset('homes/images/images-soporte/modemReset2.jpg') }}"
                                        style="width: 50%; height: 250px;">
                                </div>
                            @elseif ($elem[3] == 11)
                                <p>{{ $elem[1] }}</p>
                                <div class="row">
                                    <img src="{{ asset('homes/images/images-soporte/Router2paso.png') }}"
                                        style="width: 50%; height: 400px;">
                                </div>
                            @elseif ($elem[3] == 12)
                                <form
                                    action="{{ route('pdfContrato', ['servicio' => 'Internet', 'plan' => $elem[1], 'precio' => $elem[2]]) }}"
                                    method="GET">
                                    <button type="submit" class="btn btn-primary">Descargar solicitud</button>
                                </form>
                            @elseif ($elem[3] == 13)
                                <form
                                    action="{{ route('pdfContrato', ['servicio' => 'Plan Post-pago de Telefonía', 'plan' => $elem[1], 'precio' => $elem[2]]) }}"
                                    method="GET">
                                    <button type="submit" class="btn btn-primary">Descargar solicitud</button>
                                </form>
                            @else
                                <p>
                                    {{ $elem[1] }}
                                </p>
                                <span class="time_date"> {{ $elem[2] }} </span>
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
