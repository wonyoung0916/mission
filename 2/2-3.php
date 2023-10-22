<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(a, b){
        let answer=[];
        for (let i = 0; i < a.length; i++){
            if (a[i] === b[i]){
                answer.push('D');
                continue;
            }
            switch (a[i]){
                case 1 : (b[i] + 1) === 4 ? answer.push('A') : answer.push('B')
                    break;
                case 2 : (b[i] + 2) === 3 ? answer.push('A') : answer.push('B')
                    break;
                case 3: (b[i] + 3) === 5 ? answer.push('A') : answer.push('B')
                    break;
            }
        }
        return answer;
    }

    let a=[2, 3, 3, 1, 3];
    let b=[1, 1, 2, 2, 3];
    console.log(solution(a, b));
</script>
</body>
</html>