<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTS Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form id="formCalculate">
        <h1>Calcula tu CTS</h1>
        <div class="form-group">
            <label>Salario</label>
            <input type="text" name="salary" placeholder="Ingrese salario">
        </div>
        <div class="form-group">
            <label>Bonos</label>
            <input type="text" name="bonus" placeholder="Ingrese bono: ejm. asignación familiar, etc">
        </div>
        <div class="form-group">
            <label>Meses trabajados</label>
            <input type="text" name="months" placeholder="Ingrese meses trabajados">
        </div>
        <input type="button" value="Calcular" class="button" id="btnCalculate">
    </form>

    <div class="result result-hidden">
        <h5>Resultado</h5>
        <div class="inner">
            <div class="label-result">
                <div>Gratificación:</div>
                <div><span id="grati"></span></div>
            </div> 
            <div class="label-result">
                <div>Bono:</div>
                <div><span id="bonus"></span></div>
            </div>
            <div class="label-result">
                <div>Sexta parte de la grati: </div>
                <div><span id="sixthg"></span></div>
            </div>
            <div class="label-result">
                <div>CTS:</div>
                <div><span id="cts"></span></div>
            </div> 
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>