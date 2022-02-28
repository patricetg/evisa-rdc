
{{--

        <a class="btn btn-info autohidebut" href="javascript:;" onclick="$.Notification.autoHideNotify('info', 'top right', 'I will be closed in 5 seconds...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Info</a>
--}}


@if(Session::has("status"))

    @if(Session::get("status") ==  "succesTraitement")

        <script>

            $(document).ready(function(){
                $.Notification.autoHideNotify(
                    "success",
                    "top right",
                    "Succès du traitement",
                    "{{ json_encode(Session::get("data")['primaryData']['msg'] ) }}"
                )
            })
        </script>

    @elseif(Session::get("status") == "echecTraitement")

        <script>
            $(document).ready(function(){
                $.Notification.autoHideNotify(
                    "error",
                    "top right",
                    "Erreur",
                    "{{ json_encode(Session::get("data")['primaryData']['msg'] ) }}"
                )
            })
        </script>

    @endif

@endif
