<html>
<head>
    <meta charset="UTF-8">
    <title>출력결과</title>
</head>
<body>
<script>
    function solution(arr){
        let answer=Number.MIN_SAFE_INTEGER;
        let n=arr.length;
        let sum1=sum2=sum3=sum4=0;

        for (let i = 0; i < n; i++){
            sum1 = 0;
            sum2 = 0;

            for (let j = 0; j < n; j++){
                sum1 += arr[i][j]; // 가로 합
                sum2 += arr[j][i]; // 세로 합
                if (i === j){ // 대각선(왼쪽->오른쪽) 합
                    sum3 += arr[i][j]
                }
                if ((i+j) === (n-1)){ // 대각선 (오른쪽->왼쪽) 합
                    sum4 += arr[i][j]
                }
            }
            answer = Math.max(sum1,sum2,sum3,sum4,answer);
        }
        return answer;
    }

    let arr=[[10, 13, 10, 12, 15],
        [12, 39, 30, 23, 11],
        [11, 25, 50, 53, 15],
        [19, 27, 29, 37, 27],
        [19, 13, 30, 13, 19]];
    console.log(solution(arr));
</script>
</body>
</html>