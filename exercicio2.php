<?php

class Notificacao {
    protected string $mensagem;

    public function __construct(string $mensagem) {
        $this->mensagem = $mensagem;
    }

    public function enviar() {
        echo "Enviando uma mensagem: " . $this->mensagem;
    }
}

class NotificacaoEmail extends Notificacao {
    public function enviar() {
        echo "A mensagem foi enviada por Email!<br>" . $this->mensagem;
    }
}

class NotificacaoSMS extends Notificacao {
    public function enviar() {
        echo "A mensagem foi enviada por SMS!<br>" . $this->mensagem;
    }
}

class NotificacaoPush extends Notificacao {
    public function enviar() {
        echo "A mensagem foi enviada por Push!<br>" . $this->mensagem;
    }
}

$notificacao = new NotificacaoEmail('Sua inscrição foi realizada com sucesso!');
$notificacao->enviar();