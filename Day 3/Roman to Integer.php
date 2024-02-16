class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $arr = [];
        for($i=0; $i<strlen($s); $i++){
            switch ($s[$i]) {
                case 'I' : 
                    array_push($arr,1);
                    // $arr[] = 1;
                    break;
                case 'V' : 
                    array_push($arr,5);
                    break;
                case 'X' : 
                    array_push($arr,10);
                    break;
                case 'L' : 
                    array_push($arr,50);
                    break;
                case 'C' : 
                    array_push($arr,100);
                    break;
                case 'D' : 
                    array_push($arr,500);
                    break;
                case 'M' : 
                    array_push($arr,1000);
                    break;
            }
        }

        if(count($arr)==1){
            return $arr[0];
        }

        $j=count($arr)-1;
        $k=$j-1;
        $num = $arr[$j];
        for($i=0; $i<(count($arr)-1); $i++){
            if($arr[$j] <= $arr[$k]){
                $num += $arr[$k];
            }else{
                $num -= $arr[$k];
            }
            $j--;
            $k--;
        }
        return $num;
    }
}