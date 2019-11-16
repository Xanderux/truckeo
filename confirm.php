<?php
include("header.php");
?>


<main id="main">




    <!--==========================
      About Us Section
      ============================-->
      <section id="about">
        <div class="container">
          <br>
          <br>
          <br>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Intitulé</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix ttc</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Tomates (1kg)</td>
                <td>1</td>
                <td>4,00€</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Miel (500gr)</td>
                <td>2</td>
                <td>9,00€</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Gruillère</td>
                <td>3</td>
                <td>12,00€</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
               <th scope="row">Total</th>
               <td></td>
               <td> </td>
               <td>25€</td>

             </tr>
           </tfoot>
         </table>
       <button type="button" class="btn btn-success col-md-4 offset-md-8">Payer</button>


       </div>



     </div>

   </section>



 </main>




 <?php
 include("footer.php");
 ?>