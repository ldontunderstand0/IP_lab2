var error;

function multiply(n) // Умножение
{
    let result = [];
    for (let i = 0; i < n.length; i++) {
        result[i] = [];
    }
    for (let i = 0; i < n.length; i++) {
        for (let j = 0; j < n.length; j++) {
            let element = 0;
            for (let k = 0; k < n.length; k++) {
                element += n[j][k] * n[k][i];
            }
            if (element >= 1) {
                result[i][j] = 1;
            } else {
                result[i][j] = 0;
            }
        }
    }
    return result;
}

function validate(str) // Проверяет правильность ввода
{
    let arr = str;
    let flag = true;
    if(str.length > 0) {
        for (let i = 0; i < arr.length; i++) {
            if (arr.length != arr[i].length) {
                error = "Матрица должна быть в Формате n*n.";
                flag = false;
                break;
            }
            for (let j = 0; j < arr[i].length; j++) {
                if (arr[i][j] != 1 && arr[i][j] != 0) {
                    error = "Матрица должна содержать только 1 или 0.";
                    flag = false;
                    break;
                }
            }
        }
    }
    else {
        error = "Матрица не должна быть пустой.";
        flag = false;
    }
    return flag;
}

function create(str) // Создание двумерного массива
{
    var arr = [];
    arr = str.split("\n").map(function (x) { return x.split(" "); });

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] == "" && arr[i].length == 1) {
            arr.splice(i, 1);
            i--;
        }
    }
    for (let i = 0; i < arr.length; i++) {
        for (let j = 0; j <=  arr[i].length; j++) {
            if (arr[i][j] == "") {
                arr[i].splice(j, 1);
            }
        }
    }
    return arr;
}

function main()
{
    var a = document.getElementById('arr');
    var arr = [];
    arr = create(a.value);
    if(validate(arr) == false)
    {
        alert(error);
    }
    else {
        let arrarr = multiply(arr);
        let matrix = "";
        for (let i = 0; i < arr.length; i++) {
            for (let j = 0; j < arr[i].length; j++) {
                matrix += arr[i][j] + " ";
                }
            matrix += "\n";
    }
        let doublematrix = "";
        for (let i = 0; i < arrarr.length; i++) {
            for (let j = 0; j < arrarr[i].length; j++) {
                doublematrix += arrarr[i][j] + " ";
            }
            doublematrix += "\n";
        }
        document.getElementById('matrix').innerText = "Основная матрица:\n" + matrix + "\n" + "Умноженная матрица:\n" + doublematrix + "\n";
        let antisymmetric = true;
        let reflecsive = true;
        let symmetric = true;
        let tranzitive = true;
        for(let i = 0; i < arr.length; i++) {
            for(let j = 0; j < arr.length; j++) {
                if (!(!((arr[i][j] == 1) && (i != j)) || arr[j][i] == 0)) {
                    antisymmetric = false;
                }
                if (i == j) {
                    if (arr[i][j] == 0) {
                        reflecsive = false;
                    }
                }
                else {
                    if(arr[i][j] != arr[j][i]) {
                        symmetric = false;
                    }
                }
                if ((arr[i][j] == 0 && arrarr[i][j] == 1) || (arr[i][j] == 1 && arrarr[i][j] == 0)) {
                    tranzitive = false;
                }
            }
        }
        let result = "";
        if (reflecsive == true) {
            result = "рефлексивно\n";
        }
        else {
            result = "не рефлексивно\n";
        }
        if (symmetric == true) {
            result += "симметрично\n";
        }
        else {
            result += "не симметрично\n";
        }
        if (antisymmetric == true) {
            result += "антисимметрично\n";
        }
        else {
            result += "не антисимметрично\n";
        }
        if (tranzitive == true) {
            result += "транзитивно\n";
        }
        else {
            result += "не транзитивно\n";
        }
        document.getElementById('result').innerText = "Свойства отношения:\n" + result;

    }
}