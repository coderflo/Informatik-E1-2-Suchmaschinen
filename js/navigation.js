var duration = 1000;

$("#item_explanations").hover(
    function hoverOn(){
        $("#item_explanations ul").fadeIn(duration);
    },
    
    function hoverOff(){
        $("#item_explanations ul").fadeOut(duration);
    });
    
$("#item_suchmaschinen").hover(
    function hoverOn(){
        $("#item_suchmaschinen ul").fadeIn(duration);
    },
    
    function hoverOff(){
        $("#item_suchmaschinen ul").fadeOut(duration);
    });