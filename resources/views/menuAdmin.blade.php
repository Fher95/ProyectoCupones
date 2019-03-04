<section>
    <button>FUNCIONO ADMIN</button>
</section>
<?php>
                        $usuario = auth::user();
                        if($usuario->rolAdministrador==1){include('menuAdmin.php'); }
                        if($usuario->rolPublicista==1){include('menuPublicista.php'); }
                        if($usuario->rolCliente==1){include('menuAdmin.php'); }    
                    ?>