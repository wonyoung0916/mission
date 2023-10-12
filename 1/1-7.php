<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(day, arr){
        let answer = 0;
        let lastNum = 0;

        for (let i = 0; i < arr.length; i ++){
            lastNum = arr[i] % 10;
            if (lastNum === day){
                answer++;
            }
        }
        return answer;
    }

    arr=[25, 23, 11, 47, 53, 17, 33];
    console.log(solution(3, arr));
</script>
</body>
</html>