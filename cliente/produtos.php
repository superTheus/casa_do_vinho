<?php 
  require("../php/header_cliente.php");
  

  $r = getVinho($pdoConnection);

?>
  
 <div class="site-section mt-5">
  <script>
    function chamarPhpAjax(id) {
       $.ajax({
          url:'carrinho.php?acao=add&codigo='+id,
          complete: function (response) {
             alert('Adicionado ao Carrinho');
          },
          error: function () {
              alert('Erro');
          }
      });  

      return false;
    }
  </script>
      <div class="container">

        <div class="row mb-5">
          <div class="col-12 section-title text-center mb-5">
            <h2 class="d-block">Produtos</h2>
            <p>Vinhos Tinto, bom preço e com qualidade!</p>
            <p><a href="#">Ver Outros Produtos<span class="icon-long-arrow-right"></span></a></p>
          </div>
        </div>
        <div class="row">
          <?php foreach ($r as $vinho) : ?>
          <div class="col-lg-4 mb-5 col-md-6">

            <div class="wine_v_1 text-center pb-4">
              <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="../images/vinhos/1.webp" alt="Image" class="img-fluid"></a>
              <div>
                <h3 class="heading mb-1"><a href="#"><?php echo $vinho['nome']; ?></a></h3>
                <span class="price">R$<?php echo number_format($vinho['preco'], 2, ',', '.'); ?></span>
              </div>
              

              <div class="wine-actions">
                  
                <h3 class="heading-2"><a href="#"><?php echo $vinho['nome']; ?></a></h3>
                <span class="price d-block">R$<?php echo number_format($vinho['preco'], 2, ',', '.'); ?></span>
                
                <div class="rating">
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star-o"></span>
                </div>
                
                <a href="carrinho.php?acao=add&id=<?php echo $vinho['id']?>" target="_blank" class="btn add"><span class="icon-shopping-bag mr-3"></span>Adicionar ao Carrinho</a>
              </div>
            </div>

          </div>
          <?php endforeach; ?>
          
          

        </div>
      </div>
    </div>
 
<?php require"../php/footer_cliente.php"; ?>