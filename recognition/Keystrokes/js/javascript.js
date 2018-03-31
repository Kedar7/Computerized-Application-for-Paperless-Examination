var buffer = [];

var diff = [];

function checkUser() {
    alert( "Length = " + buffer.length );
}

document.onkeypress = function(e) {
    var timestamp = Date.now() | 0;
    // alert(" timestamp = " + timestamp );
    

    buffer.push(timestamp);

    //alert(" buffer = " + buffer );

    // + " key = " = stroke["k"] + " timestamp = " + stroke["t"] 
}


