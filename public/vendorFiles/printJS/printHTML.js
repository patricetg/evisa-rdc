function printHTML()
{
    //window.print();
    printJS({
        printable: "htmlToPrint",
        type: 'html',
        header: 'PrintJS - Form Element Selection',
        // header: '<h3 class="custom-h3">My custom header</h3>',
        //  style: '.custom-h3 { color: red; }',
        //    headerStyle : "font-weight: 300;",
        scanStyles : true,
        // targetStyles : [],
        maxWidth : 800,
        // css :  ["http://localhost/myFiles/codeCltPersonnels/eMaroc/public/myFiles/css/print/signatures.css"],
        modalMessage : "Retrieving Document...",
        //    documentTitle : "Titre de mon document"

    });
}

/*

$(document).ready(function(){
    $(".printHTML").click(function(e){
        e.preventDefault();
        //window.print();
        printJS({
            printable: "htmlToPrint",
            type: 'html',
            //header: 'PrintJS - Form Element Selection'
           // header: '<h3 class="custom-h3">My custom header</h3>',
          //  style: '.custom-h3 { color: red; }',
        //    headerStyle : "font-weight: 300;",
            scanStyles : false,
           // targetStyles : [],
            maxWidth : 800,
            css : ["http://localhost/myFiles/codeCltPersonnels/eMaroc/public/myFiles/css/print/signatures.css"],
            modalMessage : "Retrieving Document...",
        //    documentTitle : "Titre de mon document"

        });

    })
});
*/
