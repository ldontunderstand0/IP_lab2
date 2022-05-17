var error;

function validate(arr1, arr2, couples) // Проверяет правильность ввода
{
    for(element of couples) {
        if(!(arr1.has(element[0]) && arr2.has(element[1])) || element.length != 2) {
            error = "Пары элементов должны быть вида: AiBi, AjBj";
        }
    }
    if (arr1.size <= 1) {
        error = "Должно быть не менее 2 элементов в первом множестве\n";
    }
    else if (arr2.size <= 1) {
        error = "Должно быть не менее 2 элементов во втором множестве\n";
    }
    else if (couples.length <= 1) {
        error = "Должно быть не менее 2 пар элементов";
    }
    if(error) {
        return false;
    }else {
        return true;
    }
}

function create(str)  // Создание двумерного массива
{
    var arr = str.split(" ");
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] == "") {
            arr.splice(i, 1);
        }
    }
    return arr;
}

function main()
{

    arr1 = document.getElementById('arr1');
    arr2 = document.getElementById('arr2');
    var couples = document.getElementById('couples');
    arr1 = create(arr1.value);
    arr2 = create(arr2.value);
    const setArr1 = new Set(arr1);
    const setArr2 = new Set(arr2);
    couples = create(couples.value);
    if (validate(setArr1, setArr2, couples) == false) {
        alert(error);
    }
    else {
        var m = [];
        for (let i = 0; i < arr1.length; i++) {
            m[i] = [];
            for (let j = 0; j < arr2.length; j++) {
                m[i][j] = 0;
            }
        }
        var c = couples.slice();
        for (let i = 0; i < couples.length; i++) {
            for (let j = 0; j < couples.length; j++) {
                if (couples[i][0] == arr1[j]) {
                    couples[i] = 0;
                    couples[i] += j;
                    break;
                }
            }
            for (let j = 0; j < couples.length; j++) {
                if (c[i][1] == arr2[j]) {
                    couples[i] += '' + j;
                    break;
                }
            }
        }
        for (let i = 0; i < couples.length; i++) {
            m[couples[i][0]][couples[i][1]] = 1;
        }
        let matrix = "";
        for (let i = 0; i < arr1.length; i++) {
            for (let j = 0; j < arr2.length; j++) {
                matrix += m[i][j] + ' ';
            }
            matrix += '\n';
        }
        document.getElementById('matrix').innerText = "Матрица отношения (A - строки, B - столбцы):\n" + matrix;
        var flag1 = true;
        var flag2 = true;
        let countW = 0;
        let countH = 0;
        for (let i = 0; i < arr1.length; i++) {
            for (let j = 0; j < arr2.length; j++) {
                countW += m[i][j];
            }
            if (countW >= 2) {
                flag1 = false;
                break;
            } else if (countW == 0) {
                flag1 = false;
                break;
            } else {
                countW = 0;
            }
        }
        for (let i = 0; i < arr1.length; i++) {
            for (let j = 0; j < arr2.length; j++) {
                countH += m[j][i];
            }
            if (countH >= 2) {
                flag2 = false;
                break;
            } else if (countH == 0) {
                flag2 = false;
                break;
            }
            else {
                countH = 0;
            }
        }
        let result = "";
        if (flag1) {
            result += "Отношение является функцией А в B\n";
        }else {
            result += "Отношение не является функцией А в B\n";
        }
        if (flag2) {
            result += "Отношение является функцией B в A";
        }else {
            result += "Отношение не является функцией B в A";
        }
        document.getElementById('result').innerText = "\n" + result;
    }
}