@extends('layouts.app')

@section('custom-style')
@include('panel.everyone.sections.includes.style')
@endsection

@section('content')
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-top border-end border-bottom bg-dark" id="sidebar-wrapper">
            @include('panel.everyone.sections.includes.sidebar')
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper" class="border-bottom">
            <!-- Top navigation-->
            @include('panel.everyone.sections.includes.nav')
            <!-- Page content-->
            <div class="container-fluid px-4">
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card bg-dark border shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h3 class="font-weight-bold mb-2">
                                            <i class="fas fa-comment-alt"></i> Czat
                                        </h3>
                                    </div>
                                    <!--col-->
                                    <div class="col text-end">
                                        <button class="btn btn-secondary btn-sm" onclick="GETMESSAGE()"><i class="fas fa-sync"></i> Załaduj</button>
                                    </div>
                                </div>
                                <!--row-->
                                <div class="col">
                                    <div class="pt-3 pe-3" data-mdb-perfect-scrollbar="true" style="min-height:350px; max-height: 650px; overflow: hidden auto; overflow-y: auto;">
                                        <div id="chat-loading">
                                            <div class="mt-5 mb-5 d-flex justify-content-center">
                                                <div class="p-3">
                                                    <div class="first text-center">
                                                        <div class="spinner-border" style="width: 5rem; height:5rem" role="status"></div>
                                                        <h3 class="mt-3">Ładowanie wiadomości ...</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="chat-inner" style="height: 100%;"></div>
                                    </div>
                                    <div id="chat-send-form">
                                        @if($chatsettings->blocked == 0)
                                            @if($chatpermuser->blocked == 0)
                                                <div class="d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                                                    @csrf
                                                    <img class="rounded-circle" src="{{ auth()->user()->getPicture() }}" alt="avatar 3" style="width: 40px; height: 100%;">
                                                    <input type="text" class="form-control form-control-lg mx-2" id="chat-input-message" name="message" placeholder="Napisz wiadomość">
                                                    <span class="d-inline-block" tabindex="0" data-mdb-toggle="tooltip" data-mdb-html="true" title='<i class="fas fa-tools"></i> W budowie'>
                                                        <a class="btn btn-primary btn-lg ms-1 text-m uted disabled" disabled><i class="fas fa-paperclip"></i></a>
                                                    </span>
                                                    <span class="d-inline-block" tabindex="0" data-mdb-toggle="tooltip" data-mdb-html="true" title='<i class="fas fa-tools"></i> W budowie'>
                                                        <a class="btn btn-secondary btn-lg ms-2 text-mu ted disabled" disabled><i class="fas fa-smile"></i></a>
                                                    </span>
                                                    <button class="btn btn-success btn-lg ms-2" id="chat-button-send" type="button" data-mdb-toggle="tooltip" data-mdb-html="true" title='<i class="fas fa-paper-plane"></i> Wyślij' onclick="sendmessage()"><i class="fas fa-paper-plane fa-lg"></i></button>
                                                </div>
                                            @else
                                                <div class="d-flex justify-content-start align-items-center pe-3 pt-3 mt-2 border-top">
                                                    <img class="rounded-circle" src="{{ auth()->user()->getPicture() }}" alt="avatar 3" style="width: 40px; height: 100%;">
                                                    <span class="ms-auto me-auto text-danger">
                                                        <b> Możliwość pisania na czacie w: {{ $section->name }} została odebrana.</b>
                                                        <p class="mb-0 text-center">
                                                            {{ $chatpermuser->blocked_reason }}
                                                        </p>
                                                    </span>
                                                </div>
                                            @endif
                                        @else
                                            <div class="d-flex justify-content-start align-items-start pe-3 pt-3 mt-2">
                                                <img class="rounded-circle" src="{{ auth()->user()->getPicture() }}" alt="avatar 3" style="width: 40px; height: 100%;">
                                                <span class="ms-auto me-auto text-danger ">
                                                    <b> {{ $chatsettings->firstname }} {{ $chatsettings->lastname }} wyłączył/a możliwość pisania na czacie: {{ $section->name }}.</b>
                                                    <p class="mb-0 text-center">
                                                        {{ $chatsettings->blocked_reason }}
                                                    </p>
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        var div = $('#chat-inner');

        let message = $('#chat-input-message');

        GETMESSAGE();
        setInterval(GETMESSAGE, 20000);

        function scrollToBottom() {
            $("#chat-inner").scrollTop = $("#chat-inner").scrollHeight;
        }

        function sendmessage() {
            event.preventDefault();
            let error = '';

            if (message.val().length === 0) {
                error = 1;
                message.addClass("is-invalid mb-0");
            } else {
                message.removeClass("is-invalid mb-0");
                message.addClass("is-valid");
            }

            if (error === ''){
                $("#chat-loading").css("display", "block");
                $("#chat-inner").css("display", "none");

                $("#chat-button-send").prop('disabled', true);

                function encodeQueryData(data) {

                   let ret = [];
                   for (let d in data)
                       ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]));
                   return ret.join('&');

                }
                //wniosek o zmiane etatu
                var datalogin = encodeQueryData({
                    'message': message.val()
                });
                $.ajax({
                    type: 'POST',
                    data: datalogin,
                    url: "{{ route('user.sections.message.send', $section->id) }}",
                    headers:
                    {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (responseText) {
                        console.log(responseText);
                        GETMESSAGE()
                        message.removeClass("is-valid");
                        message.removeClass("is-invalid");
                        message.val('');
                        div.scrollTop = div.scrollHeight;
                        $("#chat-button-send").prop('disabled', false);
                    }
                });

          } else {
              toastr.error('Błąd! Wypełnij poprawnie wszystkie wymagane pola.');
          }
        }

        function GETMESSAGE() {

            $("#chat-loading").css("display", "block");
            $("#chat-inner").css("display", "none");


            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: "{{ route('user.sections.message.get', $section->id) }}",
                //dataType: 'json',
                success: function (response) {
                    // console.log(response);
                    div.empty();
                    div.html(response).animate({scrollTop: div.prop("scrollHeight")});
                    $("#chat-loading").css("display", "none");
                    $("#chat-inner").css("display", "block");

                    div.scrollTop = div.scrollHeight;
                },error:function(response){
                    div.empty();
                    div.html('<div class="mt-5 mb-5 d-flex justify-content-center">'+
                        '<div class="p-3">'+
                            '<div class="first text-center">'+
                            '    <i class="fas fa-info-circle fa-6x"></i>'+
                            '    <h3 class="mt-3">Błąd ładowania danych</h3>'+
                            '    <p class="text-muted">'+
                            '        Spróbuj ponownie później'+
                            '    </p>'+
                        '    </div>'+
                        '</div>'+
                    '</div>').animate({scrollTop: div.prop("scrollHeight")});
                    $("#chat-loading").css("display", "none");
                    $("#chat-inner").css("display", "block");

                    div.scrollTop = div.scrollHeight;
                }
            });
            div.scrollTop = div.scrollHeight;
        }

    </script>
@endsection
