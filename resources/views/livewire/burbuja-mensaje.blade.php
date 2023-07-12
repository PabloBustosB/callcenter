<div>
    <div class="msg_history">
        @foreach ($list as $elem)
            @if ($elem[0] == 'bot')
                <div class="incoming_msg">
                    <div class="incoming_msg_img">
                        <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                    </div>
                    <div class="received_msg">
                        <div class="received_withd_msg">
                            <p>
                                {{ $elem[1] }}
                            </p>
                            {{-- <p>Preciona el boton de audio para que pueda ayudarte</p> --}}
                            <span class="time_date"> {{ date('d-m-Y h:i:s') }}</span>
                        </div>
                    </div>
                </div>
            @else
                <div class="outgoing_msg">
                    <div class="sent_msg">
                        <p>
                            {{ $elem[1] }}

                        </p>
                        <span class="time_date"> {{ date('d-m-Y h:i:s') }}</span>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="type_msg">
        <div class="input_msg_write">
            <input type="text" class="write_msg" placeholder="Type a message" />
            <button class="msg_send_btn" type="button" wire:click="enviarChat">
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
            </button>
            {{-- <button wire:click="increment">+</button> --}}
        </div>
    </div>
</div>
