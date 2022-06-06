 <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Get pizza data sent by GET
    // isset() tests for data at the gateway, required on many servers
    // Radio buttons pass values ($size), Checkboxes pass a state T/F

    if(isset($_POST["name"])) { $name = $_POST["name"]; } else { $name = ""; }
    if(isset($_POST["size"])) { $size = $_POST["size"]; } else { $size = ""; }
    if(isset($_POST["pepp"])) { $pepp = $_POST["pepp"]; } else { $pepp = ""; }
    if(isset($_POST["isau"])) { $isau = $_POST["isau"]; } else { $isau = ""; }
    if(isset($_POST["mush"])) { $mush = $_POST["mush"]; } else { $mush = ""; }
    if(isset($_POST["gppr"])) { $gppr = $_POST["gppr"]; } else { $gppr = ""; }

    $tot = 0; //sets variable price to 0

    print "
    <div id='receipt'>
        <h1>Chad's Pizzaria</h1>
        <h2>Receipt</h2>
        <h3>Pizza Order for: $name </h3> 
        
        <p id='items'><pre><u>Items</u>               <u>Price</u></pre>";

        
        // Print size and price if checked
        if($size == "Small") {
            print "<pre>Size: Small          $8.50</pre>";
            $tot = $tot + 8.50;
        }

        if($size == "Medium") {
            print "<pre>Size: Medium        $10.50</pre>";
            $tot = $tot + 10.50;
        } 

        if($size == "Large") {
            print "<pre>Size: Large         $12.50</pre>";
            $tot = $tot + 12.50;
        }
        // Print toppings and price if checked and totals price
        if($pepp) {
            print "<pre>Pepperoni            $2.00</pre>";
            $tot + 2.00;
        }

        if($isau) {
            print "<pre>Italian Sausage      $2.50</pre>";
            $tot = $tot + 2.50;
        }

        if($mush) {
            print "<pre>Mushrooms            $2.00</pre>";
            $tot = $tot + 2.00;
        }

        if($gppr) {
            print "<pre>Green Peppers        $0.75</pre>";
            $tot = $tot + 0.75;
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
