<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(a, b, c){
        let arr = [a,b,c];
        let max = 0; // 가장큰값
        let key = 0; // 가장큰 값의 인덱스

        for (let i = 0; i < arr.length; i++){
            if (arr[i] > max){
                max = arr[i];
                key = i; // 가장큰 값의 인덱스
            }
        }
        arr.splice(key,1); // 해당배열에서 큰 값 제거
        let sum = arr.reduce((a, b) => (a + b)) // 배열의 합
        
        if (max-sum < 0){
            return "YES";
        }else{
            return "NO";
        }
    }
    console.log(solution(13, 18, 17));
</script>
</body>
</html>