@extends('layouts.app')

@section('content')
<body background="img/foto.jpg">	
  
   

	<div class="contact_form">

		<div class="formulario">			
      <h1>Formulario de contacto</h1>
				<h3>Escríbenos y en breve los pondremos en contacto contigo</h3>


					<form action="submeter-formulario.php" method="post">				

						
								<p>
									<label for="nombre" class="colocar_nombre">Nombre
										<span class="obligatorio">*</span>
									</label>
										<input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
								</p>
							
								<p>
									<label for="email" class="colocar_email">Email
										<span class="obligatorio">*</span>
									</label>
										<input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
								</p>
						
								<p>
									<label for="telefone" class="colocar_telefono">Teléfono
									</label>
										<input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
								</p>		
							
								<p>
									<label for="website" class="colocar_website">Direccion
									</label>
										<input type="url" name="direccion" id="website" placeholder="Escribe tu direccion">
								</p>		
							
								<p>
									<label for="asunto" class="colocar_asunto">Asunto
										<span class="obligatorio">*</span>
									</label>
										<input type="text" name="asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
								</p>		
							
								<p>
									<label for="mensaje" class="colocar_mensaje">Mensaje
										<span class="obligatorio">*</span>
									</label>                     
                               		  <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                               	</p>	  								
							
								<button type="submit" name="enviar" id="enviar"><p>Enviar</p></button>

								<p class="aviso">
									<span class="obligatorio"> * </span>los campos son obligatorios.
								</p>					
						
					</form>
		</div>	
	</div>

</body>
@endsection