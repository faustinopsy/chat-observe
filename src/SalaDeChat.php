<?php
class SalaDeChat implements Sujeito {
    private $observadores = [];
    private $mensagem;

    public function anexar(Observador $observador) {
        $this->observadores[] = $observador;
    }

    public function desanexar(Observador $observador) {
        $this->observadores = array_filter($this->observadores, function($obs) use ($observador) {
            return $obs !== $observador;
        });
    }

    public function notificar() {
        foreach ($this->observadores as $observador) {
            $observador->atualizar($this->mensagem);
        }
    }

    public function novaMensagem($mensagem) {
        $this->mensagem = $mensagem;
        $this->notificar();
    }
}
