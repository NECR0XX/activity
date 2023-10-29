<?php
class Ativ1Controller {

    public function criarAtiv1($Maria) {
        $Joao = $Maria * 2;
        return $Joao;
    }
    public function criarAtiv2($sequencia) {
        $proximos_tres = [];
        $i = count($sequencia);

        for ($j = 1; $j <= 3; $j++) {
            $prox = $sequencia[$i - 1] * 2;
            $sequencia[] = $prox;
            $proximos_tres[] = $prox;
            $i++;
        }
        return $proximos_tres;
    }
    public function criarAtiv3($resulpar, $totalresul) {
        $probabilidade = $resulpar/$totalresul;
        $probabilidademporc = $probabilidade*100;

        return [$probabilidade, $probabilidademporc];
    }
    public function criarAtiv4($base, $altura) {
        return ($base * $altura) / 2;
    }
    public function criarAtiv5($multiplo, $menor) {
        $multiplos = [];
        for ($i = $multiplo; $i < $menor; $i += $multiplo) {
            $multiplos[] = $i;
        }
        return $multiplos;
    }    
    public function criarAtiv6($cuboaresta) {
        $cubovol = $cuboaresta ** 3;
        return $cubovol;
    }
    public function criarAtiv7($distancia, $tempo) {
        return ($distancia/$tempo);
    }
    public function criarAtiv8($camiseta, $preco, $camisetas) {
        $precoinicial = $preco / $camiseta;
        $precofinal = $camisetas * $precoinicial;
        return [$precoinicial, $precofinal];
    }

    public function criarAtiv9($retanglarg, $retangcomp) {
        $larg = $retanglarg+$retanglarg;
        $comp = $retangcomp+$retangcomp;
        $perimetro = $larg+$comp;
        return $perimetro;
    }
    public function criarAtiv10($sequencia2) {
        for ($i = 5; $i < 10; $i++) {
            $proximo_numero = ($i + 1) ** 2;
            $sequencia2[] = $proximo_numero;
        }
        return $sequencia2;
    }
    public function criarAtiv11($resulpar2, $totalresul2) {
        $probabilidade2 = $resulpar2/$totalresul2;
        $probabilidademporc2 = $probabilidade2*100;
        return [$probabilidade2, $probabilidademporc2];
    }
    public function criarAtiv12($raio) {
        $pi = 3.14;
        $raio2 = $raio**2;
        $area = $pi*$raio2;
        return $area;
    }
    public function criarAtiv13($multiplo2, $menor2) {
        $multiplos2 = [];
        for ($i = $multiplo2; $i < $menor2; $i += $multiplo2) {
            $multiplos2[] = $i;
        }
        return $multiplos2;
    }
    public function criarAtiv14($distancia, $velocidade) {
            $tempo = $distancia/$velocidade;
            return $tempo;
    }
    public function criarAtiv15($caneta, $preco2, $canetas) {
        $precoinicial2 = $preco2 / $caneta;
        $precofinal2 = $canetas * $precoinicial2;
        return [$precoinicial2, $precofinal2];
    }
    public function criarAtiv16($caneta, $preco2, $canetas) {
        $precoinicial2 = $preco2 / $caneta;
        $precofinal2 = $canetas * $precoinicial2;
        return [$precoinicial2, $precofinal2];
    }
    public function criarAtiv17($valor, $juros, $anos) {
        $juros_percentual = $juros/100;
        $juros_valor = (1+$juros_percentual)**$anos;
        $valor_futuro = $valor * $juros_valor;
        return $valor_futuro;
    }
}
?>