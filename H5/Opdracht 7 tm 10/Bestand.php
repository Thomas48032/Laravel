<?php
class Bestand
{
    public function lezen()
    {
        //bestand lezen
        try {
            $dir = dirname(__FILE__);
            $bestand = "/bestand.txt";
            if (!file_exists($dir . $bestand)) {
                throw new Exception('File not found.');
            }
            $handle = fopen($dir . $bestand, "r");
            $content = stream_get_contents($handle);
            echo "\nBestand gelezen: " . $content;
            fclose($handle);
        } catch (Exception $e) {
            echo "Exception: " . $e->getMessage();
        }
    }

    public function schrijven()
    {
        // bestand creeren
        try {
            $dir = dirname(__FILE__);
            $bestand = "/bestand.txt";
            $handle = fopen($dir . $bestand, "w");
            fwrite($handle, "Simpele tekst in bestand.txt");
            fclose($handle);
            echo "\nBestand aangemaakt.<br>";
        } catch (IOException $e) {
            echo $e->getMessage();
        }
    }
}