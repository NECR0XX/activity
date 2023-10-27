<?php
class EsporteModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    // Model para criar esportes
    public function criarEsporte($modalidade, $ano_olimpiada) {
        $sql = "INSERT INTO esporte (modalidade, ano_olimpiada) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$modalidade, $ano_olimpiada]);
    }

    // Model para listar esportes
    public function listarEsportes() {
        $sql = "SELECT * FROM esporte";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar esportes
    public function atualizarEsporte($id_esporte, $modalidade, $ano_olimpiada){
        $sql = "UPDATE esporte SET modalidade = ?, ano_olimpiada = ? WHERE id_esporte = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$modalidade, $ano_olimpiada, $id_esporte]);
    }
    
    // Model para deletar esporte
    public function excluirEsporte($id_esporte) {
        $sql = "DELETE FROM esporte WHERE id_esporte = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_esporte]);
    }
    
}
?>