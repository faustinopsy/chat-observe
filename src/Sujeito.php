<?php
interface Sujeito {
    public function anexar(Observador $observador);
    public function desanexar(Observador $observador);
    public function notificar();
}
