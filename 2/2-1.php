<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(arr){
        let answer=[];
        let first = arr[0];
        for (let i = 1; i < arr.length; i++){
            if (arr[i] > first){
                answer.push(arr[i])
            }
        }
        return answer;
    }

    let arr=[7, 3, 9, 5, 6, 12];
    console.log(solution(arr));
</script>
</body>
</html>