
function checkLoginStatus() {

    var loader = document.querySelector('.preloader');
    loader.style.display = "none";
    //Send an AJAX request to the PHP endpoint
    fetch('php/loginendpoint.php')
        .then(response => response.json())
        .then(data => {
            if (data.loggedIn) {
                //console.log(data.userid);
                //console.log('Logged in as ' + data.username + ' and the id is: ' + data.userid);
                var objj =  {
                    "api_key": "1253f2dee8776be84dcb",
                    "type": "GetRandArticlesByFriends",
                    "userId": data.userid,
                }
            
                let postt = JSON.stringify(objj);
            
                fetch("localhost/../api.php", {
                    method:'post',
                    body: postt,
                    headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                    }
                })
                .then((response) => {
                    return response.json();
                })
                .then(data => {
                   
                    //displaying articles to the feed
                    var artcl = document.querySelector('.thefeed');
                    for(var j=0; j < data.data.length; j++){
                        artcl.innerHTML += '<div class="article myart">'
                        +'<h3>'+data.data[j].title+'</h3>'
                        +'<img src="images/'+ data.data[j].image_path+'" alt="" width="200" />'
                        +'<p>'+data.data[j].description+'</p>'
                        +'<p>'+data.data[j].author+'</p>'
                        +'<div class="save-read">'
                        +'<button>Save</button>'
                        +'</div><hr/>'
                        +'</div>';
                    }

                })
                .catch(error => {
                    console.error('Error', error)
                })

                
                

            } else {
                // User is not logged in
                console.log('Not logged in');
                // Redirect to the login page or display a login form
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

window.addEventListener('load', checkLoginStatus);

function fetcharticlesByFriends(){
    var objj =  {
        "api_key": "1253f2dee8776be84dcb",
        "type": "GetRandArticlesByFriends",
        "userId": "",
        "return": "*"
    }

    let postt = JSON.stringify(objj);

    fetch("localhost/../api.php", {
        method:'post',
        body: postt,
        headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
        }
    })
    .then((response) => {
        return response.json();
    })
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Error', error);
    })

}
