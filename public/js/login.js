function submit(){
    $user = document.getElementById('usr').value;
    $pass = document.getElementById('pwd').value;
    console.log("Haciendo fetch con los datos User:"+ $user+ " Pass: "+ $pass);
    fetch('http://lavandabeauty.test:8080/Loginp', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
        },
        body: new URLSearchParams({
            'email': $user,
            'password': $pass
        })
    }).then(response => response.text()).then((response)=>{
        if(response.includes("Valid")){
            $rs = JSON.parse(response);
            Cookies.set("token",$rs.token);
            Cookies.set("token",Cookies.get("token").split(":")[1].substring(1,(Cookies.get("token").split(":")[1].length) -1));
            Cookies.set("usuario",$user);
            console.log("Usuario: "+Cookies.get("usuario")+" Token: "+Cookies.get("token"));
            $url = "http://lavandabeauty.test:8080/";
            window.location.replace($url);
        }else{
            alert("Datos incorrectos");
        }
    });
}