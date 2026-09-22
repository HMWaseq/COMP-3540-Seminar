<!DOCTYPE html>
<html>
<head>
    <title>Array Average</title>
</head>
<body>

<script>

function readNumbers(n)
{
    let arr = [];

    for(let i = 0; i < n; i++)
    {
        let num = Number(prompt("Enter number " + (i + 1)));
        arr.push(num);
    }

    return arr;
}

function average(arr)
{
    let sum = 0;

    for(let i = 0; i < arr.length; i++)
    {
        sum += arr[i];
    }

    return sum / arr.length;
}

// Example
let n = Number(prompt("How many numbers?"));
let numbers = readNumbers(n);

document.write("Numbers: " + numbers + "<br>");
document.write("Average: " + average(numbers));

</script>

</body>
</html>