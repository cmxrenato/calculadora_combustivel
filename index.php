<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Renato Leal">
   
    <title>Gasolina ou Álcool</title>

   

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    


<style type="text/css">
  


h5
{

  background-color: yellow;
}

#titulo
{
  border-top: 2px solid;
  border-color: grey;
  padding-top: 30px;
 
}


</style>

    
</head>
  



<body>
    
<header>

  
</header>

<main class= "form-signin w-100 m-auto">

    <section class="py-5 text-center container">
	  
        <div class="row py-lg-5">
		
          <div class="col-lg-6 col-md-8 mx-auto" id="calculadora">
            <h1 class="fw-light">Gasolina ou Álcool?</h1>
            
  <br>
        
    <form action = "index.php" method= "post">
     

        <div>
          <label>Clique abaixo para escolher o combustível:</label>
      <select class="form-select" aria-label="Default select example" name="combustivel"  required >
          <option value="gasolina" required >Gasolina</option>
          <option value="alcool" >Álcool</option>
      </select>
        </div>


  <br>
        <div class="form-floating">
          <input type="number" class="form-control" step="0.001" placeholder = "valor" name="valor" required>
          <label for="floatingInput">Qual o preço do combustível?</label>
        </div><br>
    
    
        <div class="form-floating">
          <button class="w-100 btn btn-lg btn-primary" type="submit"> Calcular</button>
        </div>
  
  </form>
  <br>
            <div>
		            <h5><?php require 'tratamento_dados.php';?> </h5>
            </div>  
      
      </div>
    </div>
  <br>

    <div id="titulo" width="100%">
      <h1>Como funciona a calculadora?</h1>
      <p>O cálculo médio é feito a partir do <strong>preço</strong> e do <strong>rendimento</strong> de cada combustível. Portanto, para o etanol ser mais vantajoso ele deve custar no máximo 70% do preço da gasolina, pois ele tem menor <strong>rendimento</strong>. </p>
    </div>
  </section>

</main>

<footer class="text-muted py-5">
	
	  <p class="py-5 text-center container">&copy; Renato_Leal-2023</p>

</footer>
</body>
</html>
