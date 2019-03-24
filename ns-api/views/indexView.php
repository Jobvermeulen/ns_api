<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
?>

<html>
<head>
    <title>NS-API Page</title>
    <meta name="google-site-verification" content="D-7NEApjSnwpBJlLojGTJyb86OO3TzuJ8XPiXAYAd4Y" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/Main.css?version=<?php echo date('Y-m-d-H-i-s', filemtime('css/Main.css')) ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='views/javascript/ns-api.js?$$REVISION$$'></script>
</head>
    <body>
        <section class="autocomplete">
            <input id="stationsInput" type="text" name="station_input" placeholder="Geef je station hier op!">            
            <button id='submit_btn' name='submit_btn' type="submit">Zoek</button>            
        </section>
        <br>
        <section id='test1'>

        </section>

        <h1 id="test">Dit is een test stukje tekst!123456789 </h1>
        <br>
        <?php
            // $test = new NS_API_Controller();
            // $xmldata = $test->departinfoForStation('ut');
            // print_r($xmldata);
        ?>
        <h2>Dit is een test stukje tekst!123456789</h2>
        <br>
        <h3>Dit is een test stukje tekst!123456789</h3>
      
    </body>
</html>
