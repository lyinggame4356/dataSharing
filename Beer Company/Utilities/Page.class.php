<?php
class Page{
    static function header(){
          ?>
          <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BEER COMPANY 5!</title>
  </head>
  <body>
    <h1>Welcome to our datababse!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          <?php
    }

    static function footer()
    {?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
      </body>
    </html><?php

    }

    static function beerForm()
    {
        ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <table>
              <thead>
                  <tr>
                      <td>Property</td>
                      <td>Value</td>
                  </tr>
                  <tr>
                      <td><input type="text" name="name" value="<?php echo isset($_POST['name'])? $_POST['name']: ""; ?>"></td>
                      <td><select name="type">
                          <?php
                          foreach(BEER_TYPE as $tip)
                          {
                              if( isset($_POST['type']) && $_POST['type'] == $tip)
                              {
                                  echo "<option selected>".$tip."</option>";
                              }
                              else{
                                  echo "<option>$tip</option>";
                              }
                          }
                          ?>
                      </select></td>
                      <td><input type="number" name="price" value="<?php echo isset($_POST['price'])?$_POST['price']: ""; ?>"></td>
                      <td><input type="number" name="num" value="<?php echo isset($_POST['num'])?$_POST['num']: "" ?>"></td>
                  </tr>
              </thead>
          </table>
        </form>
        <?php

    }

    static function showBeerForm(array $beers)
    {  
        echo '<table class="table table-striped"><thead>'
        echo '<tr><td>Id</td>';
        echo '<td>Name</td>';
        echo '<td>Brewery-type</td>';
        echo '<td>Price</td>';
        echo '<td>Quantitiy</td>';  
        echo '<td>Total Price</td>;
        echo '</tr>';
        
        foreach($beers as $beer)
        {
            echo '<tr>';
            echo '<td>'.$beer->getName().'</td>';
            echo '<td>'.$beer ->getType().'</td>';
            echo '<td>'.$beer->getPrice().'</td>';
            echo '<td>'.$beer->getNum().'</td>';
            echo'<td>'.$beer->getTotalP().'</td>';
            echo '</tr>';
        }



    

    }






}
