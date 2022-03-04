
<script>
    $(document).ready(function(){

        $("body").on("submit","form",function(e){
            if(!confirm("Etes-vous certain(e) de vouloir soumettre le formulaire ?"))
                return false;
        });

        $("body").on("click","button[type='reset']",function(e){
            if(!confirm("Etes-vous certain(e) de vouloir réinitialiser le formulaire ?"))
                return false;
        });


        $("body").on("click",".deconnexion",function(e){
            if(!confirm("Se déconnecter ? (Attention : toute opération non enregistrée sera perdue)"))
                return false;
        });

        $("body").on("click",".confirm-action",function(e){
            if(!confirm("Etes-vous sûr de vouloir continuer cette action ?"))
                return false;
        });

        $("body").on("click",".delete-row",function(e){
            let name = $(this).data("row-name");
            if(!confirm("Supprimer les informations concernant '"+name+"' ?"))
                return false;
        });


    });
</script>
