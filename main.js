function calculateCts(url, data) {
    fetch(url, {
        method: 'POST',
        accept: "application/json",
        body: data,
        processData: false,
        contentType: false,
    })
    .then( (response) => response.json())
    .then( (data) => {
        document.querySelector('.result').classList.remove('result-hidden')
        document.querySelector('.result').classList.add('result-show')

        document.getElementById('grati').innerHTML = `S/${data.grati}`
        document.getElementById('bonus').innerHTML = `S/${data.bonus}`
        document.getElementById('sixthg').innerHTML = `S/${data.sixthg}`
        document.getElementById('cts').innerHTML = `S/${data.cts}`
    });
}
let btnCalc = document.querySelector('#btnCalculate');

btnCalc.addEventListener('click', (e) => {
    let form = document.querySelector('#formCalculate');
    let data = new FormData(form);

    calculateCts('calculate.php', data);
})


