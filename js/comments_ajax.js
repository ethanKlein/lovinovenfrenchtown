function makeRequest(name, title, comment) {
    var httpRequest;

    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        httpRequest = new XMLHttpRequest();
        if (httpRequest.overrideMimeType) {
            httpRequest.overrideMimeType('text/xml');
            // See note below about this line
        }
    } 
    else if (window.ActiveXObject) { // IE
        try {
            httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
            } 
            catch (e) {
                       try {
                            httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                           } 
                         catch (e) {}
                      }
                                   }
    if (!httpRequest) {
        alert('Giving up :( Cannot create an XMLHTTP instance');
        return false;
    }
    httpRequest.onreadystatechange = function() { alertContents(httpRequest); };
    var url="insert.php";
 	url = url + "?name=" + name + "&comment=" + comment;
	httpRequest.open('GET', url, true);
    httpRequest.send('');
}

function alertContents(httpRequest) {
    if (httpRequest.readyState == 4) {
        if (httpRequest.status == 200) {
			document.getElementById('comments_list').innerHTML=httpRequest.responseText;
        } else {
            alert('There was a problem with the request.');
        }
    }
}
