<?php

    $textoHtml = "<p>Testando.</p><div>Uma div</div><p>Outro parágrafo</p>";

    echo $textoHtml;

    $salvarTextoBanco = strip_tags($textoHtml);

    echo $salvarTextoBanco;