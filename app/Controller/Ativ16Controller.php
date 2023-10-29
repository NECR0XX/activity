<?php
class Ativ16Controller {
    public function criarAtiv16() {
        $primos = [];
        $numero = 21; // Começamos com o primeiro número primo após 20

        while (count($primos) < 5) {
            if ($this->ehPrimo($numero)) {
                $primos[] = $numero;
            }
            $numero++;
        }

        return $primos; // Retornar a lista de números primos
    }

    private function ehPrimo($n) {
        if ($n <= 1) {
            return false;
        }

        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
?>
