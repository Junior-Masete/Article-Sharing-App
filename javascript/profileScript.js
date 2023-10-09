
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
                var obj = { //for articles
                    "api_key": "1253f2dee8776be84dcb",
                    "type": "GetAllArticles",
                    "userId": data.userid,
                    "return": "*"
                }

                let post = JSON.stringify(obj);
                fetch("localhost/../api.php", {
                    method:'post',
                    body: post,
                    headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                    }
                })
                .then((response) => {
                    return response.json();
                })
                .then(data => {

                    console.log(data.data)
                    var artcl = document.querySelector('.myArticles');
                    /*artcl.innerHTML += '<div class="article"><h3>'+ data.data[0].title+'</h3>'
                                    +'<img src="images/'+data.data[0].image_path+'" alt="" width="200" />'
                                    +'<p>'+ data.data[0].description+'</p></div>';*/

                    for(var j=0; j < data.data.length; j++){
                        artcl.innerHTML += '<div class="article"><h3>'+ data.data[j].title+'</h3>'
                                    +'<img src="images/'+data.data[j].image_path+'" alt="" width="200" />'
                                    +'<p>'+ data.data[j].description+'</p></div>';

                                    if(j > 2) break;
                    }
                })
            

                var obj2 = { //for friends
                    "api_key": "1253f2dee8776be84dcb",
                    "type": "GetAllFriends",
                    "userId": data.userid,
                    "return": "*"
                }
            
            
            let post2 = JSON.stringify(obj2);

            fetch("localhost/../api.php", {
                method:'post',
                body: post2,
                headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
                }
            })
            .then((response) => {
                return response.json();
            })
            .then(data => {
                var frnds = document.querySelector('.profile-row3');
                for(var i = 0; i < data.data.length; i++){
                    frnds.innerHTML += '<div>'
                    +'<img src="images/'+data.data[i].image_path +'" width="150" />'
                    +'<p>'+data.data[i].name+ ' ' + data.data[i].surname+ '</p>'
                    +'</div>';

                    if(i > 2) break;
                 }
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


// Call the function to check login status when your page loads
window.addEventListener('load', checkLoginStatus);

/*
function fetchdata (post){
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "localhost/../api.php", true);
    xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
    xhr.send(post);

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var jdata = JSON.parse(xhr.responseText);
        
            console.log(jdata.data);

            var artcl = document.querySelector('.myArticles');

            for(var j=0; j < jdata.data.length || j <= 2; j++){
                artcl.innerHTML += '<div class="article"><h3>'+ jdata.data[j].title+'</h3>'
                            +'<img src="images/'+jdata.data[j].image_path+'" alt="" width="200" />'
                            +'<p>'+ jdata.data[j].description+'</p></div>';
            }

        }
    }
}

function fetchfriends (post){
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "localhost/../api.php", true);
    xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
    xhr.send(post);

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var jdata = JSON.parse(xhr.responseText);
            
            var frnds = document.querySelector('.profile-row3');
            for(var i = 0; i < jdata.data.length || i < 3; i++){
                frnds.innerHTML += '<div>'
                +'<img src="images/'+jdata.data[i].image_path +'" width="150" />'
                +'<p>'+jdata.data[i].name+ ' ' + jdata.data[i].surname+ '</p>'
                                +'</div>'
            }

           

        }
        else{
            console.log('There is a problem making a request');
        }
    }

     
}

*/