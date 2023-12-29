@include('plantillas.navBar')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

<main>
    <div class="productForm">
        <div class="heading">Registrarse</div>
        <form action="" class="form">

            <label for="nombre"> Nombre* </label>
            <input class="input" type="text" name="nombre" id="nombre" required maxlength="40" minlength="4">

            <label for="apellidopaterno"> Apellido paterno* </label>
            <input class="input" type="text" name="apellidopaterno" id="apellidopaterno" required maxlength="30" minlength="4">

            <label for="apellidomaterno"> Apellido materno*</label>
            <input class="input" type="text" name="apellidomaterno" id="apellidomaterno" required maxlength="30" minlength="4">

            <label for="email"> Correo electronico* </label>
            <input class="input" type="email" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

            <label for="pwd"> Contraseña* </label>
            <input class="input" type="password" name="pwd" id="pwd" required maxlength="25" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$">

            <input class="add-button" type="submit" value="Crear cuenta">

            <a class="log-form" href="login">Ya poseo una cuenta</a>
        </form>
</main>

    @include('plantillas.footer')
</body>
</html>