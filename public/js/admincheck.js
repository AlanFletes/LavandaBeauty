    console.log("Script admin");
    if (Cookies.get("usuario") === "pancho@mail.com") {
        console.log("Admin");
        $menu = document.getElementById("menuadd");
        $menu.innerHTML = $menu.innerHTML + "<li><a href='#' onClick='redirSubir()'>Subir producto</a></li><li><a href='#' onClick='cerrar()'>Cerrar sesion</a></li>";

        function cerrar() {
            console.log("Cerrando sesion...");
            Cookies.set("token", null);
            Cookies.set("usuario", null);
            location.reload();
        }
        console.log("Usuario correcto!");
    }
    function redirSubir(){
        window.location = "/Subir?token="+Cookies.get("token");
    }