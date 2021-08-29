function loadPage(url,method,place,kind,data){
    var bodyFormData = new FormData();

    if (data == 1){
        var typestyle = document.getElementById("usertype").value
        var name = document.getElementById("name").value
        var email = document.getElementById("email").value
        var password = document.getElementById("password").value
        bodyFormData.append("typestyle",typestyle);
        bodyFormData.append("name",name);
        bodyFormData.append("email",email);
        bodyFormData.append("password",password);
        // alert(bodyFormData.get("typestyle"))
        // alert(bodyFormData.get("name"))
        // alert(bodyFormData.get("email"))
        //
        // alert(bodyFormData.get("password"))
        // alert(document.contentType)
    }
    else if(data==2){


        var typestyle = document.getElementById("usertype").value
        var name = document.getElementById("name").value
        var email = document.getElementById("email").value


        bodyFormData.append("typestyle",typestyle);
        bodyFormData.append("name",name);
        bodyFormData.append("email",email);

    }
    else if(data==3){
        var oldImage = document.getElementById("oldImage").value
        var pic = document.getElementById("file").files[0]
        var typestyle = document.getElementById("usertype").value
        var name = document.getElementById("name").value
        var email = document.getElementById("email").value

        bodyFormData.append("oldImage",oldImage);
        bodyFormData.append("pic",pic);
        bodyFormData.append("typestyle",typestyle);
        bodyFormData.append("name",name);
        bodyFormData.append("email",email);

    }
    else if(data == 4){

        var current_password = document.getElementById("current_password").value
        var password = document.getElementById("password").value
        var password_confirmation = document.getElementById("password_confirmation").value

        bodyFormData.append("current_password",current_password);
        bodyFormData.append("password",password);
        bodyFormData.append("password_confirmation",password_confirmation);

    }

    else if(data == 5){

        var className = document.getElementById("className").value
        bodyFormData.append("className",className);

    }
    else if(data == 6){
        var numberYear = document.getElementById("numberYear").value
            bodyFormData.append("numberYear",numberYear);

    }
    else if(data==7){

        var name = document.getElementById("name").value
        bodyFormData.append("name",name);

    }

    var cookievalue = getCookie("Authorization");
    // alert(cookievalue)
    // alert(typeof(cookievalue))
    // alert(url)
    // alert(typeof(url))
    // alert(method)
    // alert(typeof(method))
    // alert(place)
    // alert(typeof(place))

    let options = {
        url: url,
        method: method,
        // data: bodyFormData,
        data: bodyFormData,
        contentType: "multipart/form-data",
        headers: {
            'Authorization': cookievalue
        }


    }

    axios(options).then(res=>{


        if (kind==1){


        document.getElementById(place).innerHTML = res.data;


        // alert("nice")
        // function forceReloadJS() {
        //     $.each($('<script>'), function(index, el) {
        //         var oldSrc = $(el).attr('src');
        //         var t = +new Date();
        //         var newSrc = oldSrc + '?' + t;
        //         // console.log(oldSrc, ' to ', newSrc);
        //         $(el).remove();
        //         $('<script/>').attr('src', newSrc).appendTo('head');
        //     });
        // }
        // forceReloadJS();


        function load_js()
        {
            var head= document.getElementsByTagName('head')[0];
            var script= document.createElement('script');
            // script.src= 'source_file.js';
            script.src= 'jquery.js';
            script.src= 'backend/assets/vendors/base/vendors.bundle.js';
            script.src= 'backend/assets/demo/demo12/base/scripts.bundle.js';
            script.src= 'backend/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js';
            script.src= 'backend/assets/app/js/dashboard.js';
            script.src= 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js';
            script.src= 'helper.js';
            script.src= 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js';
            script.src= 'backend/assets/app/js/dashboard.js';
            head.appendChild(script);
        }
            load_js();



        }
        else if (kind == 2){
            window.location = "http://localhost:8000/login";
        }

        // document.body.dispatchEvent(new Event('load'));
        // window.history.pushState("", urlPage, "");
    }).catch(err=>{
        // console.log(err);
                                                                            // Remove from comment
        if(err == "Error: Request failed with status code 422")
            alert("Error : Check the fields again")
        else if(err == "Error: Request failed with status code 401")
             window.location = "http://localhost:8000/login"
                                                                            // Remove from comment
        // console.log(err)
        alert(err)
        // else if(err == "Error: Request failed with status code 401" || err == "Error: Request failed with status code 405")
        //     window.location = "http://localhost:8000/login"
        // else if(err)
            // window.location = "http://localhost:8000/login";
            // alert(err)

        // document.getElementById(place).innerHTML = "Error";


    });
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function submit(e) {
    e.stopImmediatePropagation()
    e.preventDefault()
}

var loadFile = function(event) {
    var image = document.getElementById('avatar');




    var filePath = event.target.files[0].name
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filePath))
            alert("Invalid file type")
    else
        image.src = URL.createObjectURL(event.target.files[0]);



};

