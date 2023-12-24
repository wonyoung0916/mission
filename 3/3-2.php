<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(s){
        let answer="YES";
        s = s.replaceAll(' ', '');
        s = s.replaceAll(';', '');
        s = s.replaceAll(',', '');
        s = s.replaceAll(':', '');
        s = s.replaceAll(/[0-9]/g, '');
        s = s.toUpperCase();

        for (let i = 0; i < s.length; i++) {
            if (s.charAt(i) !== s.charAt(s.length - (i + 1))) {
                answer = "NO";
                return answer
            }
        }

        return answer;
    }

    let str="found7, time: study; Yduts; emit, 7Dnuof";
    console.log(solution(str));
</script>
</body>
</html>