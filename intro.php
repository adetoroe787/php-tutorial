<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /**** 
    Author: Ee
    email: support@
     *****/
    $title = "Street";
    echo "<h1>hello $title </h1>";
    echo "<hr >";
    # echo "<p>hello php</p>";
    // print "<p>This is a PHP example.</p>";
    ?>
    <h1>Testing</h1>
    <?php
    $heavyweight = "Lennox Lewis";
    $lightweight = "Floyd Mayweather";
    echo $heavyweight, " and ", $lightweight, " are great fighters.";
    // Using printf()
    printf("$%01.2f", 43.2); // $43.20
    printf("%d beer %s", 100, "bottles"); // 100 beer bottles
    printf("%15s", "Some text");
    $state[0] = "Alabama";
    $state[1] = "Alaska";
    $state[2] = "Arizona";
    echo "<h1>$state </h1>";
    // function Multi($number)
    // {
    //     return $number * $number;
    // };

    // echo Multi(5);
    // function generate_footer()
    // {
    //     echo "<p>Copyright &copy; 2006 W. Jason Gilmore</p>";
    // }

    // generate_footer();
    // function salestax($price, $tax = .0575)
    // {
    //     $total = $price + ($price * $tax);
    //     echo "Total cost: $total";
    // }
    // $price = 15.47;
    // salestax($price);
    function retrieve_user_profile()
    {
        $user[] = "Jason";
        $user[] = "jason@example.com";
        $user[] = "English";
        return $user;
    }
    list($name, $email, $language) = retrieve_user_profile();
    echo "Name: $name, email: $email, preferred language: $language";
    echo "<hr>";
    function salestax($price, $tax)
    {
        function convert_pound($dollars, $conversion = 1.6)
        {
            return $dollars * $conversion;
        }
        $total = $price + ($price * $tax);
        echo "Total cost in dollars: $total. Cost in British pounds: "
            . convert_pound($total);
    }
    salestax(15.00, .075);
    echo convert_pound(15);
    ?>
</body>

</html>