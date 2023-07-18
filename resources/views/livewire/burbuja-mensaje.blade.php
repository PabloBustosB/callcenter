<div>
    <div class="msg_history">
        @foreach ($list as $elem)
            @if ($elem[0] == 'bot')
                <div class="incoming_msg">
                    <div class="incoming_msg_img">
                        <img src="https://ptetutorials.com/images/user-profile.png" alt="img">
                    </div>
                    <div class="received_msg">
                        <div class="received_withd_msg">
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
            <input type="text" class="write_msg" id="phraseDiv" wire:model="msg" placeholder="Escriba un mensaje"/>
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

