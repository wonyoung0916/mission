<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(arr){
        let n=arr.length;
        let answer=Array.from({length:n}, ()=>1);

        for (let i = 0; i < n ; i++){
            let rank = 1;
            for (let j = 0; j < n ; j++){
                if (arr[i] < arr[j]){
                    rank++;
                }
            }
            answer[i] = rank;
        }
        return answer;
    }

    let arr=[87, 89, 92, 100, 76, 100];
    console.log(solution(arr));
</script>
</body>
</html>