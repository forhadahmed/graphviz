var lastdot = "";
var error = "<div class='error'>XXX</div>"

function load_image(src, callback) {
    var img = new Image();
    img.onload = callback;
    img.src = src;
}

function display_error(cell, err) {
    cell.html(error.replace("XXX", err));  
}

function graph_from_dot(textarea, cell) {

    var dot = $.trim(textarea.val());

    if (dot == lastdot) {
        return;
    }
    
    lastdot = dot;
    
    cell.html("<span style='font-family: arial; font-size: 10px; color: #ccc'>Loading... </span>");
 
    $.ajax({
        url : "graphviz.php",
        cache: false,
        type: "POST",
        data : {dot: lastdot},
        success: function(data, status, ajax) {
 
            if (data.slice(-4) == ".png") {
                
                load_image(data, function() { cell.html("<br><img src='"+data+"'>"); }); 
            
            } else {
                display_error(cell, data);
            }
        },
        error: function (ajax, status, error) {
            cell.html("");
        }
    });
}


