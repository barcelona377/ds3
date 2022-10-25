<!DOCTYPE html>
<html>
  <head>
    <title>Desarrollo de Software 2</title>
    <link rel="stylesheet" href="css/estilotwitter.css">
    <link rel="stylesheet" href="css/hoja.css">
  </head>
  <body>
  <div class="container fondo">
    <header> 
      <img id="logo" src="INJU.png" width="100px" height="100px"/>
      <h1>INSTITUTO NACIONAL DE JUCUAPA</h1>
      <h2>Trabajando módulo 2.4</h2>
        <p>Programacion de componentes Orientado a Objeto</p>
    </header>
    <nav>
    <ul>
      <li><a href="inicio.php">Inicio</a></li>
      <li><a href="url">Nosotros</a></li>
      <li><a href="url">Servicios</a></li>
      <li><a href="url">Contacto</a></li>
    </ul>
  </nav>
  <section>
    <article>REGISTRO DE USUARIO</article>
    <P>Desarrollando mi primer ejemplo de formulario en HTML 5</P>
    <form action="">
    <table border="0" align="center">
      <tr>
        <td><label for="txtnombre">Nombre Completo</label></td>
        <td><input type="text" id="txtnombre" name="txtnombre" placeholder="Escribe tu nombre completo" size="30" maxLength="30"></td>
      </tr>
      <tr>
        <td><label for="txtapellidos">Apellidos</label></td>
        <td><input type="text" id="txtapellidos" name="txtapellidos" placeholder="Escribe tus apellidos" size="30"></td>
      </tr>
      <tr>
        <td><label for="">Estudios Academicos</label></td>
        <td>Primer Ciclo <input type="checkbox" name="primer_ciclo"></td>
        <td>Segundo Ciclo <input type="checkbox" name="segundo_ciclo"></td>
      </tr>
      <tr>
        <td><label for="txtdui">DUI</label></td>
        <td style="text-align:left"><input type="number" id="txtdui" name="txtdui" maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"></td>
      </tr>
      <tr>
        <td><label for="txtacademico">Carreras Académicas</label></td>
        <td>
          <datalist id="carreras">
            <option value="ING. EN SISTEMA">
            <option value="ING. CIVIL">
            <option value="LIC. EN COMPUTACION">
            <option value="PROFESORADOS">
          </datalist>
          <input type="text" name="txtconocimiento" id="txtacademico" list="carreras">
        </td>
      </tr>
      <tr>
        </tr>
        <tr>
          <td><label for="txtgenero">Genero</label></td>
          <td>
            <select name="txtgenero" id="txtgenero">
              <option value="m">Masculino</option>
              <option value="f">Femenino</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="txttrabajo">Trabaja actualmente</label></td>
          <td>
            <input type="radio" name="txttrabajo">si
            <input type="radio" name="txttrabajo">no
          </td>
        </tr>
        <tr>
          <td><label for="txtenfermedades">Enfermedades</label></td>
          <td>
            <textarea name="txtenfermedades" cols="40" row="20">
            </textarea> 
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" value="Guardar Registro">
            <input type="reset" value="Limpiar formulario">
          </td>
        </tr>
    </table>      
    </form>
  
  </section>
  <aside id="anuncio">
    <article>MP3</article>
      <audio controls>
        <source src="mp3/happy.mp3" type="audio/mp3">
      </audio>
  </aside>
  <footer>
    <small>Derechos Reservados ©</small>
  </footer>
  </div>
  </body>
</html>
