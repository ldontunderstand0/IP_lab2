var array1, array2;
var empty;

function countElement(arr, element) // Считает количество одинаковых элементов массива
{
    let count = 0;
    for (let i = 0; i < arr.length; i++)
    {
        if (arr[i] == element)
        {
            count++;
        }
    }
    return count;
}

function validate(str) // Проверяет правильность ввода массивов
{
    let arr = false;
    if (str.length > 0)
    {
        arr = str.split(" ");
        for (let i = 0; i < arr.length; i++)
        {
            if (countElement(arr, arr[i]) > 1)
            {
                arr.splice(i, 1);

                i--;
            }
        }
    }
    else
    {
        empty = "Поле ввода не должно быть пустым.";
    }
    return arr;
}

function union(arr1, arr2) // Операция объединения
{
    let result = "";
    result = arr1.join(' ');
    for (let i = 0; i < arr2.length; i++)
    {
        if (arr1.indexOf(arr2[i]) == -1)
        {
            result += ' ' + arr2[i];
        }
    }
    return result;
}

function cross(arr1, arr2) // Операция пересечения
{
    let result = "";
    if (arr1.length > arr2.length)
    {
        for (let i = 0; i < arr1.length; i++)
        {
            if (arr1.indexOf(arr2[i]) != -1)
            {
                result += arr2[i] + ' ';
            }
        }
    }
    else
    {
        for (let i = 0; i < arr2.length; i++)
        {
            if (arr1.indexOf(arr2[i]) != -1)
            {
                result += arr2[i] + ' ';
            }
        }
    }
    return result;
}

function addAtoB(arr1, arr2) // B/A
{
    for (let i = 0; i < arr2.length; i++)
    {
        for (let j = 0; j < arr1.length; j++)
        {
            if (arr2[i] == arr1[j])
            {
                arr2.splice(i , 1);
            }
        }
    }
    return arr2;
}

function addBtoA(arr1, arr2) // A/B
{
    for (let i = 0; i < arr1.length; i++)
    {
        for (let j = 0; j < arr2.length; j++)
        {
            if (arr1[i] == arr2[j])
            {
                arr1.splice(i , 1);
            }
        }
    }
    return arr1;
}

function difference(arr1, arr2) //  Операция симметрической разности
{
    let result = "";
    for (let i = 0; i < arr1.length; i++)
    {
        for (let j = 0; j < arr2.length; j++)
        {
            if (arr1[i] == arr2[j])
            {
                arr1.splice(i, 1);
                arr2.splice(j, 1);

                j--;
            }
        }
    }
    result = union(arr1, arr2);
    return result;
}

function main()
{
    let result = "";
    var a = document.getElementById('arr1');
    var b = document.getElementById('arr2');
    if ((array1 = validate(a.value)) == false)
    {
        alert(empty);
    }

    if ((array2 = validate(b.value)) == false)
    {
        alert(empty);
    }
    if (array1 != false && array2 != false)
    {
        result = union(array1, array2) + '\n';
        document.getElementById('union').innerText = "Результат операции объединения: \n" + result;

        result = cross(array1, array2) + '\n';
        document.getElementById('cross').innerText = "Результат операции пересечения: \n" + result;

        result = difference(array1, array2) + '\n';
        document.getElementById('difference').innerText = "Результат операции симметрической разности: \n" + result;

        result = addBtoA(array1, array2) + '\n';
        document.getElementById('addBtoA').innerText = "A/B: \n" + result;

        result = addAtoB(array1, array2) + '\n';
        document.getElementById('addAtoB').innerText = "B/A: \n" + result;
    }
}