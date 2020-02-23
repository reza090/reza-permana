<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
.button-share {
    display: inline-block;
}
.button-share:after {
    content:"";
    display:table;
    clear:both;
}
.button-share .social-button {
    float: left;
    height: 30px;
    width: 30px;
    margin-right: 5px;
    transition: 0.5s;
}
.button-share .social-button:last-child {
    float: left;
    height: 30px;
    width: 30px;
    margin-right: 5px;
}
.button-share .social-button:last-child {
    margin-right: 0;
}
.button-share .social-button img {
    max-width: 100%;
}
.button-share:hover .social-button{
    opacity:0.5;
}
.button-share:hover .social-button:hover{
    opacity:1;
}
.social-button {
    border: 1px solid #FFFFFF;
    border-radius: 5px;
    box-shadow: 0 2px 3px #AAAAAA;
    display: block;
    margin-bottom: 5px;
    padding: 5px;
    position: relative;
}

</style>
<body>
<script language="javascript">
function share_click(url){
    var width  = 500;
    var height = 400;
    var top    = 20;
    var left   = (screen.width  - width)/2;
    var params = "width="+width+", height="+height;
    params += ", top="+top+", left="+left;
    params += ", toolbar=no";
    var site = document.URL;
    var title = document.title.replace(/[^\w\s]/gi, '');
    var domain = url.split("/")[2];
    switch(domain) {
        case "www.facebook.com":
        link = url+site+"&t="+title;
        break;
        case "plus.google.com":
        link = url+site;
        break;
        default:
        link = url+site+title;
    }
    newwin=window.open(link,"indocodex", params);
    if (window.focus) {newwin.focus()}
    return false;
}
</script>
	
<div class="button-share">

<a class="social-button" href="http://www.twitter.com/intent/tweet?text=" title="Berbagi ke Twitter" onclick="return share_click(this.href)" target="_blank"><img src="twitter.png" ></a>

<a class="social-button" href="http://www.facebook.com/sharer/sharer.php?u=" title="Berbagi ke Facebook" onclick="return share_click(this.href)" target="_blank"><img src="facebook.png" </a>

<a class="social-button" href="http://plus.google.com/share?url=" onclick="return share_click(this.href)" target="_blank" title="Berbagi ke Google plus"><img src="google.png"></a>

</div>


</body>
</html>