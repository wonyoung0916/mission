<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(arr){
        let answer = arr[0];
        for (let i = 0; i < arr.length; i++){
            if (answer > arr[i]) answer = arr[i];
        }
        return answer;
    }

    let arr=[5, 7, 4, 3, 5, 9, 11];
    console.log(solution(arr));
</script>
</body>
</html>