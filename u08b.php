<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Get pizza data sent by GET
    // isset() tests for data at the gateway, required on many servers
    // Radio buttons pass values ($size), Checkboxes pass a state T/F

    if(isset($_POST["name"])) { $name = $_POST["name"]; } else { $name = ""; }
    if(isset($_POST["size"])) { $size = $_POST["size"]; } else { $size = ""; }
    if(isset($_POST["pepp"])) { $pepp = $_POST["pepp"]; } else { $pepp = ""; }
    if(isset($_POST["ex"])) { $ex = $_POST["ex"]; } else { $ex = ""; }
    if(isset($_POST["mush"])) { $mush = $_POST["mush"]; } else { $mush = ""; }
    if(isset($_POST["olives"])) { $olives = $_POST["olives"]; } else { $olives = ""; }
    if(isset($_POST["pine"])) { $pine = $_POST["pine"]; } else { $pine = ""; }
    if(isset($_POST["saus"])) { $saus = $_POST["saus"]; } else { $saus = ""; }

    $tot = 0; //sets variable price to 0

    print "
    <div id='receipt'>
        <h1>Mika's's Pizzaria</h1>
        <h2>Receipt</h2>
        <h3>Pizza Order for: $name </h3> 
        
        <p id='items'><pre><u>Items</u>               <u>Price</u></pre>";

        
        // Print size and price if checked
        if($size == "Small") {
            print "<pre>Size: Small          $5.00</pre>";
            $tot = $tot + 5.00;
        }

        if($size == "Medium") {
            print "<pre>Size: Medium        $6.00</pre>";
            $tot = $tot + 6.00;
        } 

        if($size == "Large") {
            print "<pre>Size: Large         $7.00</pre>";
            $tot = $tot + 7.00;
        }
        // Print toppings and price if checked and totals price
        if($pepp) {
            print "<pre>Pepperoni            $1.00</pre>";
            $tot + 2.00;
        }

        if($ex) {
            print "<pre>Extra Cheese      $1.00</pre>";
            $tot = $tot + 1.00;
        }

        if($mush) {
            print "<pre>Mushrooms            $1.00</pre>";
            $tot = $tot + 1.00;
        }

        if($olives) {
            print "<pre>Olives        $1.00</pre>";
            $tot = $tot + 1.00;
        }
        if($pine) {
            print "<pre>Pineapple        $1.00</pre>";
            $tot = $tot + 1.00;
        }
        if($saus) {
            print "<pre>Sausage        $1.00</pre>";
            $tot = $tot + 1.00;
        }

        $ftot = number_format($tot, 2);//variable for total price formatted 2 decimal places
        
        //Prints total price of order
        print "<br/>
                <pre>Total:              $$ftot</pre>
        </p>
    </div>
</body>
"

?>
