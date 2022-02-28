
$(document).ready(function () {

    let left = 0,
        top = 0;
//    currentPage = document.location;

    // The x and y offset of the canvas from the edge of the page
    let page = document.getElementById("A4-page").getBoundingClientRect();

    $("body").on("click", "#A4-page", function (e) {

        let offsetX = Math.round(left); // e.offsetX;
        let offsetY = Math.round(top); // e.offsetY;

        $("#left").val(offsetX);
        $("#top").val(offsetY);

        //return to the top of form
        let loc = document.location.toString().split('#')[0];
        //  document.location += "#top-of-form";
        document.location = loc + "#pageTop";

        console.log("loc")
        console.log(loc)
        
        /*
        let unCm = 40; // 1cm = 40 offset, suite à des tests
        //conversion des offset en cm
        let left = offsetX / unCm,
            top = offsetY / unCm;
        */
        console.log("click")
        console.log(e);
    });


    $("body").on("mousemove", "#A4-page", function (e) {

        page = document.getElementById("A4-page").getBoundingClientRect();


        let x = e.clientX - page.left; // e.offsetX;
        let y = e.clientY - page.top; // e.offsetY;

        $("#trait-hor").css("top", y);
        $("#trait-vert").css("left", x);

        left = x;
        top = y;

        //  console.log("mousemove")
        //  console.log(e)
    });

    /*
    $("#relaodRepere").click(function (e) {
        page = document.getElementById("A4-page").getBoundingClientRect();

        $("#A4-page").mousemove();
        console.log("relaodRepere clicked");
        //e.preventDefault
        return false;
    });

    $("body").on("keyup", ".container-fluid", function (e) {
        $("#A4-page").mousemove();
        console.log("keyup");
    });

    function updateRepere() {

    }
    */

    //$("#A4-page").mousemove(function (e) {
    //    let x = e.clientX - page.left; // e.offsetX;
    //    let y = e.clientY - page.top; // e.offsetY;

    //    $("#trait-hor").css("top", y);
    //    $("#trait-vert").css("left", x);

    //    left = x;
    //    top = y;

    //    //  console.log("mousemove")
    //    //  console.log(e)
    //});


    /*
    $("#A4-page").hover(onMouseEnter, onMouseLeave);

    function onMouseEnter(e) {
        console.log("onMouseEnter")
        console.log(e)
    }

    function onMouseLeave(e) {
        console.log("onMouseLeave")
        console.log(e)
    }

    $("#A4-page").mouseenter(function (e) {
        console.log("mouseenter")
        console.log(e)
    });

    $("#A4-page").mouseleave(function (e) {
        console.log("mouseenter")
        console.log(e)
    })
    */
    
  
});


