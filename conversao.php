<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado Conversão</title>
</head>
<body>
    <section>
        <?php 
        $_num = $_GET['numero'];

        $_conv = $_num / 5.57;

        echo("<h4>Você tem R\$ " . $_num . " Reais");

        // Esse number_format permite vc escolher o numero de casas decimais, aqui foi duas, a divisão para as casas decimais que foi escolhido a virgula ',' e o que vai separar milhar aqui foi o espaço ' ' o primeiro termo é o número.
        echo("<p>Você tem <b> us\$" . number_format($_conv, 2, ',', ' ') . "</b> Dolares</p>");

        // Formatação de moedas com internacionalização

        // Aqui mostramos o idioma do site e o tipo de numero que vai formatar, deve ser escrito exatamente assim

        // Não estava fuincionando no servidor local xampp por que a biblioteca que é usada estava desativada

        // A biblioteca é a intl
        $_teste = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        // Primeiro deve ser colocado no numfmt... o Padrão do computador, o valor que esta no padrão e a sigra internacional dela (já é acresentado o R$)
        echo("<p>Seus <b> " . numfmt_format_currency($_teste, $_num, "BRL") . "</b> Equivalem a <b> " . numfmt_format_currency($_teste, $_conv, "USD") . "</b> Dolares</p>");
        ?>
    </section>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>

</html>
