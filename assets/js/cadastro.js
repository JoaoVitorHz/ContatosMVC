let tell1 = document.getElementById('inputTell1')
let tell2 = document.getElementById('inputTell2')
let cpf = document.getElementById('inputCPF')


tell1.addEventListener('keypress', () => {
    let tell1Length = tell1.value.length

    if (tell1Length == 0) {
        tell1.value += '('
    }
     if (tell1Length == 3) {
        tell1.value += ') '
    }
    if (tell1Length == 10) {
        tell1.value += '-'
    }
})

tell2.addEventListener('keypress', () => {
    let tell2Length = tell2.value.length

    if (tell2Length == 0) {
        tell2.value += '('
    }
     if (tell2Length == 3) {
        tell2.value += ') '
    }
    if (tell2Length == 10) {
        tell2.value += '-'
    }
})

cpf.addEventListener('keypress', () => {
    let cpfLenght = cpf.value.length

    if (cpfLenght == 3 || cpfLenght == 7) {
        cpf.value += '.'
    }else if (cpfLenght == 11) {
        cpf.value += '-'
    }
})