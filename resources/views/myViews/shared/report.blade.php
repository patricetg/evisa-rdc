
{{--

        <a class="btn btn-info autohidebut" href="javascript:;" onclick="$.Notification.autoHideNotify('info', 'top right', 'I will be closed in 5 seconds...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Info</a>
--}}


@if(Session::has("status"))

    <script>

        let status = @php echo json_encode(Session::get("status")); @endphp {{--{{ json_encode(Session::get("status")) }}--}},
            msg = @php echo json_encode(Session::get("data")['primaryData']['msg'] ); @endphp {{--{{ json_encode(Session::get("data")['primaryData']['msg'] ) }}--}} ;

        console.log("status")
        console.log(status)
        console.log("msg")
        console.log(msg)

        let type = "",
            title = "";
        if(status==="succesTraitement")
        {
            type = "success";
            title = "Succès du traitement"
        }
        else if(status==="echecTraitement")
        {
            type = "error";
            title = "Erreur"
        }

        $(document).ready(function(){
            $.Notification.autoHideNotify(
                type,
                "top right",
                title,
                msg
            )
        })

    </script>


@endif
