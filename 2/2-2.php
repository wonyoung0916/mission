<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(arr){
        let answer=1, max=arr[0];
        for (let i = 1; i < arr.length; i++){
            if (arr[i] > max){
                answer++;
                max = arr[i]
            }
        }

        return answer;
    }

    let arr=[130, 135, 148, 140, 145, 150, 150, 153];
    console.log(solution(arr));
</script>
</body>
</html>

