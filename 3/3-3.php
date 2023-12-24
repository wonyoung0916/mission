<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(str){
        let answer="";

        for (let i = 0; i < str.length; i ++){
            if (!isNaN(str.charAt(i))){ // 숫자아닌게 아닌지
                answer += str.charAt(i);
            }
        }
        return parseInt(answer);
    }
    let str="g0en2T0s8eSoft";
    console.log(solution(str));
</script>
</body>
</html>