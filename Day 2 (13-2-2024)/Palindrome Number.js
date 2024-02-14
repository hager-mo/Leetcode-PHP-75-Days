class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $first = strval($x);
        $second = strrev($first);
        return (!strcmp($first, $second))? true: false;
    }
}