<h2>Calculadora Simples em PHP</h2>
    <form method="post" action="">
        <input type="number" name="valor1" placeholder="0" required>
        <input type="number" name="valor2" placeholder="0" required><br><br>

        <button type="submit" name="operacao" value="+">+</button>
        <button type="submit" name="operacao" value="-">-</button>
        <button type="submit" name="operacao" value="*">*</button>
        <button type="submit" name="operacao" value="/">/</button>
    </form>

    <h3 id="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 = floatval($_POST['valor1']);
            $valor2 = floatval($_POST['valor2']);
            $operacao = $_POST['operacao'];
            $resultado = '';

            switch ($operacao) {
                case '+':
                    $resultado = $valor1 + $valor2;
                    break;
                case '-':
                    $resultado = $valor1 - $valor2;
                    break;
                case '*':
                    $resultado = $valor1 * $valor2;
                    break;
                case '/':
                    if ($valor2 != 0) {
                        $resultado = $valor1 / $valor2;
                    } else {
                        $resultado = 'Erro: Divisão por zero!';
                    }
                    break;
                default:
                    $resultado = 'Operação inválida!';
            }

            echo "Resultado: $resultado";
        }
        ?>
    </h3>