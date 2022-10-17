<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<style type="">
  
.card {
  align-items: center;
  justify-content: center;
  height: 100vh;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}

</style>
<div class="card">
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Digite seu nome" onchange="habilitaBotao()">
  <label for="floatingInput">Digite seu nome</label>
 </div>

<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" onchange="habilitaBotao()">
  <label for="floatingInput" required ="required" >Email address</label>
 </div>

<button type="button" class="btn btn-primary" id="submit" disabled>Entrar</button>
</div>
<!--FUNÇAO PARA ATIVAR O BOTAO QUANDO TODOS OS CAMPOS ESTÃO PREENCHIDOS -->
<script type="text/javascript">
function habilitaBotao(){
const nome = document.querySelector('#floatingInput').value;
const email = document.querySelector('#floatingInput').value;
 if(nome && email){
  document.querySelector('#submit').disabled = false;
  return;
 }
  document.querySelector('#submit').disabled = true;
  
}

</script>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html> 

